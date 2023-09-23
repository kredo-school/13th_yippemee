
<!-- Set Modal -->
<div class="modal fade" id="edit-intro" tabindex="-1" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><div class="row justify-content-center">
            <div class="col-6">
                <form action="#" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <h2 class="h3 mb-0 fw-light text-center" class="list-group-item">Update Profile</h2></h1>
        </div>
        <div class="modal-body">
        <p><div class="row mb-3">

            <div class="col-4">
                <i class="fa-regular fa-circle-user d-block text-center icon-md"></i>
            </div>


            <div class="col-auto align-self-end">
                <input type="file" name="avatar" id="avatar" class="form-control form-control-sm mt-1" aria-describedby="avatar-info">
                <div class="form-text" id="avatar-info">
                    Acceptable formats: jpeg, jpg, png, gif only<br>
                    Max file size is 1048kb
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label fw-bold mb-0">Name</label>
            <input type="text" name="name" id="name" value="" class="form-control" autofocus>
        </div>

        <div class="mb-3">
            <label for="user_name" class="form-label fw-bold mb-0">User Name</label>
            <input type="text" name="user_name" id="user_name" value="" class="form-control" autofocus>
        </div>

        <div class="mb-3">
            <label for="current_city" class="form-label fw-bold mb-0">Current City</label>
            <input type="text" name="current_city" id="current_city" value="" class="form-control" autofocus>
        </div>

        <div class="mb-3">
            <label for="restaurant" class="form-label fw-bold mb-0">Best Restaurant</label>
            <input type="text" name="restaurant" id="restaurant" value="" class="form-control" autofocus>
        </div>

        <div class="mb-3">
            <label for="genre" class="form-label fw-bold mb-0">Favorite Genre</label>
            <input type="text" name="genre" id="genre" value="" class="form-control" autofocus>
        </div>

        <div class="mb-3">
            <label for="introduction" class="form-label fw-bold mb-0">About you</label>
            <textarea name="introduction" id="introduction" rows="3" placeholder="Write some details about yourself" class="form-control"></textarea>
        </div></p>
        </div>
        <div class="modal-footer">
            <a href="#" class="btn btn--green btn--cubic px-5">Cancel</a>
            <a href="#" class="btn btn--yellow btn--cubic px-5">Save</a>
        </div><!-- /.modal-footer -->
    </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
