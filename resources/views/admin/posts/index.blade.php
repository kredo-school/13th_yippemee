@extends('layouts.app')

@section('title', 'Admin: Search Posts')

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
                <form action="{{ route('posts.search') }}" class="search-form">
                    <label class="form-control-sm">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="search" name="search"  placeholder="Search for post">
                    </label>
                </form>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-3 mb-auto">
                @include('admin.left_side_menu')
            </div>

            @if ($social_posts->isNotEmpty())

            <div class="col-9 mb-3">
                <div class="admin-table">
                    <table class="table align-middle bg-white border">
                        <thead class="thead-posts">
                            <div class="tr">
                                <th>post ID</th>
                                <th>post</th>
                                <th>owner</th>
                                <th>Created At</th>
                                <th>Status</th>
                                <th></th>
                            </div>
                        </thead>
                        <tbody>
                            {{-- @if($search && $all_social_posts->isEmpty()) --}}
                            @forelse ($social_posts as $social_post)

                                    <tr>
                                        <td>{{ $social_post->id }}</td>
                                        <td>
                                            <a href="{{ route('social.posts.show', $social_post->id) }}"><img src="{{ $social_post->image }}" alt="{{ $social_post->image }}" class="d-block mu-auto admin-post-img"></a>
                                        </td>
                                        <td>{{ $social_post->user->name }}</td>
                                        <td>{{ $social_post->created_at }}</td>

                                        <td>
                                        @if ($social_post->trashed())
                                           <i class="fa-solid fa-eye-slash text-danger me-1"></i>Hidden
                                         @else
                                           <i class="fa-solid fa-eye text-primary me-1"></i>Visible
                                        @endif
                                        </td>

                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-sm" data-bs-toggle="dropdown">
                                                    <i class="fa-solid fa-eye text-secondary"></i>
                                                </button>

                                                <div class="dropdown-menu menu-hover">
                                                    @if ($social_post->trashed())
                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#visibleModal-{{ $social_post->id }}">
                                                        <i class="fa-solid fa-eye text-primary me-1"></i>Visible
                                                    </a>
                                                    @else
                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#hiddenModal-{{ $social_post->id }}">
                                                        <i class="fa-solid fa-eye-slash text-danger me-1"></i>Hidden
                                                    </a>
                                                    @endif
                                                 </div>
                                            @include('admin.posts.modal.status.hidden', ['social_post' => $social_post])
                                            @include('admin.posts.modal.status.visible', ['social_post' => $social_post])
                                        </td>
                                    </tr>
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
