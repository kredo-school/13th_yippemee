@extends('layouts.app')

@section('title', 'Create Visits')

@section('content')

<div class="row justify-content-center">
    <div class="col-6">
        <form action="#" method="post" class="shadow rounded-3 p-5" enctype="multipart/form-data">
            @csrf
            <h1 class="main-font mb-0 fw-light text-center" class="list-group-item">Create Visit</h1>

            <div class="row mb-3">
                <div class="col-4 main-font">
                    <i class="fa-regular  fa-image d-block text-center icon-lg"></i>
                </div>

                <div class="col-auto align-self-end">
                    <input type="file" name="avatar" id="avatar" class="form-control form-control-sm mt-1" aria-describedby="avatar-info">
                    <div class="form-text" id="avatar-info">
                        Acceptable formats: jpeg, jpg, png, gif only<br>
                        Max file size is 1048kb
                    </div>
                     {{-- Error --}}
                    @error('image')
                    <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>
            </div>


            <div class="mb-3 second-font">
                <label for="restaurant_name" class="form-label fw-bold mb-0">Restaurant Name</label>
                <input type="text" name="restaurant_name" id="restaurant_name" value="" class="form-control" autofocus class="form-control">{{ old('restaurant_name') }}
            </div>

            <div class="mb-3 second-font">
                <label for="date" class="form-label fw-bold mb-0">When did you go ?</label>
                <input type="date" name="date" id="date" value="" class="form-control" autofocus>
            </div>

            <div class="mb-3 second-font">
                <label for="current_city" class="form-label fw-bold mb-0">How would you rate your experience ?</label>
                <h3><i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i></h3>

            </div>

            <div class="mb-3 second-font">
                <label for="introduction" class="form-label fw-bold mb-0">Write your review</label>
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
        </form>
    </div>
</div>
@endsection
