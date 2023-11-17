@extends('layouts.app')

@section('title', 'Friends list')

@section('content')

    <div class="friends">
        <div class="container my-4 margin-container bg-white">

            <div class="row">
                <div class="col  page-title">
                    <h2 class="text-center " >My Friends List</h2>
                    <span class="bar bar-short mt-4"></span>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-3 ms-auto mb-3">
                    <form id="searchForm" action="{{ route('friends.search') }}" method="get" class="search-form">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" name="search" class="form-control form-control-sm" placeholder="Search for friends">
                    </form>
                </div>
                @include('friends.modal.show_list')
            </div>

            <div class="row mb-3">
                <div class="col mb-3">
                    <div class="admin-table">
                        <table class="table table-hover align-middle border">
                            <thead class="users-thead">
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th></th>
                                </tr>
                            </thead>
                            @foreach($addedFriends as $friend)
                                <tbody class="no-hover-effect">
                                    <tr>
                                        <td>
                                            <a href="#">
                                                @if($friend->avatar)
                                                    <img src="#" alt="#" class="rounded-circle user-avatar">
                                                @else
                                                    <i class="fa-solid fa-circle-user text-secondary user-icon"></i>
                                                @endif
                                            </a>
                                        </td>
                                        <td>
                                            <a href="#" class="text-decoration-none text-dark">{{ $friend->name }}</a>
                                        </td>
                                        <td>{{ $friend->username }}</td>
                                        <td>{{ $friend->email }}</td>
                                        <td>
                                            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#removeModal-{{ $friend->id }}">Remove</button>
                                            @include('friends.modal.remove_friend', ['friend_id' => $friend->id])
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('searchForm').addEventListener('submit', function(event) {
            event.preventDefault();

            $.ajax({
                url: '{{ route('friends.search') }}',
                type: 'GET',
                data: { search: $('input[name="search"]').val() },
                success: function(response) {
                    $('#showlist-modal .modal-body').html(response);
                    $('#showlist-modal').modal('show');
                },
                error: function() {
                    alert('Error loading results');
                }
            });
        });
    </script>   

@endsection

