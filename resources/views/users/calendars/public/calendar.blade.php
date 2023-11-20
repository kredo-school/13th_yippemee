@extends('layouts.app')
@section('title', 'public calendar')
@section('content')
<link href="{{ asset('css/public.css') }}" rel="stylesheet">

<div class="container calendar-title">
    <h2 class="text-center">Decide by Date</h2>
    <span class="bar bar-short mt-4"></span>
    <p class="text-center pt-4 mb-0">Let's check what your friends are craving,<br>and add yours too.</p>
</div>

<div class="left-navi">
    @include('users.calendars.public.planlist')
</div>

<div class="main-div">
    <div class="main-contents">
        <div class="top-button">
            <div class="row">
                <div class="col text-end">
                    <button type="button" class="btn btn-create-plan mt-2" data-bs-toggle="modal" data-bs-target="#create-plan"><i class="fa-regular fa-calendar-plus fa-3x"></i></button>
                </div>
            </div>
        </div>
        @include('users.calendars.calendar')
    </div>
</div>

<div class="right-navi">
    @include('users.calendars.public.detail')
    {{-- @if(isset($selectedPlan))
        @include('users.calendars.public.detail', compact('selectedPlan'))
    @else
        @include('users.calendars.public.detail')
    @endif --}}
</div>

{{-- modal --}}
@include('users.modals.create')




@endsection
