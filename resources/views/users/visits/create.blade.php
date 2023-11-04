@extends('layouts.app')

@section('title', 'Create Visit List')

@section('content')

<div class="container">
    <div class="justify-content-center mt-5 mb-5">
        <div class="col-8" style="margin-left: 216px">
            <h1 class="main-font mb-0 fw-light text-center mb-4">Make a Visit List</h1>
            <span class="bar bar-short mb-5"></span>

            <form action="/visits/store" method="post" name="visit" enctype="multipart/form-data">
                @csrf
                @method('post')

                <div class="me-5">
                    <div class="mb-2">
                        <label for="restaurantName" class="form-label fw-bold mb-0">Restaurant Name</label>
                        <input type="text" name="restaurantName" id="restaurantName" value="" class="form-control" autofocus class="form-control">
                    </div>

                    <div class="mb-2">
                        <label for="visit_date" class="form-label fw-bold mb-0 mt-3">When did you go ?</label>
                        <input type="date" name="date" id="visit_date" class="form-control" autofocus>
                    </div>

                     {{-- star_rating --}}
                     @if(!empty($visit->star_rating))
                                <div class="container">
                                    <div class="row">
                                       <div class="col mt-4">
                                             <p class="font-weight-bold ">Review</p>
                                             <div class="form-group row">
                                                {{-- <input type="hidden" name="visit_id" value="{{ $visit->id }}"> --}}
                                                <div class="col">
                                                   <div class="rated">
                                                    @for($i=1; $i<=$visit->star_rating; $i++)
                                                      {{-- <input type="radio" id="star{{$i}}" class="rate" name="rating" value="5"/> --}}
                                                      <label class="star-rating-complete" title="text">{{$i}} stars</label>
                                                    @endfor
                                                    </div>
                                                </div>
                                             </div>
                                             <div class="form-group row mt-4">
                                                <div class="col">
                                                    <p>{{ $visit->comments }}</p>
                                                </div>
                                             </div>
                                       </div>
                                    </div>
                                 </div>
                                @else
                                <div class="container">
                                    <div class="row">
                                       <div class="col mt-4">
                                          {{-- <form class="py-2 px-4" action="/visits/store" style="box-shadow: 0 0 10px 0 #ddd;" method="POST" autocomplete="off"> --}}
                                             @csrf
                                             <p class="font-weight-bold ">Review</p>
                                             <div class="form-group row">
                                                {{-- <input type="hidden" name="visit->id"> --}}
                                                <div class="col">
                                                   <div class="rate">
                                                      <input type="radio" id="star5" class="rate" name=" star_rating" value="5"/>
                                                      <label for="star5" title="text">5 stars</label>
                                                      <input type="radio" checked id="star4" class="rate" name=" star_rating" value="4"/>
                                                      <label for="star4" title="text">4 stars</label>
                                                      <input type="radio" id="star3" class="rate" name=" star_rating" value="3"/>
                                                      <label for="star3" title="text">3 stars</label>
                                                      <input type="radio" id="star2" class="rate" name=" star_rating" value="2">
                                                      <label for="star2" title="text">2 stars</label>
                                                      <input type="radio" id="star1" class="rate" name=" star_rating" value="1"/>
                                                      <label for="star1" title="text">1 star</label>
                                                   </div>
                                                </div>
                                             </div>
                                             {{-- <div class="mt-3 text-right">
                                                <button class="btn btn-sm py-2 px-3 btn-info">Submit
                                                </button>
                                             </div>
                                          </form> --}}
                                       </div>
                                    </div>
                                 </div>
                                 @endif


                    <div class="mb-2">
                        <label for="url" class="form-label fw-bold mb-0 mt-3">Web Site</label>
                        <input type="url" name="url" id="url" class="form-control" autofocus>
                    </div>

                    <div class="mb-2">
                        <label for="image" class="form-label fw-bold">Image</label>
                        <input type="file" name="image" id="image" class="form-control" aria-description="image-info">
                    </div>

                    <div class="mb-4">
                        <label for="description" class="form-label fw-bold mb-0 mt-3">Sharing your reviews about the restaurant</label>
                        <textarea name="description" id="description" rows="4" placeholder="Write some information about the restaurant" class="form-control"></textarea>
                    </div>

                    <button type="submit">post</button>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
