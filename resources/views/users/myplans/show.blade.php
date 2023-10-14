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
                    <table class="table table-hover align-middle border">
                        <thead class="users-thead">
                            <tr>
                                <th class="fw-light"><i class="fa-regular fa-calendar-check icon-sm"></i> Date</th>
                                <th class="fw-light"><i class="fa-regular fa-clock icon-sm"></i> Time</th>
                                <th class="fw-light"><i class="fa-solid fa-utensils icon-sm"></i> Restaurant</th>
                                <th class="fw-light"><i class="fa-solid fa-people-group icon-sm"></i> Group</th>
                                <th class="fw-light"><i class="fa-regular fa-message icon-sm"></i> Memo</th>
                                <th class="fw-light"></th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>{{ date('M d, Y') }}</td>
                                <td>6pm</td>
                                <td>Bristol Seafood Grill</td>
                                <td><a href="#">coworker</td>
                                <td>Welcome party</a></td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm" data-bs-toggle="dropdown">
                                            <i class="fa-solid fa-bars"></i>
                                        </button>

                                        <div class="dropdown-menu menu-hover">
                                            <a href="#" class="dropdown-item">
                                                <i class="fa-regular fa-pen-to-square" data-bs-toggle="modal" data-bs-target="#edit-bucket"></i> Edit</a>

                                            <a href="#" class="dropdown-item text-danger">
                                                <i class="fa-regular fa-trash-can" data-bs-toggle="modal" data-bs-target="#delete-plan"></i> Delete</a>
                                        </div>
                                        @include('users.myplans.modal.delete')
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td>{{ date('M d, Y') }}</td>
                                <td>7:30pm</td>
                                <td>Happiness Cafe</td>
                                <td><a href="#">friends</a></td>
                                <td>celebration</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm" data-bs-toggle="dropdown">
                                            <i class="fa-solid fa-bars"></i>
                                        </button>

                                        <div class="dropdown-menu menu-hover">
                                            <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#connectModal">
                                                <i class="fa-regular fa-pen-to-square"></i> Edit
                                            </a>

                                            <a class="dropdown-item text-danger" data-bs-toggle="modal" data-bs-target="#disconnectModal">
                                                <i class="fa-regular fa-trash-can"></i> Delete
                                            </a>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('friends.modal.connect_modal')

</div>

@endsection
