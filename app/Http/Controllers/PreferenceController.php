<?php

namespace App\Http\Controllers;

use App\Models\Preference;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class PreferenceController extends Controller
{
    private $preference;

    public function __construct(Preference $preference)
    {
        $this->preference   =   $preference;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     $all_preferences = Preference::all();

    //     return view('users.modals.create-pre')
    //         ->with('all_plans', $all_preferences);
    // }

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
            's_time'        =>  'required',
            'e_time'        =>  'required',
            'description'   =>  'required|min:1|max:500',
        ]);

        $preference = Preference::create([
            'user_id'       =>  Auth::user()->id,
            'date'          =>  $request->date,
            's_time'        =>  $request->s_time,
            'e_time'        =>  $request->e_time,
            'description'   =>  $request->description,
        ]);

        return redirect()->route('preference.show', ['date' => date('Ymd')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Preference  $preference
     * @return \Illuminate\Http\Response
     */
    public function showPrivateCalendar()
    {
        $preference = Preference::with('user')->get();

        return view ('users.calendars.private.calendar',['preference' => $preference]);
    }
    public function show($date, Request $request)
    {
        // $date = $request->input('date');
        $formattedDate = substr($date, 0, 4) . '-' . substr($date, 4, 2) . '-' . substr($date, 6, 2);
        $preference = Preference::with('user') ->whereDate('date', $formattedDate)->get();
        if (count($preference) > 0) {
            $preference_id = $request->input('id') ?: $preference[0]->id;
            // get the plan with $plan->id
            $selected_pre  = Preference::with('user')->findOrFail($preference_id);
            return view('users.calendars.public.calendar',
                [
                    'plans' => $preference,
                    'selected_date' => date('F d Y', strtotime($formattedDate)),
                    'selected_pre' => $selected_pre
                ]);
        }
        else {
            $preferenceForToday = Preference::with('genres')->whereDate('date', now())->get();

            return view('users.calendars.public.calendar', [
                'preferences' => $preferenceForToday,
                'selected_date' => date('F d Y', strtotime($formattedDate)),
                'selected_pre' => null,
            ]);

        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Preference  $preference
     * @return \Illuminate\Http\Response
     */
    public function edit(Preference $preference)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Preference  $preference
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Preference $preference)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Preference  $preference
     * @return \Illuminate\Http\Response
     */
    public function destroy(Preference $preference)
    {
        //
    }
}
