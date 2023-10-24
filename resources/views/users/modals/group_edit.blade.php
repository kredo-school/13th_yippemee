<div class="modal fade" id="group-edit" aria-hidden="true">
    <div class="modal-dialog edit-dialog modal-xl">
        <div class="modal-content edit-content">
            <div class="modal-header edit-header w-100">
                <div class="row w-100" >
                    <h1 class="mt-2 ms-3"><i class="fa-regular fa-pen-to-square"></i> Edit the group</h1>
                </div>
            </div>
            <div class="modal-body edit-body">
                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="row" id="form-group">
                        <div class="col-5" id="form-group-left">
                            <label for="fileToUpload">
                                <div class="profile-pic-edit" style="background-image: url('https://randomuser.me/api/portraits/med/men/65.jpg')">
                                    <i class="fa-solid fa-camera"></i>
                                    <span>Edit Image</span>
                                </div>
                            </label>
                            <input type="file" name="fileToUpload" id="fileToUpload">
                        </div>
                        <div class="col-6 mt-3" id="form-group-right">
                            <label for="name"></label>
                            <input type="text" placeholder="Name"  require>
                            <br>
                            <label for="restaurant"></label>
                            <input type="text" placeholder="Restaurant">
                            <br>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer edit-footer bg-white border-0 mb-2">
                <form action="#" method="post">
                    <a href="{{route('group_list')}}" class="btn calncel-btn" data-bs-dismiss="modal">Cancel</a>
                    <button type="submit" class="btn g-save-btn float-end">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
