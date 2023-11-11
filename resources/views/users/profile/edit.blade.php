@extends('layouts.app')

@section('title', 'Edit Profile')

@section('content')

<div class="row justify-content-center">
    <div class="col-5">
        <form action="{{ route('profile.update') }}" method="post" class="bg-white shadow rounded-3 p-5" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <h1 class="mb-0 text-center" class="list-group-item">Update Profile</h1>
            <span class="bar bar-short mt-4"></span>

            <div class="row mb-3 mt-5" style="margin-left: 20px">
                <div class="col-2">
                @if ($user->avatar)
                    <img src="{{ $user->avatar }}" alt="{{ $user->name }}" class="img-thumbnail rounded-circle d-block mx-auto">
                @else
                    <i class="fa-solid fa-circle-user text-secondary d-block text-center icon-md"></i>
                @endif
                </div>

                <div class="col align-self-end">
                    <input type="file" name="avatar" id="avatar" class="form-control mt-1" aria-describedby="avatar-info">
                    @error('avatar')
                        <p class="text-danger small">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="mb-4 col-9" style="margin-left: 170px">
                <label for="name" class="form-label fw-bold mb-0">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" class="form-control" autofocus>
                @error('name')
                    <p class="text-danger small">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4 col-9" style="margin-left: 170px">
                <label for="username" class="form-label fw-bold mb-0">User Name</label>
                <input type="text" name="username" id="username" value="{{ old('username', $user->username) }}" class="form-control" autofocus>
                @error('username')
                    <p class="text-danger small">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4 col-9" style="margin-left: 170px">
                <label for="email" class="form-label fw-bold">E-Mail Address</label>
                <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" class="form-control">
                {{-- Error --}}
                @error('email')
                    <p class="text-danger small">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4 col-9" style="margin-left: 170px">
                <label for="location" class="form-label fw-bold mb-0">Current City</label>
                <input type="text" name="location" id="location" value="{{ old('location', $user->location) }}" class="form-control" autofocus>
                @error('location')
                    <p class="text-danger small">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4  col-9" style="margin-left: 170px">
                <label for="introduction" class="form-label fw-bold mb-0">Best Restaurant</label>
                <input type="text" name="introduction" id="introduction" value="{{ old('introduction', $user->introduction) }}" class="form-control" autofocus>
                @error('introduction')
                    <p class="text-danger small">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4  col-9" style="margin-left: 170px">
                <label for="genre" class="form-label fw-bold mb-0">Favorite Genre</label>
                <div class="d-flex align-items-center posts-input">

                    @foreach ($all_genres as $genre)
                    <div class="form-check form-check-inline d-flex align-items-center">
                        @if (in_array($genre->id, $selected_genres))
                        <input type="checkbox" name="genre[]" id="{{ $genre->name }}" value="{{ $genre->id }}" class="form-check-input" checked>
                        @else
                        <input type="checkbox" name="genre[]" id="{{ $genre->name }}" value="{{ $genre->id }}" class="form-check-input">
                        @endif

                        <label for="{{ $genre->name }}" class="form-check-label">{{ $genre->name }}</label>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- <div class="mb-3">
                <label for="introduction" class="form-label fw-bold mb-0">About you</label>
                <textarea name="introduction" id="introduction" rows="5" placeholder="Write some details about yourself" class="form-control"></textarea>
            </div> --}}

            {{-- Button --}}
            <button type="submit" class="btn btn-warning px-5"  style="margin-left: 170px">Save</button>
            {{-- <div class="text-end">
            <a href="#" class="btn btn--green btn--cubic px-5">Cancel</a>
            <a href="#" class="btn btn--yellow btn--cubic px-5">Save</a>
            </div> --}}
            {{-- End Button --}}
        </form>
    </div>
</div>
@endsection
