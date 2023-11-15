<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Myplan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MyplanController extends Controller
{
    private $myplan;

    public function __construct(Myplan $myplan)
    {
        $this->middleware("auth");
        $this->myplan  = $myplan;
    }

    public function show($id){
        $all_myplans = $this->myplan->latest()->get();
        $user = User::findOrFail($id);
        return view("users.myplans.show", ["all_myplans" => $all_myplans,"user" => $user]);
    }
}
