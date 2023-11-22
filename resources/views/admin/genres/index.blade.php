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
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addGenreModal">
                    Add Genre
                </button>
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
                                <th>Image</th>
                                <th>name</th>
                                <th>count</th>
                                <th>last updated</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody class="no-hover-effect">
                            @if ($all_genres->isEmpty())
                            <tr>
                                <td colspan=6 class="text-muted text-center">No genres match your search.</td>
                            </tr>
                            @elseif($all_genres->isNotEmpty())
                                @foreach ($all_genres as $genre)
                                <tr>
                                    <td>{{ $genre->id }}</td>
                                    <td>
                                        @if ($genre->image)
                                            <img src="{{ asset($genre->image) }}" alt="{{ $genre->image }}" class="d-block mu-auto admin-post-img">    
                                        @else
                                            <span>No Image</span>
                                        @endif
                                    </td>
                                    <td>{{ $genre->name }}</td>
                                    <td>{{ $genre->social_posts ? $genre->social_posts->count() : 0 }}</td>
                                    <td>{{ $genre->updated_at }}</td>
                                    
                                    <td class="justify-content-center">
                                        <button class="btn btn-lg m-auto" data-bs-toggle="modal" data-bs-target="#updateGenre-{{ $genre->id }}" title="Edit"><i class="fa-solid fa-pen icon-warning"></i>
                                        <button class="btn btn-lg m-auto" data-bs-toggle="modal" data-bs-target="#deleteGenre-{{ $genre->id }}" title="Delete"><i class="fa-solid fa-trash-can icon-red"></i>
                                    </td>
                                    
                                </tr>
                                @include('admin.genres.modal.actions', ['genre' => $genre])
                                @endforeach
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Uncategorized</td>
                                    <td>{{ $uncategorized_count }}</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Add Genre Modal -->
<div class="modal fade" id="addGenreModal" tabindex="-1" aria-labelledby="addGenreModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="addGenreModalLabel">Add Genre</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('admin.genres.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
            <div class="mb-3">
                <label for="genreName" class="form-label">Genre Name</label>
                <input type="text" class="form-control" id="genreName" name="name" placeholder="Genre name">
            </div>
            <div class="mb-3">
                <label for="genreImage" class="form-label">Genre Image</label>
                <input type="file" class="form-control" id="genreImage" name="image">
            </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add Genre</button>
            </div>
        </form>
        </div>
    </div>
    </div>

@endsection