<?php

namespace App\Http\Controllers;

use App\Models\Group;
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


    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'group_id'    => 'required|exists:groups,id', // Validate group_id existence in the groups table
            'date'        => 'required|min:1|max:30',
            's_time'      => 'required',
            'e_time'      => 'required',
            'description' => 'required|min:1|max:500',
        ]);

        $group = Group::find($request->id);

        $preference = Preference::create([
            'user_id'       =>  Auth::user()->id,
            'group_id'      =>  $group->id,
            'date'          =>  $request->date,
            's_time'        =>  $request->s_time,
            'e_time'        =>  $request->e_time,
            'description'   =>  $request->description
        ]);


        return redirect()->route('preference.show', ['date' => date('Ymd')]);
    }

    // public function showPrivateCalendar($group_id)
    // {
    //     $group = Group::find($group_id);
    //     $preferences = Preference::where('group_id', $group_id)->with('user')->get();

    //     return view('users.calendars.private.calendar', [
    //         'preferences' => $preferences,
    //         'group' => $group_id,
    //     ]);
    // }
    public function showPrivateCalendar($group_id)
    {
        $group = Group::find($group_id);
        $preferences = Preference::where('group_id', $group_id)->with('user')->get();
        return view('users.calendars.private.calendar', [
            'preferences' => $preferences,
            'group' => $group,  // Change $group_id to $group
        ]);
    }


    public function show($group_id, $date, Request $request)
    {
        $formattedDate = substr($date, 0, 4) . '-' . substr($date, 4, 2) . '-' . substr($date, 6, 2);
        $selected_date = date('F d Y', strtotime($formattedDate));
        $preferences = Preference::whereDate('date', $formattedDate)->get();
        $group = Group::find($group_id);

        if (count($preferences) > 0) {
            $preference_id = $request->input('id') ?: $preferences[0]->id;
            // $selected_pre  = Preference::findOrFail($preference_id);
            return view('users.calendars.private.preferencelist', [
                'preferences' => $preferences,
                'selected_date' => $selected_date,
                'group_id' => $group_id,
            ]);
        }
        else {
            $preferencesForToday = Preference::whereDate('date', now())->get();

            return view('users.calendars.private.calendar',
                [
                    'preferences' => $preferencesForToday,
                    'selected_date' => $selected_date,
                    'group_id' => $group_id,
                ]);
        }
    }


    public function edit(Preference $preference)
    {
        //
    }

    public function update(Request $request, Preference $preference)
    {
        //
    }

    public function destroy(Preference $preference)
    {
        //
    }
}
