<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Genre;
use App\Models\Bucket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BucketController extends Controller
{
    private $bucket;
    private $genre;

    public function __construct(Bucket $bucket, Genre $genre)
    {
        $this->middleware("auth");
        $this->bucket  = $bucket;
        $this->genre   = $genre;
    }

    public function create(){
        $all_genres = $this->genre->all();
        return view('users.bucket.create')
                ->with('all_genres', $all_genres);
    }

    // store() -> save the post
    public function store(Request $request)
    {

        $request->validate([
            'image'           => 'required|mimes:jpeg,jpg,png,gif|max:2048',
            'restaurantName'  => 'required|min:1|max:10000',
            'genre'           => 'array',
            'hoursOption'     => 'max:10000',
            'url'             => 'max:10000',
            'description'     => 'max:10000'
        ]);

        $user_id = auth()->user()->id;
        $bucket = Bucket::create([
            'user_id'        => $user_id,
            'image'          =>  'data:image/' . $request->image->extension() . ';base64,' . base64_encode(file_get_contents($request->image)),
            'restaurantName' => $request->restaurantName,
            'hoursOption'    => $request->hoursOption,
            'url'            => $request->url,
            'description'    => $request->description,
        ]);

        $bucket_genres = [];
        foreach ($request->genre as $genre_id) {
        $bucket_genres[] = ['genre_id' => $genre_id,
        'bucket_id' => $bucket->id,
        ];
        }

        $bucket->bucketGenre()->createMany($bucket_genres);

        return redirect()->route('bucket.show', $user_id);
    }


    public function show($id)
    {
        $all_buckets = $this->bucket->latest()->get();
        $user = User::findOrFail($id);
        return view('users.bucket.show', ["all_buckets" => $all_buckets, "user" => $user]);
    }

    public function edit($id)
    {
        $bucket = $this->bucket->findOrFail($id);

        $all_genres = $this->genre->all();

        $selected_genres = [];
        foreach ($bucket->bucketGenre as $bucket_genre) {
            $selected_genres[] = $bucket_genre->genre_id;
        }

        return view('users.bucket.edit')
            ->with('bucket', $bucket)
            ->with('all_genres', $all_genres)
            ->with('selected_genres', $selected_genres);
    }

    public function update(Request $request, $id){
        //dd($request);
        $request->validate([
            'image'           => 'required|mimes:jpeg,jpg,png,gif|max:2048',
            'restaurantName'  => 'required|min:1|max:10000',
            'genre'           => 'array',
            'hoursOption'     => 'max:10000',
            'url'             => 'max:10000',
            'description'     => 'max:10000'
        ]);

        $bucket                 = $this   ->bucket->findOrFail($id);
        $bucket->restaurantName = $request->restaurantName;
        $bucket->hoursOption    = $request->hoursOption;
        $bucket->url            = $request->url;
        $bucket->description    = $request->description;

        if($request->image){
            $bucket->image = 'data:image/' . ';base64,' . base64_encode(file_get_contents($request->image));
        }

        $bucket->save();

        $bucket->bucketGenre()->delete();

        $bucket_genres = [];
        foreach($request->genre as $genre_id){
        $bucket_genres[] = ['genre_id' => $genre_id,
        'bucket_id' => $bucket->id,];
        }

        $bucket->bucketGenre()->createMany($bucket_genres);

        return redirect()->route('bucket.show', $id);
    }

    public function destroy($id)
    {
        $bucket = $this->bucket->findOrFail($id);
        $user_id = auth()->user()->id;
        $bucket->forceDelete();
        return redirect()->route('bucket.show',$user_id);
    }

}
