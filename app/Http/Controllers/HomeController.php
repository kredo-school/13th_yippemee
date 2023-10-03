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

    // all related to calendar pages
    public function group_list()
    {
        return view ('users.calendars.private.group_list');
    }
    public function add_group()
    {
        return view('users.calendars.private.group_list');
    }
    public function showCalendar()
    {
        return view ('users.calendars.public.calendar');
    }
    public function showWeekly()
    {
        return view ('users.calendars.public.weekly');
    }
    // end of calendar pages

    public function admin_users_index()
    {
        return view('admin.users.index');
    }

    public function admin_plans_index()
    {
        return view('admin.plans.index');
    }

    public function admin_posts_index()
    {
        return view('admin.posts.index');
    }

    public function admin_genres_index()
    {
        return view('admin.genres.index');
    }


}
