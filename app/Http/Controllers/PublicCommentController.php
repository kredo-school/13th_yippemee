<?php

namespace App\Http\Controllers;

use App\Models\PublicComment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicCommentController extends Controller
{
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store($plan_id, Request $request)
    {
        $request->validate([
            'comment_body' . $plan_id => 'required|max:200'
        ], [
            'comment_body' . $plan_id . '.required' => 'Cannot submit an empty comment.',
            'comment_body' . $plan_id . '.max' => 'The comment must not be greater than 200 characters.'
        ]);

        $public_comment = new PublicComment();
        $public_comment->user_id = Auth::user()->id;
        $public_comment->plan_id = $plan_id; // ここを修正
        $public_comment->body = $request->input('comment_body' . $plan_id);
        $public_comment->save();

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PublicComment  $publicComment
     * @return \Illuminate\Http\Response
     */
    public function show(PublicComment $publicComment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PublicComment  $publicComment
     * @return \Illuminate\Http\Response
     */
    public function edit(PublicComment $publicComment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PublicComment  $publicComment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PublicComment $publicComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PublicComment  $publicComment
     * @return \Illuminate\Http\Response
     */
    public function destroy(PublicComment $publicComment)
    {
        //
    }
}
