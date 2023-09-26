@extends('layouts.app')

@section('title', 'Group list')

@section('content')
    {{-- @include() navbar here --}}

    <div class="container mt-2">
        <div class="row">
          <div class="col text-center">
            <h1 class="text-warning">Make a plan from place!</h1>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col text-center">
            <i class="fa-solid fa-map-location-dot fa-7x" style="color: #f3c84b;"></i>
          </div>
        </div>

        {{-- group list --}}
        <div class="container w-50 mt-5">
            <div class="row align-items-center bordered">
                <div class="col-4"></div>
                <div class="col-4 text-center"><h1 style="color: #253c5c;">Group List</h1></div>
                <div class="col-4 text-end">
                    <button type="button" class="border-0" data-bs-toggle="modal" data-bs-target="#add-group">
                        <i class="fa-solid fa-square-plus fa-3x" style="color: #253c5c;"></i>
                    </button>
                </div>
                <hr>
            </div>


            {{-- group info foreach --}}
            <div class="row align-items-center">
                <div class="col-3 ps-5"><i class="fa-regular fa-circle-user fa-4x" style="color: #253c5c;"></i></div>
                <div class="col-7 ps-5">
                    <div class="row"><h3 style="color: #253c5c;"><span>Name</span></h3></div>
                    <div class="row"><p><i class="fa-solid fa-location-dot" style="color: #253c5c;"></i> Restaurant's name</p></div>
                </div>

                <div class="col-2 ps-5">
                    <label for="menu-toggle"><i class="fa-solid fa-bars fa-2x" style="color: #253c5c;"></i></label>
                    <input type="checkbox" id="menu-toggle" />
                    <ul id="menu">
                        <li><a href="#">Edit</a></li>
                        <li><a href="#">Delete</a></li>
                    </ul>
                </div>
                <hr>
            </div>
        </div>
    </div>
    @include('users.modals.add_group')
@endsection



