@extends('layouts.app')

@section('title', 'Create Bucket Lists')

@section('content')

<div class="container">

    <div class="justify-content-center">

        <div class="col-10">
        <form action="#" method="post" class="shadow rounded-3 p-5" enctype="multipart/form-data">
            @csrf
            <h1 class="main-font mb-0 fw-light text-center mb-5" class="list-group-item">Make a Visit List</h1>

    {{-- image --}}
    <div class="row">
            <div class="col-5 ms-auto">
                <div class="drag-file-area-visit">
                    <span class="material-icons-outlined upload-icon"> file_upload </span>
                    <h5 class="dynamic-message"> Drag & drop any file here </h5>
                    <label class="label"> or browse file from device<span class="browse-files"> <input type="file" class="default-file-input"/></span> </label>
                </div>
            </div>

        {{-- info --}}
        <div class="col-5 ms-auto me-5">
            <div class="mb-3 second-font">
                <label for="restaurant_name" class="form-label fw-bold mb-0">Restaurant Name</label>
                <input type="text" name="restaurant_name" id="restaurant_name" value="" class="form-control" autofocus class="form-control">{{ old('restaurant_name') }}
            </div>

            {{-- raiting --}}
        <div class="mb-3 second-font">
            <label for="star" class="form-label fw-bold mb-0">How would you rate your experience ?</label>

            <fieldset class="rating">
                <input id="demo-1" type="radio" name="demo" value="1">
                <label for="demo-1">1 star</label>
                <input id="demo-2" type="radio" name="demo" value="2">
                <label for="demo-2">2 stars</label>
                <input id="demo-3" type="radio" name="demo" value="3">
                <label for="demo-3">3 stars</label>
                <input id="demo-4" type="radio" name="demo" value="4">
                <label for="demo-4">4 stars</label>
                <input id="demo-5" type="radio" name="demo" value="5">
                <label for="demo-5">5 stars</label>

                <div class="stars">
                    <label for="demo-1" aria-label="1 star" title="1 star"></label>
                    <label for="demo-2" aria-label="2 stars" title="2 stars"></label>
                    <label for="demo-3" aria-label="3 stars" title="3 stars"></label>
                    <label for="demo-4" aria-label="4 stars" title="4 stars"></label>
                    <label for="demo-5" aria-label="5 stars" title="5 stars"></label>
                </div>
            </fieldset>

        <div class="mb-3 mt-2 second-font">
            <label for="date" class="form-label fw-bold mb-0">When did you go ?</label>
            <input type="date" name="date" id="date" value="" class="form-control" autofocus>
        </div>



        <div class="mb-3 second-font">
            <label for="introduction" class="form-label fw-bold mb-0">Sharing your reviews about the restaurant</label>
            <textarea name="introduction" id="introduction" rows="5" placeholder="Write some comments about the restaurant" class="form-control" class="form-control">{{ old('introduction') }}</textarea>
            {{-- Error --}}
            @error('description')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>

        {{-- Button --}}
        <div class="text-end">
            <a href="{{ route('visits.show') }}" class="btn btn--green btn--cubic px-5">Cancel</a>
            <a href="{{ route('visits.show') }}" class="btn btn--yellow btn--cubic px-5">Save</a>
        </div>
        {{-- End Button --}}
    </div>
        </form>
        </div>
</div>
@endsection


<script>
    (function(){
        var rating = document.querySelector('.rating');
        var handle = document.getElementById('toggle-rating');
        handle.onchange = function(event) {
            rating.classList.toggle('rating', handle.checked);
        };
    }());
</script>
