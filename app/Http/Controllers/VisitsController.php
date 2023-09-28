<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisitsController extends Controller
{
    public function show(){
        return view('users.visits.show');
    }

    public function destroy($id){
        return redirect()->route('index');
    }

    public function create(){
        return view('users.visits.create');
    }
}
