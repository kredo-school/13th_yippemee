<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(){
        return view('users.profile.show');
    }

    public function  edit(){
        return view('users.profile.edit');
    }

}


