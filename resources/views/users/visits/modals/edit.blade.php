<!-- Set Modal -->
<div class="modal fade" id="edit-visits" tabindex="-1" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog">
        <div class="modal-content visit-edit-modal">
            <div class="modal-header visit-modal-title">
                <h1 class="modal-title fs-5" id="exampleModalLabel">
                    <form action="#" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <h2 class="h3 mb-0 fw-bold mt-3" class="list-group-item">Edit visit</h2>
                    <span class="bar bar-short mt-4"></span>
                </h1>
            </div>

            <div class="modal-body">
                <div class="row mb-1 mt-3 visit-pic">
                    <div class="col-auto">
                        <div class="drag-file-area-visit-edit">
                            <span class="material-icons-outlined upload-icon"> file_upload </span>
                            <h5 class="dynamic-message"> Drag & drop any file here </h5>
                            <label class="label"> or browse file from device<span class="browse-files"> <input type="file" class="default-file-input"/></span> </label>
                        </div>
                    </div>
                </div>

                <div class="mt-2 mb-4 text-center">
                    <label for="restaurant_name" class="form-label fw-bold mb-1">Restaurant Name</label>
                    <input type="text" name="restaurant_name" id="restaurant_name" value="" class="form-control form-size-visit" autofocus>
                </div>

                <div class="mb-4 text-center">
                    <label for="date_visit" class="form-label fw-bold mb-1">When did you go ?</label>
                    <input type="date" name="date_visit" id="date_visit" value="" class="form-control form-size-visit" autofocus>
                </div>



            {{-- raiting --}}
        <div class="mb-4 text-center">
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

                </div>

                <div class="mb-2 text-center">
                    <label for="introduction" class="form-label fw-bold mb-1">Sharing your reviews about the restaurant</label>
                    <textarea name="introduction" id="introduction" rows="7" class="form-control form-size-visit">{{ old('introduction') }}</textarea>
                    {{-- Error --}}
                    @error('description')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="modal-footer modal-footer-visit">
                <a href="{{ route('visits.show') }}" class="btn btn--green btn--cubic px-5">Cancel</a>
                <a href="{{ route('visits.show') }}" class="btn btn--yellow btn--cubic px-5">Save</a>
            </div><!-- /.modal-footer -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@if(!empty($value->star_rating))
                                <div class="container">
                                    <div class="row">
                                       <div class="col mt-4">
                                             <p class="font-weight-bold ">Review</p>
                                             <div class="form-group row">
                                                <input type="hidden" name="booking_id" value="{{ $value->id }}">
                                                <div class="col">
                                                   <div class="rated">
                                                    @for($i=1; $i<=$value->star_rating; $i++)
                                                      {{-- <input type="radio" id="star{{$i}}" class="rate" name="rating" value="5"/> --}}
                                                      <label class="star-rating-complete" title="text">{{$i}} stars</label>
                                                    @endfor
                                                    </div>
                                                </div>
                                             </div>
                                             <div class="form-group row mt-4">
                                                <div class="col">
                                                    <p>{{ $value->comments }}</p>
                                                </div>
                                             </div>
                                       </div>
                                    </div>
                                 </div>
                                @else
                                <div class="container">
                                    <div class="row">
                                       <div class="col mt-4">
                                          <form class="py-2 px-4" action="{{route('admin.review.store')}}" style="box-shadow: 0 0 10px 0 #ddd;" method="POST" autocomplete="off">
                                             @csrf
                                             <p class="font-weight-bold ">Review</p>
                                             <div class="form-group row">
                                                <input type="hidden" name="booking_id" value="{{ $value->id }}">
                                                <div class="col">
                                                   <div class="rate">
                                                      <input type="radio" id="star5" class="rate" name="rating" value="5"/>
                                                      <label for="star5" title="text">5 stars</label>
                                                      <input type="radio" checked id="star4" class="rate" name="rating" value="4"/>
                                                      <label for="star4" title="text">4 stars</label>
                                                      <input type="radio" id="star3" class="rate" name="rating" value="3"/>
                                                      <label for="star3" title="text">3 stars</label>
                                                      <input type="radio" id="star2" class="rate" name="rating" value="2">
                                                      <label for="star2" title="text">2 stars</label>
                                                      <input type="radio" id="star1" class="rate" name="rating" value="1"/>
                                                      <label for="star1" title="text">1 star</label>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="form-group row mt-4">
                                                <div class="col">
                                                   <textarea class="form-control" name="comment" rows="6 " placeholder="Comment" maxlength="200"></textarea>
                                                </div>
                                             </div>
                                             <div class="mt-3 text-right">
                                                <button class="btn btn-sm py-2 px-3 btn-info">Submit
                                                </button>
                                             </div>
                                          </form>
                                       </div>
                                    </div>
                                 </div>
                                 @endif
