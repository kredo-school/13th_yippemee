<!-- Set Modal -->
<div class="modal fade" id="edit-visits" tabindex="-1" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">
                        <form action="#" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <h2 class="h3 mb-0 fw-light text-center" class="list-group-item">Edit visit</h2></h1>
            </div>

            <div class="modal-body">
                <div class="row mb-3 ms-4">
                    <div class="col-auto text-center">
                        <div class="drag-file-area-visit-edit">
                            <span class="material-icons-outlined upload-icon"> file_upload </span>
                            <h5 class="dynamic-message"> Drag & drop any file here </h5>
                            <label class="label"> or browse file from device<span class="browse-files"> <input type="file" class="default-file-input"/></span> </label>
                        </div>
                    </div>
                </div>

                <div class="mt-2 mb-3">
                    <label for="restaurant_name" class="form-label fw-bold mb-0">Restaurant Name</label>
                    <input type="text" name="restaurant_name" id="restaurant_name" value="" class="form-control" autofocus>
                </div>

                <div class="mb-3">
                    <label for="date" class="form-label fw-bold mb-0">Date</label>
                    <input type="date" name="user_name" id="date" value="" class="form-control" autofocus>
                </div>

                <div class="mb-3 second-font">
                    <label for="review" class="form-label fw-bold mb-0">How would you rate your experience ?</label>
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
            </div>

            <div class="modal-footer">
                <a href="{{ route('visits.show') }}" class="btn btn--green btn--cubic px-5">Cancel</a>
                <a href="{{ route('visits.show') }}" class="btn btn--yellow btn--cubic px-5">Save</a>
            </div><!-- /.modal-footer -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
