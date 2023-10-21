@extends('layouts.app')

@section('title', 'Group list')

@section('content')

<div class="container">
    <div class="container my-4 margin-container bg-white">
        <div class="row grouplist-title">
            <div class="col d-flex flex-column align-items-start" hidden>
            </div>
            <div class="col  page-title">
                <h2 class="text-center">Decide by place</h2>
                <span class="bar bar-short mt-4"></span>
                <h3 class="text-center pt-4 mb-0"><span>Group list</span></h3>
            </div>
            <div class="col d-flex flex-column align-items-end pe-5">
                <button type="button" class="btn btn-add" id="btn-add" data-bs-toggle="modal" data-bs-target="#add-group">
                    <i class="fa-solid fa-square-plus fa-lg" style="color: #253c5c;"></i> New group
                </button>
            </div>
        </div>



        <div class="row mt-5">
            {{-- @foreach --}}
            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                <div class="group">
                    <div class="card" id="group-card">
                        <div class="card-header group-header bg-white" id="group-header">
                            <a href="{{route('private_calendar')}}">
                                <img src="/images/people1.jpg" alt="people" class="group-pic">
                            </a>

                        </div>
                        <div class="card-body bg-white d-flex" id="group-body">
                            <div class="group-div">
                                <a href="{{route('private_calendar')}}" class="text-decoration-none" style="color:#253c5c;">
                                    <h5>Family (group name)</h5>
                                </a>
                                <p><i class="fa-solid fa-location-dot" style="color: #253c5c;"></i> Restaurant's name</p>
                            </div>
                            <div class="edit-div d-flex">
                                <div class="col-2 ps-5">
                                    <div class="btn-group-drop">
                                        <button class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-solid fa-ellipsis-vertical fa-2x" style="color: #253c5c;"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" class="dropdown-item item-detail">Details</a></li>
                                            <li><button type="button" class="dropdown-item item-edit" data-bs-toggle="modal" data-bs-target="#group-edit">Edit </button></li>
                                            <li><button type="button" class="dropdown-item item-delete" data-bs-toggle="modal" data-bs-target="#group-delete">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                <div class="group">
                    <div class="card" id="group-card">
                        <div class="card-header group-header bg-white" id="group-header">
                            <img src="/images/people2.jpg" alt="people" class="group-pic">
                        </div>
                        <div class="card-body bg-white d-flex" id="group-body">
                            <div class="group-div">
                                <h5>Colleagues</h5>
                                <p><i class="fa-solid fa-location-dot" style="color: #253c5c;"></i> Restaurant's name</p>
                            </div>
                            <div class="edit-div d-flex">
                                <div class="col-2 ps-5">
                                    <div class="btn-group-drop">
                                        <button class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-solid fa-ellipsis-vertical fa-2x" style="color: #253c5c;"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" class="dropdown-item item-detail">Details</a></li>
                                            <li><button type="button" class="dropdown-item item-edit" data-bs-toggle="modal" data-bs-target="#group-edit">Edit </button></li>
                                            <li><button type="button" class="dropdown-item item-delete" data-bs-toggle="modal" data-bs-target="#group-delete">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                <div class="group">
                    <div class="card" id="group-card">
                        <div class="card-header group-header bg-white" id="group-header">
                            <img src="/images/people3.jpg" alt="people" class="group-pic">
                        </div>
                        <div class="card-body bg-white d-flex" id="group-body">
                            <div class="group-div">
                                <h5>Dog lover</h5>
                                <p><i class="fa-solid fa-location-dot" style="color: #253c5c;"></i> Restaurant's name</p>
                            </div>
                            <div class="edit-div d-flex">
                                <div class="col-2 ps-5">
                                    <div class="btn-group-drop">
                                        <button class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-solid fa-ellipsis-vertical fa-2x" style="color: #253c5c;"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" class="dropdown-item item-detail">Details</a></li>
                                            <li><button type="button" class="dropdown-item item-edit" data-bs-toggle="modal" data-bs-target="#group-edit">Edit </button></li>
                                            <li><button type="button" class="dropdown-item item-delete" data-bs-toggle="modal" data-bs-target="#group-delete">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                <div class="group">
                    <div class="card" id="group-card">
                        <div class="card-header group-header bg-white" id="group-header">
                            <img src="https://randomuser.me/api/portraits/med/men/65.jpg" alt="people" class="group-pic">
                        </div>
                        <div class="card-body bg-white d-flex" id="group-body">
                            <div class="group-div">
                                <h5>Boys</h5>
                                <p><i class="fa-solid fa-location-dot" style="color: #253c5c;"></i> Restaurant's name</p>
                            </div>
                            <div class="edit-div d-flex">
                                <div class="col-2 ps-5">
                                    <div class="btn-group-drop">
                                        <button class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-solid fa-ellipsis-vertical fa-2x" style="color: #253c5c;"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" class="dropdown-item item-detail">Details</a></li>
                                            <li><button type="button" class="dropdown-item item-edit" data-bs-toggle="modal" data-bs-target="#group-edit">Edit </button></li>
                                            <li><button type="button" class="dropdown-item item-delete" data-bs-toggle="modal" data-bs-target="#group-delete">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- @foreach --}}
            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                <div class="group">
                    <div class="card" id="group-card">
                        <div class="card-header group-header bg-white" id="group-header">
                            <img src="/images/people1.jpg" alt="people" class="group-pic">
                        </div>
                        <div class="card-body bg-white d-flex" id="group-body">
                            <div class="group-div">
                                <h5>Family (group name)</h5>
                                <p><i class="fa-solid fa-location-dot" style="color: #253c5c;"></i> Restaurant's name</p>
                            </div>
                            <div class="edit-div d-flex">
                                <div class="col-2 ps-5">
                                    <div class="btn-group-drop">
                                        <button class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-solid fa-ellipsis-vertical fa-2x" style="color: #253c5c;"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" class="dropdown-item item-detail">Details</a></li>
                                            <li><button type="button" class="dropdown-item item-edit" data-bs-toggle="modal" data-bs-target="#group-edit">Edit </button></li>
                                            <li><button type="button" class="dropdown-item item-delete" data-bs-toggle="modal" data-bs-target="#group-delete">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                <div class="group">
                    <div class="card" id="group-card">
                        <div class="card-header group-header bg-white" id="group-header">
                            <img src="/images/people2.jpg" alt="people" class="group-pic">
                        </div>
                        <div class="card-body bg-white d-flex" id="group-body">
                            <div class="group-div">
                                <h5>Colleagues</h5>
                                <p><i class="fa-solid fa-location-dot" style="color: #253c5c;"></i> Restaurant's name</p>
                            </div>
                            <div class="edit-div d-flex">
                                <div class="col-2 ps-5">
                                    <div class="btn-group-drop">
                                        <button class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-solid fa-ellipsis-vertical fa-2x" style="color: #253c5c;"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" class="dropdown-item item-detail">Details</a></li>
                                            <li><button type="button" class="dropdown-item item-edit" data-bs-toggle="modal" data-bs-target="#group-edit">Edit </button></li>
                                            <li><button type="button" class="dropdown-item item-delete" data-bs-toggle="modal" data-bs-target="#group-delete">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                <div class="group">
                    <div class="card" id="group-card">
                        <div class="card-header group-header bg-white" id="group-header">
                            <img src="/images/people3.jpg" alt="people" class="group-pic">
                        </div>
                        <div class="card-body bg-white d-flex" id="group-body">
                            <div class="group-div">
                                <h5>Dog lover</h5>
                                <p><i class="fa-solid fa-location-dot" style="color: #253c5c;"></i> Restaurant's name</p>
                            </div>
                            <div class="edit-div d-flex">
                                <div class="col-2 ps-5">
                                    <div class="btn-group-drop">
                                        <button class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-solid fa-ellipsis-vertical fa-2x" style="color: #253c5c;"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" class="dropdown-item item-detail">Details</a></li>
                                            <li><button type="button" class="dropdown-item item-edit" data-bs-toggle="modal" data-bs-target="#group-edit">Edit </button></li>
                                            <li><button type="button" class="dropdown-item item-delete" data-bs-toggle="modal" data-bs-target="#group-delete">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                <div class="group">
                    <div class="card" id="group-card">
                        <div class="card-header group-header bg-white" id="group-header">
                            <img src="https://randomuser.me/api/portraits/med/men/65.jpg" alt="people" class="group-pic">
                        </div>
                        <div class="card-body bg-white d-flex" id="group-body">
                            <div class="group-div">
                                <h5>Boys</h5>
                                <p><i class="fa-solid fa-location-dot" style="color: #253c5c;"></i> Restaurant's name</p>
                            </div>
                            <div class="edit-div d-flex">
                                <div class="col-2 ps-5">
                                    <div class="btn-group-drop">
                                        <button class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-solid fa-ellipsis-vertical fa-2x" style="color: #253c5c;"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" class="dropdown-item item-detail">Details</a></li>
                                            <li><button type="button" class="dropdown-item item-edit" data-bs-toggle="modal" data-bs-target="#group-edit">Edit </button></li>
                                            <li><button type="button" class="dropdown-item item-delete" data-bs-toggle="modal" data-bs-target="#group-delete">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('users.modals.group-delete')
@endsection
