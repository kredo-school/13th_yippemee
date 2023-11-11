@extends('layouts.app')

@section('title', 'Create Post')

@section('content')

<div class="container my-4 margin-container bg-white">
    <div class="row">
        <div class="col page-title">
            <h2 class="text-center">Create Post</h2>
            <span class="bar bar-short mt-4"></span>
        </div>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('social.posts.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="mb-3 text-start">
                <label for="genre" class="form-label d-block fw-bold">
                    Genre
                </label>

                <!-- display all genres-->
                @foreach ($all_genres as $genre)
                <div class="form-check form-check-inline">
                    <input type="checkbox" name="genre[]" id="{{ $genre->name }}" value="{{ $genre->id }}" class="form-check-input">
                    <label for="{{ $genre->name }}" class="form-check-label">{{ $genre->name }}</label>
                </div>
                    
                @endforeach
            </div>
        </div>

        <div class="row">
            <div class="mb-3  text-start">
                <label for="description" class="form-label d-block fw-bold">
                    Description
                </label>
                <textarea name="description" id="description" rows="3" class="form-control"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="mb-3  text-start">
                <label for="restaurant_name" class="form-label d-block fw-bold">
                    restaurant name
                </label>
                <input type="text" name="restaurant_name" id="restaurant_name" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="mb-3">
                <label for="image" class="form-label text-start d-block fw-bold">Image</label>
                <input type="file" name="image" class="form-control w-50">
            </div>
        </div>              

        <button type="submit" class="btn btn-contact btn-post w-25"><i class="fa-solid fa-pen-to-square"></i> POST</button> 

    </form>        
</div>

@endsection
