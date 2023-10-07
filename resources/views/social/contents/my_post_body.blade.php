{{-- 
<div class="container p-0 bg-white">
    <a href="{{ route('social.posts.show') }}">
        <img src="{{ asset('img/italianfood.png') }}" alt="pizza" class="w-100">
    </a>

    <div class="card-header border-0 header-padding">
        <div class="row mx-1">
            <div class="col-auto text-secondary small" style="opacity: 0.6;">
                <strong>at: </strong>
                &nbsp;
                <a href="#" class="text-decoration-none text-post">Kitchin ABC</a>
            </div>
    
            <div class="col-auto ms-auto">
                <div class="badge bg-genre text-wrap">
                    Italian
                </div>
            </div>
        </div>
    </div>

    <div class="card-body body-padding">
        <div class="row align-items-center mx-1">
            <div class="col text-start">
                <button type="submit" class="btn btn-lg shadow-none ps-0"><i class="fa-solid fa-heart"></i></button>
                <button type="submit" class="btn btn-lg shadow-none ps-0"><i class="fa-solid fa-utensils"></i></button>
            </div>
            <div class="col-auto text-end">
                <div class="dropdown">
                    <button class="btn btn-sm shadow-none" data-bs-toggle="dropdown">
                        <i class="fa-solid fa-ellipsis"></i>
                    </button>
    
                    <div class="dropdown-menu">
                        <a href="{{ route('social.posts.edit') }}" class="dropdown-item">
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
 --}}
