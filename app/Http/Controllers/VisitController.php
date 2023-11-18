<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Visit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VisitController extends Controller
{
    private $visit;

    public function __construct(Visit $visit)
    {
        $this->middleware("auth");
        $this->visit  = $visit;
    }

    public function create()
    {
        return view('users.visits.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'image'           => 'required|mimes:jpeg,jpg,png,gif|max:2048',
            'restaurantName'  => 'required|min:1|max:10000',
            'star_rating'     => 'required',
            'date'            => 'max:10000',
            'url'             => 'max:10000',
            'description'     => 'max:10000'
        ]);


        $user_id = auth()->user()->id;
        $visit = Visit::create([
            'user_id'        => $user_id,
            'image'          =>  'data:image/' . $request->image->extension() . ';base64,' . base64_encode(file_get_contents($request->image)),
            'restaurantName' => $request->restaurantName,
            'star_rating'    => $request->star_rating,
            'date'           => $request->date,
            'url'            => $request->url,
            'description'    => $request->description,
        ]);


        return redirect()->route('visits.show', $user_id);
    }

    public function show($id)
    {
        $all_visits = $this->visit->latest()->get();
        $user = User::findOrFail($id);
        return view("users.visits.show", ["all_visits" => $all_visits, "user" => $user]);
    }

    public function edit($id)
    {
        $visit = $this->visit->findOrFail($id);
        return view('users.visits.edit', ['visit' => $visit]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'image'           => 'required|mimes:jpeg,jpg,png,gif|max:2048',
            'restaurantName'  => 'required|min:1|max:10000',
            'star_rating'     => 'required',
            'date'            => 'max:10000',
            'url'             => 'max:10000',
            'description'     => 'max:10000'
        ]);

        $visit                 = $this   ->visit->findOrFail($id);
        $user_id               = auth()  ->user()->id;
        $visit->restaurantName = $request->restaurantName;
        $visit->star_rating    = $request->star_rating;
        $visit->date           = $request->date;
        $visit->url            = $request->url;
        $visit->description    = $request->description;

        if ($request->image) {
            $visit->image = 'data:image/' . ';base64,' . base64_encode(file_get_contents($request->image));
        }

        $visit->save();

        return redirect()->route('visits.show',$user_id);
    }

    public function destroy($id)
    {
        $visit = $this->visit->findOrFail($id);
        $user_id = auth()->user()->id;
        $visit->forceDelete();
        return redirect()->route('visits.show', $user_id);
    }
}
