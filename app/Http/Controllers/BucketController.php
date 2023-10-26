<?php

namespace App\Http\Controllers;

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
    public function store(Request $request){
        // dd($request);
        $request->validate([
            'image'           => 'required|mimes:jpeg,jpg,png,gif|max:2048',
            'restaurantName'  => 'required|min:1|max:10000',
            'genre'           => 'array',
            'hoursOption'     => 'max:10000',
            'url'             => 'max:10000',
            'description'     => 'max:10000'
        ]);


        $bucket = Bucket::create([
            'user_id'        => auth()->user()->id,
            'image'          =>  'data:image/' . $request->image->extension() . ';base64' . base64_encode(file_get_contents($request->image)),
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

        return redirect()->route('bucket.show');
    }


    public function show(){
        return view('users.bucket.show');
    }
}
