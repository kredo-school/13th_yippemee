@extends('layouts.app')

@section('title', 'Friends List')

@section('content')
<div class="friends">
    <div class="container my-5">
        <div class="row mb-3">
            <div class="col">
                <h1 class="friends_list_title">Friends List</h3>
            </div>
            <div class="col-3 ms-auto mb-auto">
                <form action="#">
                    <input type="search" name="search" class="form-control form-control-sm" placeholder="Search for friends">
                </form>
            </div>
        </div>

        <div class="row mb-3">

            <div class="col mb-3">
                <div class="admin-table">
                    <table class="table align-middle border">
                        <thead class="users-thead">
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Connection</th>
                                <th></th>
                            </tr>
                        </thead>
    
                        <tbody class="no-hover-effect">
                            <tr>
                                <td>
                                    <a href="#"><img src="{{ asset('img/woman01.jpg') }}" alt="woman" class="d-block mu-auto profile-picture"></a>
                                </td>
                                <td>
                                    <a href="#" class="text-decoration-none text-dark">Mary Smith</a>
                                </td>
                                <td>john</td>
                                <td>abc@email.com</td>
                                <td>                      
                                    <i class="fa-solid fa-user-group text-success"></i>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm" data-bs-toggle="dropdown">
                                            <i class="fa-solid fa-bars"></i>
                                        </button>
    
                                        <div class="dropdown-menu menu-hover">
                                            <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#connectModal">
                                                <i class="fa-solid fa-users text-success"></i> Connect
                                            </a>
                                            
                                            <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#disconnectModal">
                                                <i class="fa-solid fa-users-slash text-danger"></i> Disconnect
                                            </a>
                                        </div>
                                    </div>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa-solid fa-circle-user d-block admin-users-icon"></i>
                                </td>
                                <td>
                                    <a href="#" class="text-decoration-none text-dark">  Name  </a>
                                </td>
                                <td>  Username  </td>
                                <td>  e-mail  </td>
                                <td>                      
                                    {{-- <i class="fa-solid fa-user-group text-success"></i> --}}
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm" data-bs-toggle="dropdown">
                                            <i class="fa-solid fa-bars"></i>
                                        </button>
                                        
                                        <div class="dropdown-menu menu-hover">
                                            <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#connectModal">
                                                <i class="fa-solid fa-users text-success"></i> Connect
                                            </a>
                                            
                                            <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#disconnectModal">
                                                <i class="fa-solid fa-users-slash text-danger"></i> Disconnect
                                            </a>
                                        </div>
                                    </div>
                                    
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
    @include('friends.modal.connect_modal')

</div>
    
@endsection
