<?php

namespace App\Http\Controllers;

use App\Models\Want;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WantController extends Controller
{
    private $want;

    public function __construct(Want $want)
    {
        $this->want = $want;
    }

    public function store($social_post_id)
    {

        $this->want->user_id = Auth::user()->id;
        $this->want->social_post_id = $social_post_id;
        $this->want->save();

        return redirect()->back();
    }

    public function destroy($social_post_id)
    {

        $this->want->where('social_post_id', $social_post_id)->where('user_id', Auth::user()->id)->delete();

        return back();
    }
}
