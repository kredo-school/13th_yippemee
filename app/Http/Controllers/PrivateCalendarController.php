<?php

namespace App\Http\Controllers;

use App\Models\privateCalendar;
use Illuminate\Http\Request;

class PrivateCalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add_group()
    {
        return view('users.calendars.private.group_list');
    }

        // private calendar
    public function showGroupCalendar()
    {
        return view('users.calendars.private.calendar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\privateCalendar  $privateCalendar
     * @return \Illuminate\Http\Response
     */
    public function show(privateCalendar $privateCalendar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\privateCalendar  $privateCalendar
     * @return \Illuminate\Http\Response
     */
    public function edit(privateCalendar $privateCalendar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\privateCalendar  $privateCalendar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, privateCalendar $privateCalendar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\privateCalendar  $privateCalendar
     * @return \Illuminate\Http\Response
     */
    public function destroy(privateCalendar $privateCalendar)
    {
        //
    }
}
