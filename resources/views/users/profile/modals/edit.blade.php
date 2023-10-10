<!-- Set Modal -->
<div class="modal fade" id="edit-intro" tabindex="-1" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog">
    <div class="modal-content modal-content-profile-edit">
        <div class="modal-header modal-header-profile">
        <h1 class="modal-title fs-5" id="exampleModalLabel">
                <form action="#" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <h2 class="mb-0 fw-bold" class="list-group-item">Update Profile</h2></h1>
        </div>

        <div class="modal-body modal-body-profile">
            <div class="row mb-3">

            <div class="col-4">
                <i class="fa-regular fa-circle-user d-block icon-md"></i>
            </div>

            <div class="col-auto align-self-end mb-3">
                <input type="file" name="avatar" id="avatar" class="form-control form-control-sm mt-1" aria-describedby="avatar-info">
            </div>
        </div>

        <div class="modal-profile-edit mb-4">
            <label for="name" class="form-label fw-bold mb-1">Name</label>
            <input type="text" name="name" id="name" value="" class="form-control" autofocus>
        </div>

        <div class="modal-profile-edit mb-4">
            <label for="user_name" class="form-label fw-bold mb-1">User Name</label>
            <input type="text" name="user_name" id="user_name" value="" class="form-control" autofocus>
        </div>

        <div class="modal-profile-edit mb-4">
            <label for="current_city" class="form-label fw-bold mb-1">Current City</label>
            <input type="text" name="current_city" id="current_city" value="" class="form-control" autofocus>
        </div>

        <div class="modal-profile-edit mb-4">
            <label for="genre" class="form-label fw-bold mb-1">Best Restaurant</label>
            <input type="text" name="genre" id="genre" value="" class="form-control" autofocus>
        </div>

        <div class="modal-profile-edit mb-4">
            <label for="genre" class="form-label fw-bold mb-0">Favorite Genre</label>
            <input type="text" name="genre" id="genre" value="" class="form-control" autofocus>
        </div>
        </div>
        <div class="modal-footer modal-footer-profile">
            <a href="{{ route('posts.show') }}" class="btn btn--green btn--cubic px-5">Cancel</a>
            <a href="{{ route('posts.show') }}" class="btn btn--yellow btn--cubic px-5">Save</a>
        </div><!-- /.modal-footer -->
    </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
