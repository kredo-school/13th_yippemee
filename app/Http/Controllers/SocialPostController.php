<?php

namespace App\Http\Controllers;

use App\Models\SocialPost;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use GuzzleHttp\Client;
use App\Models\Genre;

class SocialPostController extends Controller
{
    const LOCAL_STORAGE_FOLDER = 'public/images/';
    private $social_post;

    public function __construct(SocialPost $social_post)
    {
        $this->social_post = $social_post;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_genres = Genre::all();
        return view('social.posts.create', compact('all_genres'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    # moderate for description
    private function moderateContent($description)
    {
        $client = new Client();
        $endpointBase = config('azure.content_moderator_endpoint');
        $path = "contentmoderator/moderate/v1.0/ProcessText/Screen?autocorrect=True&PII=True&classify=True";
        $endpoint = rtrim($endpointBase, '/') . '/' . $path;
    
        $response = $client->post($endpoint, [
            'headers' => [
                'Content-Type' => 'text/plain',
                'Ocp-Apim-Subscription-Key' => config('azure.content_moderator_key'),
            ],
            'body' => $description
        ]);
    
        $result = json_decode($response->getBody(), true);
    
        if (isset($result['Classification']) && $result['Classification']['ReviewRecommended'] == true) {
            return ['status' => false, 'message' => 'includes inappropriate content in description'];
        }
        # This moderator is only for description. With this free plan API, it is not possible to moderate more than one item. If I have more time, I will consider about other moderator for restaurant_name and image. 

        return ['status' => true, 'message' => ''];
    }

    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You cannot post because you are not logged in.');
        }

        $description = $request->input('description');

        # moderate for description
        $moderationResult = $this->moderateContent($description);
        if (!$moderationResult['status']) {
            return back()->withErrors(['description' => $moderationResult['message']]);
        }

        #validate all from data
        $request->validate([
            'description' => 'max:1000',
            'restaurant_name' => 'min:0|max:50',
            'image' => 'mimes:jpg,png,jpeg,gif|max:1048',
            'genre' => 'array|max:2'
        ]);

        #save the social_post
        $this->social_post->user_id = Auth::user()->id;
        $this->social_post->description = $request->description;
        $this->social_post->restaurant_name = $request->restaurant_name;

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $this->social_post->image = 'data:image/' . $request->image->extension() . ';base64,' . base64_encode(file_get_contents($request->image));
        }

        $this->social_post->save();

        #save the genre, acquisition and association of genre_ID
        $genreIds = $request->input('genre', []);
        $this->social_post->genres()->sync($genreIds);

        return redirect()->route('social.social_home');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SocialPost
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $social_post = SocialPost::with('genres')->findOrFail($id);

        $user = Auth::user();

        # Get user's friend list ID
        $friends_ids = $user->friends()->pluck('users.id')->toArray();

        return view('social.posts.show', compact('social_post', 'friends_ids'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SocialPost  $socialPost
     * @return \Illuminate\Http\Response
     */
    
    public function edit($id)
    {
        $social_post = SocialPost::with('genres')->findOrFail($id);
        $all_genres = Genre::all();

        # get array of genre IDs
        $selected_genres = $social_post->genres->pluck('id')->toArray();

        if ($social_post->user_id !== Auth::user()->id){
            return redirect()->route('social.social_home');
        }

        return view('social.posts.edit', compact('social_post', 'all_genres','selected_genres'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SocialPost  $socialPost
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        # 1. Validate the data from the form
        $request->validate([
            'description' => 'required|min:1|max:1000',
            'restaurant_name' => 'min:0|max:50',
            'image' => 'mimes:jpg,png,jpeg,gif|max:1048',
            'genre' => 'array|max:2'
        ]);

        # 2. Update the post
        $social_post = $this->social_post->findOrFail($id);
        $social_post->description = $request->description;
        $social_post->restaurant_name = $request->restaurant_name;

        # moderate for description
        $moderationResult = $this->moderateContent($request->description);
        if (!$moderationResult['status']) {
            return back()->withErrors(['description' => $moderationResult['message']]);
        }

        # if there is a new image...
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            # Delete the previous image from the local storage
            SocialPostController::deleteImage('public/image/' . $social_post->image);

            #save the new image
            $social_post->image = 'data:image/' . $request->image->extension() . ';base64,' . base64_encode(file_get_contents($request->image));
        }

        $social_post->save();

        # Update genres
        $genreIds = $request->input('genre', []);
        $social_post->genres()->sync($genreIds);

        return redirect()->route('social.social_home');


    }

    private function deleteImage($image_name)
    {
        $image_path = self::LOCAL_STORAGE_FOLDER . $image_name;

        # If the image is existing, delete
        if (Storage::disk('local')->exists($image_path)){
            Storage::disk('local')->delete($image_path);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SocialPost  $socialPost
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $social_post = $this->social_post->findOrFail($id);

        if ($social_post->user_id !== Auth::user()->id) {
            return redirect()->route('social.social_home');
        }

        $this->deleteImage($social_post->image);
        $this->social_post->destroy($id);
        $social_post->destroy($id);
        
        return redirect()->route('social.social_home');
    }

    public function social_home()
    {
        $user = Auth::user();
        $social_posts = $this->social_post->latest()->get();

        # get user's friends list
        $friends_ids = $user->friends()->pluck('users.id')->toArray();

        return view('social.social_home', compact('social_posts', 'friends_ids'));
    }


    public function search(Request $request)
    {
        $searchWord = $request->search;

        $social_posts = SocialPost::where(function ($query) use ($searchWord){
            #search from user
            $query->whereHas('user', function ($subQuery) use ($searchWord) {
                $subQuery->where('name', 'like', '%' . $searchWord . '%');
            })
            #search from restaurant_name
            ->orWhere('restaurant_name', 'like', '%' . $searchWord . '%')
            #search from description
            ->orWhere('description', 'like', '%' . $searchWord . '%')
            #search from genres
            ->orWhereHas('genres', function ($subQuery) use ($searchWord) {
                $subQuery->where('name', 'like', '%' . $searchWord . '%');
            })
            #search from comments
            ->orWhereHas('comments', function ($subQuery) use ($searchWord) {
                $subQuery->where('body', 'like', '%' . $searchWord . '%');
            });
            })->get();

            return view('social.social_home', compact('social_posts'));
    }




}