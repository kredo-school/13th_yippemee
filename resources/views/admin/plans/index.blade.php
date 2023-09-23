@extends('layouts.app')

@section('title', 'Admin: Plans')

@section('content')
    <div class="container">
        <div class="row mb-3">
            <div class="col-3 ms-auto mb-auto">
                <form action="#">
                    <input type="search" name="search" class="form-control form-control-sm" placeholder="Search for plan">
                </form>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-3 mb-auto">
                <div class="list-group">
                    <a href="#" class="list-group-item">
                        <i class="fa-solid fa-users"></i>  Users
                    </a>
                    <a href="#" class="list-group-item">
                        <i class="fa-solid fa-calendar-days"></i>  Plans
                    </a>
                    <a href="#" class="list-group-item">
                        <i class="fa-regular fa-window-restore"></i>  Post
                    </a>
                    <a href="#" class="list-group-item">
                        <i class="fa-solid fa-shapes"></i>  Genre
                    </a>
                </div>
            </div>

            <div class="col-9 mb-3">
                <table class="table table-hover align-middle bg-white border">
                    <thead class="thead-plans">
                        <tr>
                            <th>plan ID</th>
                            <th>plan date</th>
                            <th>owner</th>
                            <th>Created At</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <td>10</td>
                        <td>2023:09:01</td>
                        <td>Mike Smith</td>
                        <td>2023:08:15</td>
                        <td><i class="fa-solid fa-calendar text-success"></i>&nbsp; Activate</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-sm" data-bs-toggle="dropdown">
                                    <i class="fa-solid fa-calendar text-secondary"></i>
                                </button>

                                <div class="dropdown-menu menu-hover">
                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#activateModal">
                                        <i class="fa-solid fa-calendar text-success"></i>  Activate
                                    </a>
                                    
                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deactivateModal">
                                        <i class="fa-solid fa-calendar-xmark text-danger"></i></i>  Deactivate
                                    </a>
                                </div>
                            </div>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('admin.plans.modal.status.activate')
    @include('admin.plans.modal.status.deactivate')
@endsection
