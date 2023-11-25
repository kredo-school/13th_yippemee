@extends('layouts.app')

@section('title', 'Admin: Plans')

@section('content')
<div class="admin">
    <div class="container my-5 margin-container">
        <div class="row mb-2">
            <div class="col-3">
            </div>
            <div class="col">
                <h2 class="admin_friends_list_title">Plans List</h2>
            </div>
            <div class="col-3 ms-auto mb-auto">
                <form action="{{ route('plans.search') }}" class="search-form">
                    <label class="form-control-sm">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="search" name="search"  placeholder="Search for plan">
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

            @if ($plans->isNotEmpty())

            <div class="col-9 mb-3">
                <div class="admin-table">
                    <table class="table align-middle bg-white border">
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

                            @forelse ($plans as $plan)

                            <tr>
                                <td>{{ $plan->id }}</td>
                                <td>{{ $plan->date }}</td>
                                <td>{{ $plan->user->name }}</td>
                                <td>{{ $plan->created_at }}</td>
                                <td>
                                    @if ($plan->trashed())
                                    <i class="fa-solid fa-calendar-xmark text-danger me-1"></i>Deactivate
                                    @else
                                    <i class="fa-solid fa-calendar text-success me-1"></i>Activate
                                    @endif
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm" data-bs-toggle="dropdown">
                                            <i class="fa-solid fa-calendar text-secondary"></i>
                                        </button>

                                        <div class="dropdown-menu menu-hover">
                                            @if ($plan->trashed())
                                            <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#activateModal-{{ $plan->id }}">
                                                <i class="fa-solid fa-calendar text-success me-1"></i>Activate
                                            </a>
                                            @else
                                            <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deactivateModal-{{ $plan->id }}">
                                                <i class="fa-solid fa-calendar-xmark text-danger me-1"></i>Deactivate
                                            </a>
                                            @endif
                                        </div>
                                        @include('admin.plans.modal.status.activate')
                                        @include('admin.plans.modal.status.deactivate')
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <li class="list-group-item d-flex align-items-center">
                                <p class="text-center">No Plan Yet.</p>
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
