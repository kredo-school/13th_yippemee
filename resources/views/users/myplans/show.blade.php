@extends('layouts.app')

@section('title', 'My Plan')

@section('content')
<div class="friends">
    <div class="container my-4 margin-container bg-white">

        <div class="row">
            <div class="col  page-title">
                <h2 class="text-center " >My Plans</h2>
                <span class="bar bar-short mt-4"></span>
            </div>
        </div>

        @forelse ($all_myplans as $myplan)
        <div class="row mt-3">

            <div class="col-3 ms-auto mb-3">
                <form action="#">
                    <input type="search" name="search" class="form-control form-control-sm" placeholder="Search for plans">
                </form>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col mb-3">
                <div class="admin-table">
                    <table class="table align-middle border">
                        <thead class="thead-plans">
                            <tr>
                                <th class="fw-light"><i class="fa-regular fa-calendar-check icon-sm"></i> Date</th>
                                <th class="fw-light"><i class="fa-regular fa-clock icon-sm"></i> Time</th>
                                <th class="fw-light"><i class="fa-solid fa-utensils icon-sm"></i> Place</th>
                                <th class="fw-light"><i class="fa-solid fa-people-group icon-sm"></i> Group</th>
                                <th class="fw-light"><i class="fa-regular fa-message icon-sm"></i> Memo</th>
                                <th class="fw-light"></th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>{{ $myplan->groupMyplan->date }}</td>

                                <td>{{ $myplan->groupMyplan->time }}</td>

                                <td>#</td>

                                <td><a class="link-secondary link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">#</a></td>

                                <td>{{ $myplan->description }}</td>

                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm" data-bs-toggle="dropdown">
                                            <i class="fa-solid fa-bars"></i>
                                        </button>

                                        <div class="dropdown-menu menu-hover">
                                            <a href="#" class="dropdown-item">
                                                <i class="fa-regular fa-pen-to-square" data-bs-toggle="modal" data-bs-target="#edit_plan"></i> Edit</a>

                                            <a href="#" class="dropdown-item text-danger">
                                                <i class="fa-regular fa-trash-can" data-bs-toggle="modal" data-bs-target="#delete-plan"></i> Delete</a>
                                        </div>
                                        @include('users.myplans.modals.delete')
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        @empty

        @endforelse
        <div class="text-center mt-5">
            <h4>No your plan yet.</h4>
        </div>
    </div>

</div>

@endsection
