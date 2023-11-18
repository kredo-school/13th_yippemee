<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Genre;
use App\Models\SocialPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Tests\Integration\Http\Fixtures\Post;

class PostController extends Controller
{
    private $social_post;
    private $genre;


    public function __construct(SocialPost $social_post, Genre $genre)
    {
        $this->middleware("auth");
        $this->social_post  = $social_post;
        $this->genre   = $genre;
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        $social_posts = $user->social_posts;

        return view('users.profile.show', compact('user', 'social_posts'));
    }
}
