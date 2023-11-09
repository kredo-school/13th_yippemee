<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    
    private $like;

    public function __construct(Like $like)
    {
        $this->like = $like;
    }

    public function store($social_post_id)
    {

        $this->like->user_id = Auth::user()->id;
        $this->like->social_post_id = $social_post_id;
        $this->like->save();

        return redirect()->back();
    }

    public function destroy($social_post_id)
    {

        $this->like->where('social_post_id', $social_post_id)->where('user_id', Auth::user()->id)->delete();

        return back();
    }
}
