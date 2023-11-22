@extends('layouts.app')

@section('title', 'Create Bucket List')

@section('content')

<div class="container">
    <div class="justify-content-center mt-5 mb-5">
        <div class="col-8" style="margin-left: 216px">
            <h1 class="main-font mb-0 fw-light text-center mb-4">Make a Bucket List</h1>
            <span class="bar bar-short mb-5"></span>

            <form action="/bucket/store" method="post" name="bucket" enctype="multipart/form-data">
                @csrf
                @method('post')

                {{-- info --}}
                <div class="me-5">
                    <div class="mb-2">
                        <label for="restaurantName" class="form-label fw-bold mb-0">Restaurant Name</label>
                        <input type="text" name="restaurantName" id="restaurantName" value="" class="form-control" autofocus>
                    </div>

                    {{-- Genre --}}
                    <label for="genre" class="form-label fw-bold mb-0 mt-4">Genre</label>
                    <div class="d-flex align-items-center posts-input">

                    @foreach ($all_genres as $genre)
                        <div class="form-check form-check-inline d-flex align-items-center">
                            <input type="checkbox" name="genre[]" id="{{ $genre->name }}" value="{{ $genre->id }}" class="form-check-input">

                            <label for="{{ $genre->name }}" class="form-check-label">{{ $genre->name }}</label>
                        </div>
                    @endforeach
                    </div>

                    <div class="mb-2">
                        <label for="hoursOption" class="form-label fw-bold mb-0 mt-3">Hours of operation</label>
                        <input type="text" name="hoursOption" id="hoursOption" class="form-control" autofocus>
                    </div>

                    <div class="mb-2">
                        <label for="url" class="form-label fw-bold mb-0 mt-3">Web Site</label>
                        <input type="url" name="url" id="url" class="form-control" autofocus>
                    </div>

                    <div class="mb-2">
                        <label for="image" class="form-label fw-bold">Image</label>
                        <input type="file" name="image" id="image" class="form-control" aria-description="image-info">
                    </div>

                    <div class="mb-4">
                        <label for="description" class="form-label fw-bold mb-0 mt-3">Additional</label>
                        <textarea name="description" id="description" rows="4" placeholder="Write some information about the restaurant" class="form-control"></textarea>
                    </div>

                    <button type="submit" name="btn_send" class="btn btn-contact w-25 mt-3">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
