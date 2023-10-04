@extends('layouts.app')

@section('title', 'Show Post')
    
@section('content')

<div class="container show-post">
    <div class="row justify-content-center">
        <div class="col-9">
            <div class="row border shodow">
                <div class="col p-0">
                    <img src="https://images.pexels.com/photos/1435903/pexels-photo-1435903.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="italian" class="w-100">
                </div>

                <div class="col-4 px-0 bg-white post">
                    <div class="card border-0">
                        <div class="card-header bg-white py-3">
                            <div class="row align-items-center">
                                <div class="col">
                                    <i class="fa-solid fa-circle-user"></i> <a href="#" class="text-decoration-none text-post"><strong>Mary Johnson</strong></a>
                                </div>
                                <div class="col-auto text-end"> Following</div>
                            </div>
                        </div>
                        <div class="card-body body-padding">
                            <div class="row">
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
                            <div class="row align-items-center">
                                <div class="col">
                                    <button type="submit" class="btn btn-lg shadow-none ps-0"><i class="fa-solid fa-heart"></i></button>
                                    <button type="submit" class="btn btn-lg shadow-none ps-0"><i class="fa-solid fa-utensils"></i></button>
                                </div>
                                <div class="col text-end">
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
                            <div class="row">
                                <div class="col">
                                    I ate this pizza. It's delisiou!
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col">
                                    <hr>
                                    <form action="#" method="post">
                                        <div class="input-group py-2" >
                                            <textarea name="comment_body" rows="1" class="form-control form-control-sm" placeholder="Add a comment..."></textarea>
                                            <button type="submit" class="btn btn-post btn-sm">Post</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col">
                                    <a href="#" class="text-decoration-none text-post"><strong>Mike Smith</strong></a>
                                    &nbsp;
                                    <p class="d-inline fw-light">I want to go there!</p>
                                    <form action="#" method="post">
                                        <span class="small text-muted">Wed, Sep 01 2023</span>
                                        <button type="submit" class="border-0 bg-transparent text-danger p-0 small">Delete</button>
                                    </form>
                                </div>
                                
                                <div class="mt-0">
                                    <a href="#" class="text-decoration-none small">View all comments</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
        </div>  
    </div>

</div>

<div class="modal fade" id="delete-post" tabindex="-1" role="dialog" aria-labelledby="hiddenModal" aria-hidden="true">
    
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
@endsection


