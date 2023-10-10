<!-- Set Modal -->
<div class="modal fade" id="edit-visits" tabindex="-1" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog">
        <div class="modal-content visit-edit-modal">
            <div class="modal-header visit-modal-title">
                <h1 class="modal-title fs-5" id="exampleModalLabel">
                        <form action="#" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <h2 class="h3 mb-0 fw-bold" class="list-group-item">Edit visit</h2></h1>
            </div>

            <div class="modal-body">
                <div class="row mb-4 mt-3 visit-pic">
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
            <label for="star" class="form-label fw-bold mb-1">How would you rate your experience ?</label>

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

                <div class="mb-4 text-center">
                    <label for="introduction" class="form-label fw-bold mb-1">Sharing your reviews about the restaurant</label>
                    <textarea name="introduction" id="introduction" rows="5" placeholder="Write some comments about the restaurant" class="form-control form-size-visit">{{ old('introduction') }}</textarea>
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
