<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Visit;
use App\Models\Bucket;
use App\Models\SocialPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    private $user;

    public function __construct(User $user){
        $this->user = $user;
    }

    public function show($id){

        $user = $this->user->findOrFail($id);
        // dd($user);

        $all_visits = Visit::latest()->get();
        return view('users.visits.show')
        ->with(["user" => $user, "all_visits" => $all_visits]);

        $all_buckets = Bucket::latest()->get();
        return view('users.bucket.show')
        ->with(["user" => $user, "all_buckets" => $all_buckets]);


        $social_posts = SocialPost::where('user_id', Auth::id())->latest()->get();
        return view('users.profile.show', compact('social_posts'));

    }

    public function  edit(){
        return view('users.profile.edit');
    }
}


