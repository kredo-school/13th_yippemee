@extends('layouts.app')

@section('title', 'Admin: Genre')

@section('content')
    <div class="container m-5">
        <div class="row mb-3">

            <div class="col-3 ms-auto mb-auto">
                <form action="#" class="d-flex align-items-center">
                    <input type="text" name="genre_name" class="form-control me-2" value="" placeholder="Add a genre..." autofocus>
                    <button type="submit" class="btn text-white" style="background-color: #253C5C;"><i class="fa-solid fa-plus"></i></button>
                </form>
                
            </div>
            
            <div class="col-3 ms-auto mb-auto">
                <form action="#">
                    <input type="search" name="search" class="form-control form-control-sm" placeholder="Search for genres">
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
                    </div>
                </div>
                
            </div>

            <div class="col-9 mb-3">
                <div class="admin-table">
                    <table class="table table-hover align-middle bg-white border">
                        <thead class="thead-genres">
                            <tr>
                                <th>ID</th>
                                <th>name</th>
                                <th>count</th>
                                <th>last updated</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <td>10</td>
                            <td>Italian</td>
                            <td>5</td>
                            <td>2023-09-01 08:15:10</td>
                            <td>
                                <button class="btn btn-outline-warning btn-sm me-2" data-bs-toggle="modal" data-bs-target="#updateGenre" title="Edit"><i class="fa-solid fa-pen"></i>
                                <button class="btn btn-outline-danger btn-sm me-2" data-bs-toggle="modal" data-bs-target="#deleteGenre" title="Delete"><i class="fa-solid fa-trash-can"></i>
                            </td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('admin.genres.modal.actions')
@endsection
