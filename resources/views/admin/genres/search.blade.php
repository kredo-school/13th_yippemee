@extends('layouts.app')

@section('title', 'Admin: Search Genre')

@section('content')
<div class="admin">
    <div class="container my-5 margin-container">
        <div class="row mb-2">
            <div class="col-3"></div>
            <div class="col">
                <h2 class="admin_friends_list_title">Genre</h2>
            </div>
            <div class="col-3 ms-auto mb-auto">
                <form action="{{ route('admin.genres.store') }}" method="post" class="d-flex align-items-center">
                    @csrf

                    <input type="text" name="name" class="form-control me-2" value="{{ old('name') }}" placeholder="Add a genre..." autofocus>
                    <button type="submit" class="btn text-white" style="background-color: #253C5C;"><i class="fa-solid fa-plus"></i></button>
                    @error('name')
                        <p class="text-danger small">{{ $message }}</p>
                    @enderror
                </form>
            </div>

            <div class="col-3 ms-auto mb-auto">
                <form action="{{ route('genres.search')}}" class="search-form">

                    <label class="form-control-sm">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="search" name="search"  placeholder="Search for genre">
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
                            @if ($genres->isEmpty())
                            <tr>
                                <td colspan=6 class="text-muted text-center">No genres match your search.</td>
                            </tr>
                            @elseif($genres->isNotEmpty())
                                @foreach ($genres as $genre)
                                <tr>
                                    <td>{{ $genre->id }}</td>
                                    <td>{{ $genre->name }}</td>
                                    <td>#</td>
                                    <td>{{ $genre->updated_at }}</td>
                                    <td class="d-flex justify-content-center">
                                        <button class="btn btn-lg m-auto" data-bs-toggle="modal" data-bs-target="#updateGenre-{{ $genre->id }}" title="Edit"><i class="fa-solid fa-pen icon-warning"></i>
                                        <button class="btn btn-lg m-auto" data-bs-toggle="modal" data-bs-target="#deleteGenre-{{ $genre->id }}" title="Delete"><i class="fa-solid fa-trash-can icon-red"></i>
                                    </td>
                                </tr>
                                @include('admin.genres.modal.actions', ['genre' => $genre])
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
