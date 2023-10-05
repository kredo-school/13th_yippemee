<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class VisitsController extends Controller
{
    public function create(){
        return view('users.visits.create');
    }

    public function show(){
        return view('users.visits.show');
    }

    public function destroy(User $user){
        print($user);
        return redirect()->route('index');
    }


}
