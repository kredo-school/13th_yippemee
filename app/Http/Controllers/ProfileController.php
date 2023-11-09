<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Visit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    private $user;

    public function __construct(User $user){
        $this->user = $user;
    }

    public function show($id){

        $user = $this->user->findOrFail($id);
        // dd($user);

        $all_visits = Visit::latest()->get();
        return view('users.profile.show')
        ->with(["user" => $user, "all_visits" => $all_visits]);
    }

    public function  edit(){
        return view('users.profile.edit');
    }
}


