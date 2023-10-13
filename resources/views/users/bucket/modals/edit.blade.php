<div class="modal fade" id="edit-bucket" tabindex="-1" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog">
        <div class="modal-content bucket-edit-modal">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">
                    <form action="#" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <h3 class="title-visit fw-bold">Edit Bucket List</h3>
                </h1>
            </div>

            <div class="modal-body">
                <div class="row mb-5 mt-2 bucket-edit-modal-pic">
                    <div class="col-auto ms-5 ps-5">
                        <div class="drag-file-area-visit-edit">
                            <span class="material-icons-outlined upload-icon"> file_upload </span>
                            <h5 class="dynamic-message"> Drag & drop any file here </h5>
                            <label class="label"> or browse file from device<span class="browse-files"> <input type="file" class="default-file-input"/></span></label>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-2 mb-4">
                    <label for="restaurant_name" class="form-label fw-bold mb-1 ps-0">Restaurant Name</label>
                    <input type="text" name="restaurant_name" id="restaurant_name" value="" class="form-control form-size-bucket" autofocus>
                </div>

                <div class="text-center form-label fw-bold mt-2 mb-1">Genre</div>
                    <div class="genre-center d-flex align-items-center posts-input">
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
                    </div>

                <div class="text-center mt-4 mb-4">
                    <label for="genre" class="form-label fw-bold mb-1">Hours of operation</label>
                    <input type="text" name="genre" id="genre" value="" class="form-control form-size-bucket" autofocus>
                </div>

                <div class="text-center mb-4">
                    <label for="url" class="form-label fw-bold mb-0">Web Site</label>
                    <input type="url" name="url" id="url" value="" class="form-control form-size-bucket" autofocus>
                </div>

                <div class="text-center mb-4">
                    <label for="additional" class="form-label fw-bold mb-0">Additional</label>
                    <textarea name="additional" id="additional" rows="5" placeholder="Write some information about the restaurant" class="form-control  form-size-bucket"></textarea>
                </div>
            </div>

            <div class="modal-footer modal-footer-bucket">
                <a href="{{ route('bucket.show') }}" class="btn btn--green btn--cubic px-5">Cancel</a>
                <a href="{{ route('bucket.show') }}" class="btn btn--yellow btn--cubic px-5">Save</a>
            </div><!-- /.modal-footer -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
