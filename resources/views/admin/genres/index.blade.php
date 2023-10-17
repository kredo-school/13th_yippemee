@extends('layouts.app')

@section('title', 'Admin: Genre')

@section('content')
<div class="admin">
    <div class="container my-5 margin-container">
        <div class="row mb-2">
            <div class="col-3"></div>
            <div class="col">
                <h2 class="admin_friends_list_title">Genre</h2>
            </div>
            <div class="col-3 ms-auto mb-auto">
                <form action="#" class="d-flex align-items-center">
                    <input type="text" name="genre_name" class="form-control me-2" value="" placeholder="Add a genre..." autofocus>
                    <button type="submit" class="btn text-white" style="background-color: #253C5C;"><i class="fa-solid fa-plus"></i></button>
                </form>
            </div>
            
            <div class="col-3 ms-auto mb-auto">
                <form action="#" class="search-form">
                    <label class="form-control-sm">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" name="search"  placeholder="Search for genre">
                    </label>
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
                    <table class="table align-middle bg-white border">
                        <thead class="thead-genres">
                            <tr>
                                <th>ID</th>
                                <th>name</th>
                                <th>count</th>
                                <th>last updated</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody class="no-hover-effect">
                            <tr>
                                <td>10</td>
                                <td>Italian</td>
                                <td>5</td>
                                <td>2023-09-01 08:15:10</td>
                                <td class="d-flex justify-content-center">
                                    <button class="btn btn-lg m-auto" data-bs-toggle="modal" data-bs-target="#updateGenre" title="Edit"><i class="fa-solid fa-pen icon-warning"></i>
                                    <button class="btn btn-lg m-auto" data-bs-toggle="modal" data-bs-target="#deleteGenre" title="Delete"><i class="fa-solid fa-trash-can icon-red"></i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('admin.genres.modal.actions')
</div>
    
@endsection
