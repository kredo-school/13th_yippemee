@extends('layouts.app')

@section('title', 'Admin: Posts')

@section('content')
<div class="admin">
    <div class="container my-5 margin-container">
        <div class="row mb-2">
            <div class="col-3">
            </div>
            <div class="col">
                <h2 class="admin_friends_list_title">Posts List</h3>
            </div>
            <div class="col-3 ms-auto mb-auto">
                <form action="#" class="search-form">
                    <label class="form-control-sm">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" name="search"  placeholder="Search for post" value="{{ $search }}">
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
                        <thead class="thead-posts">
                            <div class="tr">
                                <th>post ID</th>
                                <th>post</th>
                                <th>genre</th>
                                <th>owner</th>
                                <th>Created At</th>
                                <th>Status</th>
                                <th></th>
                            </div>
                        </thead>
                        <tbody class="no-hover-effect">
                            @if($search && $all_social_posts->isEmpty())
                                <tr>
                                    <td colspan=6 class="text-muted text-center">No posts match your search.</td>
                                </tr>
                            @elseif($all_social_posts->isNotEmpty())
                                @foreach($all_social_posts as $social_post)
                                    <tr>
                                        <td>{{ $social_post->id }}</td>
                                        <td>
                                            <a href="{{ route('social.posts.show', $social_post->id) }}"><img src="{{ $social_post->image }}" alt="{{ $social_post->image }}" class="d-block mu-auto admin-post-img"></a>
                                        </td>
                                        <td>Italian</td>
                                        <td>{{ $social_post->user->name }}</td>
                                        <td>{{ $social_post->created_at }}</td>
                                        <td><i class="fa-solid fa-eye text-primary"></i>&nbsp; Visible</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-sm" data-bs-toggle="dropdown">
                                                    <i class="fa-solid fa-eye text-secondary"></i>
                                                </button>
                
                                                <div class="dropdown-menu menu-hover">
                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#visibleModal-{{ $social_post->id }}">
                                                        <i class="fa-solid fa-eye text-primary"></i>  visible
                                                    </a>
                                                    
                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#hiddenModal-{{ $social_post->id }}">
                                                        <i class="fa-solid fa-eye-slash text-danger"></i></i>  hidden
                                                    </a>
                                                </div>
                                            </div>
                                            @include('admin.posts.modal.status.hidden', ['social_post' => $social_post])
                                            @include('admin.posts.modal.status.visible', ['social_post' => $social_post])
                                        </td>
                                    </tr>
                                @endforeach
                            @elseif($all_social_posts->isEmpty())
                            <tr>
                                <td colspan=6 class="text-muted text-center">No posts yet.</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
   
</div>

@endsection
