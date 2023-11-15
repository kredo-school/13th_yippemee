<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlanController extends Controller
{
    private $plan;

    public function __construct(Plan $plan){
        $this->plan = $plan;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Plan()
    {
        $plans      = Plan::all();
        return view('users.calendars.public.calendar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_plans   = $this->plan->all();

        return View('users.modals.create')
                ->with('all_plans', $all_plans);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'date'          =>  'required|min:1|max:30',
            'time'          =>  'sometimes',
            // restaurant/member_id will be array later
            'restaurant_id' =>  'required|min:1|max:30',
            'genre_id'      =>  'array',
            'description'   =>  'required|min:1|max:500',
        ]);

        $plan = Plan::create([
            'user_id'        =>   Auth::user()->id,
            'date'           =>  $request->name,
            'time'           =>   $request->time,
            'restaurant_id'  =>   $request->restaurant_id,
            'description'    =>   $request->description,
        ]);

        $plan_genres = [];
        foreach ($request->genre as $genre_id) {
            $plan_genres[] = ['genre_id' => $genre_id,
            'plan_id' => $plan->id,
            ];
        }
        $plan->bucketGenre()->createMany($plan_genres);

        return redirect()->route('calendar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plan = $this->plan->findOrFail($id);

        return view('calendar')
                ->with('plan', $plan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function edit(Plan $plan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plan $plan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plan $plan)
    {
        //
    }
}
