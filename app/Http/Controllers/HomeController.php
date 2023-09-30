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

    public function social_posts_create()
    {
        return view('social.posts.create');
    }

    public function social_posts_edit()
    {
        return view('social.posts.edit');
    }


}
