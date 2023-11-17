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
                <form action="{{ route('contacts.search')}}" class="search-form">
                    <label class="form-control-sm">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="search" name="search"  placeholder="Search name">
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

            @if ($contacts->isNotEmpty())

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
                        <tbody>

                            @forelse ($contacts as $contact)

                            <tr>
                                <td>{{ $contact->id }}</td>
                                <td>{{ $contact->user->name }}</td>
                                <td>{{ $contact->user->email }}</td>
                                <td>{{ $contact->created_at }}</td>
                                <td class="d-flex justify-content-center">
                                    <button class="btn btn-lg m-auto" data-bs-toggle="modal" data-bs-target="#userMessage-{{ $contact->id }}" title="Check"><i class="fa-solid fa-comment-dots icon-warning"></i></button>
                                    <button class="btn btn-lg m-auto" data-bs-toggle="modal" data-bs-target="#deleteMessage-{{ $contact->id }}" title="Delete"><i class="fa-solid fa-trash-can icon-red"></i></button>
                                </td>
                            </tr>

                            @include('admin.contacts.modal.message')

                            @empty
                            <li class="list-group-item d-flex align-items-center">
                                <p class="text-center">No Contact Yet.</p>
                                </li>
                            @endforelse

                        </tbody>
                    </table>

                    @endif

                </div>

            </div>
        </div>
    </div>
</div>

@endsection
