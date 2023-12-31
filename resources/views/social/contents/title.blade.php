<div class="card-header bg-white">
    <div class="row align-items-center">
        <div class="col-auto">
            <a href="#" class="text-post">
                <i class="fa-solid fa-circle-user user-icon"></i>
            </a>
        </div>
        <div class="col ps-0">
            <a href="#" class="text-decoration-none text-post small">Mary Johnson</a>
        </div>
        <div class="col-auto text-end">
            <div class="dropdown">
                <button class="btn btn-sm shadow-none" data-bs-toggle="dropdown">
                    <i class="fa-solid fa-ellipsis"></i>
                </button>

                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">
                        <i class="fa-solid fa-pen-to-square text-post"></i> Edit
                    </a>
                    <button class="dropdown-item text-danger" data-bs-toggle="modal" data-bs-target="#delete-post">
                        <i class="fa-solid fa-trash-can"></i> Delete
                    </button>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="delete-post" tabindex="-1" role="dialog" aria-labelledby="hiddenModal"
aria-hidden="true">

    <div class="modal-dialog">
        <!--Content-->
        <div class="modal-content">

            <!--Header-->
            <div class="modal-header modal-danger">
                <p class="heading lead modal-title-activate">Delete Post</p>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <!--Body-->
            <div class="modal-body d-flex justify-content-center align-items-center flex-column">

                <div class="modal-body d-flex justify-content-center align-items-center flex-column">
                    <span><i class="fa-solid fa-trash-can fa-3x icon-red"></i></span>
                    <p class="pt-3 pr-2">Are you sure to want to delete this post?</p>
                </div>

                <div class="mt-3">
                    <img src="https://images.pexels.com/photos/1435903/pexels-photo-1435903.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="#" class="delete-post-img img-fluid">
                    <p class="mt-1 text-muted">description.......................</p>
                </div>

            </div>

            <!--Footer-->
            <div class="modal-footer d-flex justify-content-center border-0"> 
                <form action="#" method="post">
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    <button type="button" class="btn btn-outline-danger btn-sm" data-bs-dismiss="modal">Cancel</button>
                </form>
                
            </div>
            
        </div>
    </div>

</div>



