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

    


    public function  restaurantcomment()
    {
        return view('users.restaurant_lists.comment');
    }

    public function  postcomment()
    {
        return view('users.restaurant_lists.commentform');
    }

  
   

    public function detail()
    {
        return view('users.restaurant_lists.restaurant_detail');
    }

    public function contact()
    {
        return view('contact.user_contact');
    }


    public function admin_contacts_index()
    {
        return view('admin.contacts.index');
    }

    //admin
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

    //social
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
}
