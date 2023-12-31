<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ContentModeratorService;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    // end of calendar pages

    public function myschedule()
    {
        return view('users.myschadule');
    }

    public function showTest()
    {
        return view('users.calendars.public.test-calendar');
    }



    public function privateyourplan()
    {
        return view('users.private.yourplan');
    }

    public function publicyourplan()
    {
        return view('users.public.yourplan');
    }


    public function restaurantlist()
    {
        return view('users.restaurant_lists.index');
    }

    public function  restaurantpost()
    {
        return view('users.restaurant_lists.post_restaurant');
    }



    public function genrejapanese()
    {
        return view('users.restaurant_lists.genre.japanese');
    }
    public function genreitalian()
    {
        return view('users.restaurant_lists.genre.italian');
    }
    public function genrechinese()
    {
        return view('users.restaurant_lists.genre.chinese');
    }
    public function genrecafe()
    {
        return view('users.restaurant_lists.genre.cafe');
    }

    public function genremore()
    {
        return view('users.restaurant_lists.genre.more');
    }

    public function areamore()
    {
        return view('users.restaurant_lists.area.more');
    }




    public function  postcomment()
    {
        return view('users.restaurant_lists.commentform');
    }


    // public function admin_contacts_index()
    // {
    //     return view('admin.contacts.index');
    // }

    //admin
    public function admin_users_index()
    {
        return view('admin.users.index');
    }

    public function admin_plans_index()
    {
        return view('admin.plans.index');
    }


}

