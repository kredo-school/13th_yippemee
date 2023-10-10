@extends('layouts.app')

@section('title', 'Create Post')

@section('content')

    <div class="container m-5">
        <form action="#" method="post">
            <div class="d-flex flex-column mb-3 align-items-start">
                <label for="genre" class="form-label fw-bold me-3">Genre</label>

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
                        <input type="checkbox" name="genre[]" id="genre_mexican" value="Mexican" class="form-check-input">
                        <label for="genre_mexican" class="form-check-label">Mexican</label>
                    </div>
                    <div class="form-check form-check-inline d-flex align-items-center">
                        <input type="checkbox" name="genre[]" id="genre_others" value="" class="form-check-input">
                        <label for="genre_others" class="form-check-label">Others</label>
                        <input type="text" name="genre" id="genre_others_text" class="form-control" value="" autofocus>
                        <button type="submit" class="btn text-white" style="background-color: #253C5C;"><i class="fa-solid fa-plus"></i></button>
                    </div>
                </div> 
            </div>

            <div class="mb-3 text-start">
                <label for="description" class="form-label d-block fw-bold">
                    description
                </label>
                <textarea name="description" id="description" rows="3" class="form-control"></textarea>
            </div>

            <div class="mb-3 text-start">
                <label for="restrante_name" class="form-label d-block fw-bold">
                    restrante name
                </label>
                <input type="text" name="restrante_name" id="restrante_name" class="form-control">
            </div>

            <div class="row mb-3 text-start">
                <div class="col">
                    <label for="post-image" class="form-label d-block fw-bold">
                        image
                    </label>
                    <img src="https://images.pexels.com/photos/2092507/pexels-photo-2092507.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" class="post-image mb-2">
                    <input type="file" name="post_image" class="form-control">
                </div>
            </div>
            <div class="col text-start">
                <button type="submit" class="btn btn-post px-5">POST</button>
            </div>
            

        </form>
    </div>

    

@endsection
