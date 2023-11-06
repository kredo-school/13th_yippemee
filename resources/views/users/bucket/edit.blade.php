@extends('layouts.app')

@section('title', 'Edit Bucket List')

@section('content')
<div class="container">
    <div class="justify-content-center mt-5 mb-5">
        <div class="col-8" style="margin-left: 216px">
            <h1 class="main-font mb-0 fw-light text-center mb-4">Edit a Bucket List</h1>
            <span class="bar bar-short mb-5"></span>

            <form action="{{ route('bucket.update', $bucket->id) }}" method="post" name="bucket" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                {{-- info --}}
                <div class="me-5">
                    <div class="mb-2">
                        <label for="restaurantName" class="form-label fw-bold mb-0 mt-3">restaurant Name</label>
                        <input type="text" name="restaurantName" id="restaurantName" value="{{ old('restaurantName', $bucket->restaurantName) }}" class="form-control" autofocus>
                        @error('restaurantName')
                        <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Genre --}}
                    <label for="genre" class="form-label fw-bold mb-0 mt-4">Genre</label>
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

                    <div class="mb-2">
                        <label for="hoursOption" class="form-label fw-bold mb-0 mt-3">Hours of operation</label>
                        <input type="text" name="hoursOption" id="hoursOption" value="{{ old('hoursOption', $bucket->hoursOption) }}" class="form-control" autofocus>
                    </div>

                    <div class="mb-2">
                        <label for="url" class="form-label fw-bold mb-0 mt-3">Web Site</label>
                        <input type="url" name="url" id="url" value="{{ old('url', $bucket->url) }}" class="form-control" autofocus>
                    </div>

                    <div class="row mb-2">
                        <div class="col-6">
                        <label for="image" class="form-label fw-bold">Image</label>
                        <img src="{{ $bucket->image }}" alt="{{ $bucket->id }}" class="img-thumbnail w-100">
                        <input type="file" name="image" id="image" class="form-control" aria-description="image-info">
                        </div>
                        @error('image')
                        <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="description" class="form-label fw-bold mb-0 mt-3">Additional</label>
                        <textarea name="description" id="description" rows="4" placeholder="Write some information about the restaurant" class="form-control">{{ old('description', $bucket->description) }}</textarea>
                    </div>

                    <button type="submit btn-warning">Save</button>
                    {{-- <a href="{{ route('bucket.show') }}" onclick="document.bucket.submit();" class="btn btn--yellow btn--cubic px-5">Save</a>
                    <a href="{{ route('bucket.show') }}" class="btn btn--green btn--cubic px-5">Cancel</a></button> --}}

                </div>
            </form>
        </div>
    </div>

@endsection
