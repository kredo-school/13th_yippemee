@extends('layouts.app')
@section('title', 'private calendar')
@section('content')
<link href="{{ asset('css/private.css') }}" rel="stylesheet">

<div class="container calendar-title" id="private">
    <h2 class="text-center">Decide by Place</h2>
    <span class="bar bar-short mt-4"></span>
    <p class="text-center pt-4 mb-0">Let's check what your friends' preference,<br>and add yours too.</p>
</div>

<div class="left-navi">
    @include('users.calendars.private.preferecelist')
</div>

<div class="main-div" id="private-div">
    <div class="main-contents">
        <div class="top-button">
            <div class="row">
                <div class="col text-end">
                    <a href="#" class="btn btn-create-plan mt-2" data-bs-toggle="modal" data-bs-target="#preference-modal"><i class="fa-regular fa-calendar-plus fa-3x"></i></a>
                </div>
            </div>
        </div>
        @include(('users.calendars.calendar'))
    </div>

</div>

<div class="right-navi" id="private-right-navi">
    @include('users.calendars.private.detail')
</div>

{{-- modal --}}
@include('users.modals.preference')
@endsection

