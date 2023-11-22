<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Genre;
use App\Models\Visit;
use App\Models\Bucket;
use App\Models\SocialPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MyPlan;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    private $user;
    private $genre;

    public function __construct(User $user, Genre $genre){
        $this->user = $user;
        $this->genre = $genre;
    }

     public function store(Request $request){

        $request->validate([
                'name'          => 'required|min:1|max:50',
                'username'      => 'min:1|max:50',
                'email'         => 'required|email|max:50|unique:users,email,' . Auth::user()->id,
                'avatar'        => 'mimes:jpg,jpeg,gif,png|max:1048',
                'location'      => 'max:100',
                'introduction'  => 'max:100',
                'genre'         => 'required|array|max:1'
                ]);

    $user = User::create([
        'user_id'        => auth()->user()->id,

        'avatar'          =>  'data:image/' . $request->avatar->extension() . ';base64,' . base64_encode(file_get_contents($request->image)),
        'name'            => $request->name,
        'username'        => $request->username,
        'email'           => $request->email,
        'location'        => $request->location,
        'introduction'    => $request->introduction,
    ]);

    $genre_profile = [];
    foreach ($request->genre as $genre_id) {
    $genre_profile[] = ['genre_id' => $genre_id,
    'user_id' => $user->id,
    ];
    }

    $user->genreProfile()->createMany($genre_profile);

    return redirect()->route('profile.show');

}

public function show($id){

    $user = $this->user->findOrFail($id);
    $social_posts = $user->social_posts;

    return view('users.profile.show', compact('user', 'social_posts'));

    $genre_profile = $this->user->get();
    $user = User::findOrFail($id);
    return view('users.profile.show', ["genre_profile" => $genre_profile, "user" => $user]);

    $all_visits = Visit::latest()->get();
    return view('users.visits.show')
         ->with(["user" => $user, "all_visits" => $all_visits]);

    $all_buckets = Bucket::latest()->get();
    return view('users.bucket.show')
         ->with(["user" => $user, "all_buckets" => $all_buckets]);

    $all_myplans = Myplan::latest()->get();
    return view('users.myplans.show')
         ->with(["user" => $user, "all_myplans" => $all_myplans]);

    $social_posts = SocialPost::where('user_id', Auth::id())->latest()->get();
    return view('users.profile.show', compact('social_posts'));
}

public function  edit(){
    $user = $this->user->findOrFail(Auth::user()->id);

    $all_genres = $this->genre->all();

    $selected_genres = [];
    foreach ($user->genreProfile as $genre_profile) {
        $selected_genres[] = $genre_profile->genre_id;
    }

    return view('users.profile.edit')
        ->with('user', $user)
        ->with('all_genres', $all_genres)
        ->with('selected_genres', $selected_genres);
}


    public function update(Request $request)
    {

        $request->validate([
        'name'          => 'required|min:1|max:50',
        'username'      => 'required|min:1|max:50',
        'email'         => 'required|email|max:50|unique:users,email,' . Auth::user()->id,
        'avatar'        => 'mimes:jpg,jpeg,gif,png|max:1048',
        'location'      => 'max:100',
        'introduction'  => 'max:100',
        'genre'         => 'required|array|max:1'
        ]);

        $user               = $this->user->findOrFail(Auth::user()->id);
        $user->name         = $request->name;
        $user->username     = $request->username;
        $user->email        = $request->email;
        $user->username     = $request->username;
        $user->location     = $request->location;
        $user->introduction = $request->introduction;

        if($request->avatar){
            $user->avatar = 'data:image/' . $request->avatar->extension() . ';base64,' . base64_encode(file_get_contents($request->avatar));
        }

        $user->save();
        $user->genreProfile()->delete();

        $genre_profile = [];
        foreach ($request->genre as $genre_id) {
        $genre_profile[] = ['genre_id' => $genre_id,
        'user_id' => $user->id,
        ];
        }

        $user->genreProfile()->createMany($genre_profile);
        // $user->save();
        // $user->genreProfile()->delete();

        return redirect()->route('profile.show', Auth::user()->id);
        }




}






