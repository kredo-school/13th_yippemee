@extends('layouts.app')

@section('title', 'Admin: Users')

@section('content')

    <div class="container m-5">
        <div class="row mb-3">
            <div class="col-3 ms-auto mb-auto">
                <form action="#">
                    <input type="search" name="search" class="form-control form-control-sm" placeholder="Search for name">
                </form>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-3 mb-auto">
                <div class="admin">
                    <div class="list-group">
                        <a href="{{ route('admin.users.index') }}" class="list-group-item">
                            <i class="fa-solid fa-users"></i>  Users
                        </a>
                        <a href="{{ route('admin.plans.index') }}" class="list-group-item">
                            <i class="fa-solid fa-calendar-days"></i>  Plans
                        </a>
                        <a href="{{ route('admin.posts.index') }}" class="list-group-item">
                            <i class="fa-regular fa-window-restore"></i>  Post
                        </a>
                        <a href="{{ route('admin.genres.index') }}" class="list-group-item">
                            <i class="fa-solid fa-shapes"></i>  Genre
                        </a>
                        <a href="{{ route('admin.contacts.index') }}" class="list-group-item">
                            <i class="fa-solid fa-envelopes-bulk"></i>  contact
                        </a>
                    </div>
                </div>
                
            </div>

            <div class="col-9 mb-3">
                <div class="admin-table">
                    <table class="table align-middle border">
                        <thead class="users-thead">
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Created At</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
    
                        <tbody class="no-hover-effect">
                            <tr>
                                <td>
                                    <i class="fa-solid fa-circle-user d-block text-center admin-users-icon"></i>
                                </td>
                                <td>
                                    <a href="#" class="text-decoration-none text-dark">  username  </a>
                                </td>
                                <td>  e-mail  </td>
                                <td>  created at  </td>
                                <td>                      
                                    <i class="fa-solid fa-user text-success"></i>&nbsp; Active
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm" data-bs-toggle="dropdown">
                                            <i class="fa-solid fa-bars"></i>
                                        </button>
    
                                        <div class="dropdown-menu menu-hover">
                                            <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#activateModal">
                                                <i class="fa-solid fa-user text-success"></i> Activate
                                            </a>
                                            
                                            <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deactivateModal">
                                                <i class="fa-solid fa-user-slash text-danger"></i>  Deactivate
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
    @include('admin.users.modal.status.activate')
    @include('admin.users.modal.status.deactivate')

@endsection
