@extends('layouts.app')

@section('title', 'Edit Visit List')

@section('content')

<div class="container">
    <div class="justify-content-center mt-5 mb-5">
        <div class="col-8" style="margin-left: 216px">
            <h1 class="main-font mb-0 fw-light text-center mb-4">Edit a Visit List</h1>
            <span class="bar bar-short mb-5"></span>

            <form action="{{ route('visits.update',$visit->id ) }}" method="post" name="visit" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                {{-- info --}}
                <div class="me-5">
                    <div class="mb-2">
                        <label for="restaurantName" class="form-label fw-bold mb-0 mt-3">restaurant Name</label>
                        <input type="text" name="restaurantName" id="restaurantName" value="{{ old('restaurantName', $visit->restaurantName) }}" class="form-control" autofocus>
                        @error('restaurantName')
                        <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-2">
                        <label for="" class="form-label fw-bold mb-0 mt-3">When did you go?</label>
                        <input type="date" name="hoursOption" id="hoursOption" value="{{ old('hoursOption', $visit->hoursOption) }}" class="form-control" autofocus>
                    </div>

                    {{-- star_rating --}}
                    <div class="mb-2">
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
                        </div>

                    <div class="mb-2">
                        <label for="url" class="form-label fw-bold mb-0 mt-3">Web Site</label>
                        <input type="url" name="url" id="url" value="{{ old('url', $visit->url) }}" class="form-control" autofocus>
                    </div>

                    <div class="row mb-2">
                        <div class="col-6">
                        <label for="image" class="form-label fw-bold">Image</label>
                        <img src="{{ $visit->image }}" alt="{{ $visit->id }}" class="img-thumbnail w-100">
                        <input type="file" name="image" id="image" class="form-control" aria-description="image-info">
                        </div>
                        @error('image')
                        <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="description" class="form-label fw-bold mb-0 mt-3">Sharing your reviews about the restaurant</label>
                        <textarea name="description" id="description" rows="4" placeholder="Write some information about the restaurant" class="form-control">{{ old('description', $visit->description) }}</textarea>
                    </div>

                    <button type="submit btn-warning">Save</button>
                    {{-- <a href="{{ route('visit.show') }}" onclick="document.visit.submit();" class="btn btn--yellow btn--cubic px-5">Save</a>
                    <a href="{{ route('visit.show') }}" class="btn btn--green btn--cubic px-5">Cancel</a></button> --}}

                </div>
            </form>
        </div>
    </div>

@endsection

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>

<style>
     .rate {
         float: left;
         height: 46px;
         padding: 0 10px;
         }
         .rate:not(:checked) > input {
         position:absolute;
         display: none;
         }
         .rate:not(:checked) > label {
         float:right;
         width:1em;
         overflow:hidden;
         white-space:nowrap;
         cursor:pointer;
         font-size:30px;
         color:#ccc;
         }
         .rated:not(:checked) > label {
         float:right;
         width:1em;
         overflow:hidden;
         white-space:nowrap;
         cursor:pointer;
         font-size:30px;
         color:#ccc;
         }
         .rate:not(:checked) > label:before {
         content: '★ ';
         }
         .rate > input:checked ~ label {
         color: #ffc700;
         }
         .rate:not(:checked) > label:hover,
         .rate:not(:checked) > label:hover ~ label {
         color: #deb217;
         }
         .rate > input:checked + label:hover,
         .rate > input:checked + label:hover ~ label,
         .rate > input:checked ~ label:hover,
         .rate > input:checked ~ label:hover ~ label,
         .rate > label:hover ~ input:checked ~ label {
         color: #c59b08;
         }
         .star-rating-complete{
            color: #c59b08;
         }
         .rating-container .form-control:hover, .rating-container .form-control:focus{
         background: #fff;
         border: 1px solid #ced4da;
         }
         .rating-container textarea:focus, .rating-container input:focus {
         color: #000;
         }
         .rated {
         float: left;
         height: 46px;
         padding: 0 10px;
         }
         .rated:not(:checked) > input {
         position:absolute;
         display: none;
         }
         .rated:not(:checked) > label {
         float:right;
         width:1em;
         overflow:hidden;
         white-space:nowrap;
         cursor:pointer;
         font-size:30px;
         color:#ffc700;
         }
         .rated:not(:checked) > label:before {
         content: '★ ';
         }
         .rated > input:checked ~ label {
         color: #ffc700;
         }
         .rated:not(:checked) > label:hover,
         .rated:not(:checked) > label:hover ~ label {
         color: #deb217;
         }
         .rated > input:checked + label:hover,
         .rated > input:checked + label:hover ~ label,
         .rated > input:checked ~ label:hover,
         .rated > input:checked ~ label:hover ~ label,
         .rated > label:hover ~ input:checked ~ label {
         color: #c59b08;
         }
</style>
