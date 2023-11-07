<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SocialPost;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show(){
        $social_posts = SocialPost::where('user_id', Auth::id())->latest()->get();
        return view('users.profile.show', compact('social_posts'));
    }

    public function  edit(){
        return view('users.profile.edit');
    }
}


