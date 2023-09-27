@extends('layouts.app')

@section('title', 'Admin: Posts')

@section('content')
    <div class="container">
        <div class="row mb-3">
            <div class="col-3 ms-auto mb-auto">
                <form action="#">
                    <input type="search" name="search" class="form-control form-control-sm" placeholder="Search for posts">
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
                    <thead class="thead-posts">
                        <tr>
                            <th>post ID</th>
                            <th>post</th>
                            <th>genre</th>
                            <th>owner</th>
                            <th>Created At</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <td>10</td>
                        <td><i class="fa-solid fa-image"></i></td>
                        <td>Italian</td>
                        <td>Mike Smith</td>
                        <td>2023:08:15</td>
                        <td><i class="fa-solid fa-eye text-primary"></i>&nbsp; Visible</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-sm" data-bs-toggle="dropdown">
                                    <i class="fa-solid fa-eye text-secondary"></i>
                                </button>

                                <div class="dropdown-menu menu-hover">
                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#visibleModal">
                                        <i class="fa-solid fa-eye text-primary"></i>  visible
                                    </a>
                                    
                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#hiddenModal">
                                        <i class="fa-solid fa-eye-slash text-danger"></i></i>  hidden
                                    </a>
                                </div>
                            </div>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('admin.posts.modal.status.hidden')
    @include('admin.posts.modal.status.visible')
@endsection
