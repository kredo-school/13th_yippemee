@extends('layouts.app')

@section('title', 'Admin: Search Users')

@section('content')
<div class="admin">
    <div class="container my-5 margin-container">
        <div class="row mb-2">
            <div class="col-3">
            </div>
            <div class="col">
                <h2 class="admin_friends_list_title">Users List</h2>
            </div>
            <div class="col-3 ms-auto mb-auto">
                <form action="{{ route('users.search') }}" class="search-form">
                    <label class="form-control-sm">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="search" name="search"  placeholder="Search for user">
                    </label>
                </form>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-3 mb-auto">
                @include('admin.left_side_menu')
            </div>

            @if ($users->isNotEmpty())

            <div class="col-9 mb-3">
                <div class="admin-table">
                    <table class="table align-middle border">
                        <thead class="users-thead">
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Created At</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse ($users as $user)

                            <tr>
                                <td>
                                    @if ($user->avatar)
                                        <img src="{{ $user->avatar }}" alt=" {{ $user->avatar }}"
                                        class="rounded-circle d-block mx-auto avatar-md">
                                    @else
                                        <i class="fa-solid fa-circle-user d-block text-center icon-md"></i>
                                    @endif
                                </td>
                                <td>
                                    <a href="#" class="text-decoration-none text-dark">{{ $user->name }}</a>
                                </td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td>
                                    @if ($user->trashed())
                                        <i class="fa-solid fa-user-slash text-danger me-1"></i>Inactive
                                    @else
                                        <i class="fa-solid fa-user text-success me-1"></i>Active
                                    @endif
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm" data-bs-toggle="dropdown">
                                            <i class="fa-solid fa-bars"></i>
                                        </button>

                                        <div class="dropdown-menu menu-hover">
                                            @if ($user->trashed())
                                            <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#activateModal-{{ $user->id }}">
                                                <i class="fa-solid fa-user text-success"></i> Activate
                                            </a>
                                            @else
                                            <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deactivateModal-{{ $user->id }}">
                                                <i class="fa-solid fa-user-slash text-danger"></i>  Deactivate
                                            </a>
                                            @endif
                                        </div>
                                    </div>

                                </td>
                            </tr>

                            @include('admin.users.modal.status.activate')
                            @include('admin.users.modal.status.deactivate')

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
