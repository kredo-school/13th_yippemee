<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SocialPost;
use Illuminate\Http\Request;


class AdminPostsController extends Controller
{
    const LOCAL_STORAGE_FOLDER = 'public/images/';
    private $social_post;

    public function __construct(SocialPost $social_post)
    {
        $this->social_post = $social_post;
    }

    public function admin_posts_index()
    {
        $social_posts = SocialPost::withTrashed()->get();
        return view('admin.posts.index')->with('social_posts', $social_posts);
    }

    public function hide($id)
    {
        $this->social_post->destroy($id);
        return redirect()->back();
    }

    public function unhide($id)
    {
        $this->social_post->withTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }

    public function search(Request $request)
    {
         $social_posts = SocialPost::whereHas('user', function ($query) use ($request) {
            $query->where('name','like','%' .$request->search. '%');
         })->get();

        return view('admin.posts.search')->with('social_posts',$social_posts)->with('search',$request->search);
    }

}


