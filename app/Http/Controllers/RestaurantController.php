<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Restaurant;


class RestaurantController extends Controller
{
    
    private $restaurant;

    public function __construct(Restaurant $restaurant){
        $this->restaurant = $restaurant;
    }



    public function restaurantlist()
    {
        $restaurants = $this->restaurant->all();
        return view('users.restaurant_lists.index')->with('restaurants', $restaurants);
    }

    public function  restaurantpost()
    {
        return view('users.restaurant_lists.post_restaurant');
    }

    public function store(Request $request){

        $request->validate([
            'name'=>'required | min:1|max:100',
            'location'=>'required | min:1|max:100',
            'address'=>'min:1|max:100',
            'tel'=>'min:1|max:100',
            'description' => ' min:1|max:1000',
            'image' => 'required | mimes:jpeg, jpg,png,gif|max:1048',
            'monday'=>'min:1|max:100',
            'tuesday'=>'min:1|max:100',
            'wednesday'=>'min:1|max:100',
            'thursday'=>'min:1|max:100',
            'friday'=>'min:1|max:100',
            'saturday'=>'min:1|max:100',
            'sunday'=>'min:1|max:100',
            'url'=>'min:1|max:100',
            'price'=>'required',
            'googlemap'=>'min:1|max:100',
        ]);

            $this->restaurant->name = $request->name;
            $this->restaurant->location = $request->location;
            $this->restaurant->address = $request->address;
            $this->restaurant->tel = $request->tel;
            $this->restaurant->description = $request->description;
            $this->restaurant->image = 'data:image/' . $request->file('image')->getClientOriginalExtension() . ';base64,' . base64_encode(file_get_contents($request->file('image')->path()));
            $this->restaurant->monday = $request->monday;
            $this->restaurant->tuesday = $request->tuesday;
            $this->restaurant->wednesday = $request->wednesday;
            $this->restaurant->thursday = $request->thursday;
            $this->restaurant->friday = $request->friday;
            $this->restaurant->saturday = $request->saturday;
            $this->restaurant->sunday = $request->sunday;
            $this->restaurant->url = $request->url;
            $this->restaurant->price = $request->price;
            $this->restaurant->googlemap = $request->googlemap;

            $this->restaurant->save( );

            return view('users.restaurant_lists.index');
       
    }

    public function genrejapanese()
    {
        $restaurants = $this->restaurant->all();
        
        return view('users.restaurant_lists.genre.japanese')->with('restaurants', $restaurants);
    }

    public function detail($id)
    {
        $restaurant = Restaurant::find($id);
        return view('users.restaurant_lists.restaurant_detail' , ['restaurant' => $restaurant]);
    }

    public function  restaurantcomment($id)
    {
        $restaurant = Restaurant::find($id);
        return view('users.restaurant_lists.comment', ['restaurant' => $restaurant]);
    }

    public function postcomment($id ){
        $restaurant = Restaurant::find($id);
        return view('users.restaurant_lists.commentform', ['restaurant' => $restaurant]);
    }




    public function genreitalian()
    {
        return view('users.restaurant_lists.genre.italian');
    }
    public function genrechinese()
    {
        return view('users.restaurant_lists.genre.chinese');
    }

    public function genrecafe($id){
        
        $restaurant = $this->restaurant->findOrFail($id);
        return view('users.restaurant_lists.genre.cafe')->with('restaurant', $restaurant);
    }

    public function genremore()
    {
        return view('users.restaurant_lists.genre.more');
    }

    public function areamore()
    {
        return view('users.restaurant_lists.area.more');
    }

    

  

    

}
