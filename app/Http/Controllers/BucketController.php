<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BucketController extends Controller
{
    public function show(){
        return view('users.bucket.show');
    }

    public function create(){
        return view('users.bucket.create');
    }
}
