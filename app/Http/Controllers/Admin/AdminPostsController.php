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

    public function admin_posts_index(Request $request)
    {
        $all_social_posts = $this->social_post->latest()->paginate(5);

        if($request->search){
            $all_social_posts = $this->social_post->where('description', 'LIKE', '%'.$request->search.'%');
        }

        return view('admin.posts.index')
                ->with('all_social_posts',  $all_social_posts)
                ->with('search', $request->search);
    }

    // public function hide($id)
    // {
    //     $this->social_post->destroy($id);
    //     return redirect()->back();
    // }

    // public function unhide($id)
    // {
    //     $this->social_post->findOrFail($id)->restore();
    //     return redirect()->back();
    // }
}
