
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


            <div class="modal-body" id="add-body">
                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="row" id="form-group">
                        <div class="col-5" id="form-group-left">
                            <label for="fileToUpload">
                                <div class="profile-pic">
                                    
                                    <i class="fa-solid fa-camera"></i>
                                    <span>Add Image</span>
                                </div>
                            </label>
                            <input type="file" name="fileToUpload" id="fileToUpload">
                        </div>
                        <div class="col-6" id="form-group-right">
                            <label for="name"></label>
                            <input type="text" placeholder="Name"  require>
                            <br>
                            <label for="restaurant"></label>
                            <input type="text" placeholder="Restaurant">
                            <br>
                            <label for="members" require></label>
                            <input type="text" placeholder="Members">
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer border-0">
                <a href="#" class="btn btn-create">Create</a>
            </div>

        </div>
    </div>
</div>



