@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')

    <div class="container my-4 margin-container bg-white">
        <div class="row">
            <div class="col page-title">
                <h2 class="text-center">Edit Post</h2>
                <span class="bar bar-short mt-4"></span>
            </div>
        </div>

        <form action="{{ route('social.posts.update', $social_post->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
        
            <div class="row">
                <div class="mb-3  text-start">
                    <label for="Genre" class="form-label d-block fw-bold">
                        Genre
                    </label>
                    <div class="d-flex align-items-center posts-input">
                        <div class="form-check form-check-inline d-flex align-items-center">
                            <input type="checkbox" name="genre[]" id="genre_italian" value="Italian" class="form-check-input">
                            <label for="genre_italian" class="form-check-label">Italian</label>
                        </div>
                        <div class="form-check form-check-inline d-flex align-items-center">
                            <input type="checkbox" name="genre[]" id="genre_japanese" value="Japanese" class="form-check-input">
                            <label for="genre_japanese" class="form-check-label">Japanese</label>
                        </div>
                        <div class="form-check form-check-inline d-flex align-items-center">
                            <input type="checkbox" name="genre[]" id="genre_mexican" value="Mexican" class="form-check-input mr-2">
                            <label for="genre_mexican" class="form-check-label">Mexican</label>
                        </div>
                        <div class="form-check form-check-inline d-flex align-items-center me-0">
                            <input type="checkbox" name="genre[]" id="genre_others" value="" class="form-check-input">
                            <label for="genre_others" class="form-check-label me-0">Others</label>
                        </div>
                        <div class="form-check form-check-inline d-flex align-items-center">
                            <input type="text" name="genre" id="genre_others_text" class="form-control" value="" autofocus>
                            <button type="submit" class="btn text-white" style="background-color: #253C5C;"><i class="fa-solid fa-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="mb-3  text-start">
                    <label for="description" class="form-label d-block fw-bold">
                        description
                    </label>
                    <textarea name="description" id="description" rows="3" class="form-control">{{ old('description', $social_post->description) }}</textarea>
                    @error('description')
                        <p class="text-danger small">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="mb-3  text-start">
                    <label for="restaurant_name" class="form-label d-block fw-bold">
                        restaurant name
                    </label>
                    <input type="text" name="restaurant_name" id="restaurant_name" value="{{ old('restaurant_name', $social_post->restaurant_name) }}" class="form-control">
                </div>
                @error('restaurant_name')
                    <p class="text-danger small">{{ $message }}</p>
                @enderror
            </div>

            <div class="row">
                <div class="row">
                    <div class="mb-3">
                        <label for="image" class="form-label text-start d-block fw-bold">Image</label>
                        @if($social_post->image)
                        <img src="{{ $social_post->image }}" alt="{{ $social_post->image }}"  class="w-25">
                        @else
                            <p>No image available.</p>
                        @endif
                        <input type="file" name="image" class="form-control mt-1 w-50">
                        @error('image')
                            <p class="text-danger small">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
            </div>

            <button type="submit" class="btn btn-contact btn-post w-25"><i class="fa-solid fa-pen-to-square"></i> SAVE</button> 

        </form>        
    </div>

@endsection

