<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Genre;
use App\Models\JoinGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class PlanController extends Controller
{
    private $plan;

    public function __construct(Plan $plan)
    {
        $this->plan =   $plan;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_plans = Plan::all();

        return view('users.modals.create')
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
        // dd($request);
        $request->validate([
            'date'          =>  'required|min:1|max:30',
            's_time'        =>  'sometimes',
            'e_time'        =>  'sometimes',
            // restaurant/member_id will be array later
            'restaurant'    =>  'required|min:1|max:30',
            'genre'         =>  'array',
            'description'   =>  'required|min:1|max:500',
        ]);


        // $plan_genres = [];
        // foreach ($request->input('genre') as $genre_id) {
        //     $plan_genres[] = ['genre_id' => $genre_id,
        //     'plan_id' => $plan->id,
        //     ];
        // }
        // dd($request->input('genre'));
        $plan = Plan::create([
            'user_id'           =>   Auth::user()->id,
            'date'              =>   $request->date,
            's_time'            =>     $request->s_time,
            'e_time'            =>   $request->e_time,
            'restaurant_id'     =>   $request->restaurant_id,
            'description'       =>   $request->description,
        ]);

        $plan_genres = [];
        foreach ($request->genre as $genre_id) {
            $plan_genres[] = [
                'genre_id'      => $genre_id,
                'plan_id'       => $plan->id,
            ];
        }

        // Pass the necessary data to the view
        // return view('users.calendars.public.calendar',
        // [
        //     'genres' => $genres,
        //     'plans' => $plans,
        //     'selected_date' => date('F d Y', strtotime($request->date)),
        //     'selected_plan' => $selected_plan
        // ]);
        return redirect()->route('plan.show', ['date' => date('Ymd')]);

        $plan->genres()->attach($request->genre);

        return view('users.calendars.public.calendar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */


    public function showPublicCalendar()
    {
        $genres = Genre::all()->toArray();
        $plans = Plan::with('user')->get();
        // dd($plans);

        return view('users.calendars.public.calendar', ['genres' => $genres, 'plans' => $plans]);
    }

    public function show($date, Request $request)
    {
        // $date = $request->input('date');
        $formattedDate = substr($date, 0, 4) . '-' . substr($date, 4, 2) . '-' . substr($date, 6, 2);
        $plans = Plan::with('genres')->whereDate('date', $formattedDate)->get();
        $genres = Genre::all()->toArray();

        if (count($plans) > 0) {
            $plan_id = $request->input('id') ?: $plans[0]->id;
            // get the plan with $plan->id
            $selected_plan  = Plan::with('genres', 'publicComments')->findOrFail($plan_id);
            return view('users.calendars.public.calendar', ['genres' => $genres, 'plans' => $plans, 'selected_date' => date('F d Y', strtotime($formattedDate)), 'selected_plan' => $selected_plan]);
        }
        else {

            $plansForToday = Plan::with('genres')->whereDate('date', now())->get();

            return view('users.calendars.public.calendar',
                [
                    'genres' => $genres,
                    'plans' => $plansForToday,
                    'selected_date' => date('F d Y', strtotime($formattedDate)),
                    'selected_plan' => null
                ]);

        }
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
