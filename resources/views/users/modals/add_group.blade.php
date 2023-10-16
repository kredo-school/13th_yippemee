<div class="modal fade" id="add-group" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header add-header bg-warning">
                <div class="row w-100 align-items-center">
                    <div class="col-11 mt-2">
                        <h1 style="color: #253c5c;">
                            <i class="fa-solid fa-square-plus fa-xl"></i>
                            Create a group
                        </h1>
                    </div>
                    <div class="col-1">
                        <a href="#" class="btn close-button mt-2" data-bs-dismiss="modal"><i class="fa-solid fa-xmark fa-2x" style="color: #253c5c"></i></a>
                    </div>
                </div>
            </div>


            <div class="modal-body">
                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="form-group form-group-left">
                        <label for="fileToUpload">
                            <div class="profile-pic" style="background-image: url('https://randomuser.me/api/portraits/med/men/65.jpg')">
                                <i class="fa-solid fa-camera"></i>
                                <span>Edit Image</span>
                            </div>
                        </label>
                        <input type="File" name="fileToUpload" id="fileToUpload">
                    </div>

                    <div class="form-group form-group-right">
                        <label for="name"></label>
                        <input type="text" placeholder="Name"  require>
                        <br>
                        <label for="restaurant"></label>
                        <input type="text" placeholder="Restaurant" >
                        <br>
                        <label for="members" require></label>
                        <input type="text" placeholder="Members" >
                        <br>
                        <label for="description"></label>
                        <textarea name="description" id="description" cols="60" rows="5" placeholder="What is this group for?"></textarea>
                    </div>
                </form>
            </div>

            <div class="modal-footer border-0">
                <a href="#" class="btn-create"><span>Create</span></a>
            </div>

        </div>
    </div>
</div>



