
<div class="modal fade" id="add-group" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" id="add-content">
            <div class="modal-header add-header">
                <div class="row w-100 align-items-center">
                    <div class="col-11 mt-2">
                        <h1 style="color: #253c5c;">
                            <i class="fa-regular fa-square-plus fa-xl"></i>
                            Create a group
                        </h1>
                    </div>
                    <div class="col-1">
                        <a href="#" class="btn close-button mt-2" data-bs-dismiss="modal"><i class="fa-solid fa-xmark fa-2x" style="color: #253c5c"></i></a>
                    </div>
                </div>
            </div>

            <form action="{{ route('group.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-body" id="add-body">
                <div class="row" id="form-group">
                    <div class="col-5" id="form-group-left">
                        <label for="image">
                            <div class="profile-pic">
                                <i class="fa-solid fa-camera"></i>
                                <span>Add Image</span>
                            </div>
                        </label>
                        <input type="file" name="image" id="image" class="form-control" aria-describedby="image-info">
                    </div>
                    <div class="col-6" id="form-group-right">
                        <label for="name" class="form-label"></label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                        <br>
                        <label for="restaurant_id" class="form-label"></label>
                        <input type="text" name="restaurant_id" id="restaurant_id" class="form-control" placeholder="Restaurant">
                        <br>
                        <label for="member_id" class="form-label"></label>
                        <input type="text" name="member_id" id="member_id" class="form-control" placeholder="Members">
                    </div>
                </div>
            </div>

            <div class="modal-footer border-0">
                <button type="submit" class="btn btn-create">Create</button>
            </div>
            </form>
        </div>
    </div>
</div>



