<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function group_list()
    {
        return view ('users.calendars.private.group_list');
    }

    public function add_group()
    {
        return view('users.calendars.private.group_list');
    }

    public function create_plan()
    {
        return view('users.calendars..group');
    }

    public function myschedule()
    {
        return view('users.myschadule');
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

    public function detail()
    {
        return view('users.restaurant_lists.restaurant_detail');
    }

  

    public function social_posts_create()
    {
        return view('social.posts.create');
    }

    public function social_posts_edit()
    {
        return view('social.posts.edit');
    }

    public function social_posts_show()
    {
        return view('social.posts.show');
    }

    public function social_home()
    {
        return view('social.social_home');
    }

 main
}
