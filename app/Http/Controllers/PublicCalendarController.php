<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use App\Models\publicCalendar;

class PublicCalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showCalendar()
    {
        $genres = Genre::all()->toArray();
        return view ('users.calendars.public.calendar',['genres' => $genres]);
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
     * @param  \App\Models\publicCalendar  $publicCalendar
     * @return \Illuminate\Http\Response
     */
    public function show(publicCalendar $publicCalendar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\publicCalendar  $publicCalendar
     * @return \Illuminate\Http\Response
     */
    public function edit(publicCalendar $publicCalendar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\publicCalendar  $publicCalendar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, publicCalendar $publicCalendar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\publicCalendar  $publicCalendar
     * @return \Illuminate\Http\Response
     */
    public function destroy(publicCalendar $publicCalendar)
    {
        //
    }
}
