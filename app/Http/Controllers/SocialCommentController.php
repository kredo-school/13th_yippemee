<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SocialComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SocialCommentController extends Controller
{
    // public function __construct(SocialComment $social_comment)
    // {
    //     $this->social_comment = $social_comment;
    // }

    public function store($social_post_id, Request $request)
    {
        // $request->validate([
        //     'social_comment_body' . $social_post_id => 'required|max:150'
        // ],
        // [
        //     'social_comment_body' . $social_post_id . '.required' => 'Cannot submit an empty comment.',
        //     'social_comment_body' . $social_post_id . '.max' => 'The comment must not be greater than 150 characters.'
        // ]);

        $request->validate([
            'comment_body' . $social_post_id => 'required|max:150'
        ], [
            'comment_body' . $social_post_id . '.required' => 'Cannot submit an empty comment.',
            'comment_body' . $social_post_id . '.max' => 'The comment must not be greater than 150 characters.'
        ]);

        $social_comment = new SocialComment();
        $social_comment->user_id = Auth::user()->id;
        $social_comment->social_post_id = $social_post_id;
        $social_comment->body = $request->input('comment_body' . $social_post_id);
        $social_comment->save();

        // $this->social_comment->user_id = Auth::user()->id;
        // $this->social_comment->social_post_id = $social_post_id;
        // $this->social_comment->body = $request->input('social_comment_body');
        // $this->social_comment->save();

        return redirect()->back();
    }

}
