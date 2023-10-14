@extends('layouts.app')

@section('title', 'Admin: Contact')

@section('content')
<div class="admin">
    <div class="container my-5 margin-container">
        <div class="row mb-2">
            <div class="col-3">
            </div>
            <div class="col">
                <h2 class="admin_friends_list_title">Contact List</h2>
            </div>
            <div class="col-3 ms-auto mb-auto">
                <form action="#" class="search-form">
                    <label class="form-control-sm">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" name="search"  placeholder="Search">
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
                        <thead class="thead-contact">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Recieved</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="no-hover-effect">
                            <tr>
                                <td>1</td>
                                <td>name</td>
                                <td>aaa@email.com</td>
                                <td>2023-09-01 08:15:10</td>
                                <td>
                                    <button class="btn btn-outline-warning btn-sm me-2" data-bs-toggle="modal" data-bs-target="#userMessage" title="Edit"><i class="fa-solid fa-comment-dots"></i>
                                    <button class="btn btn-outline-danger btn-sm me-2" data-bs-toggle="modal" data-bs-target="#deleteMessage" title="Delete"><i class="fa-solid fa-trash-can"></i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
    @include('admin.contacts.modal.message')
</div>
    
@endsection
