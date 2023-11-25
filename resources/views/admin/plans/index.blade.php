@extends('layouts.app')

@section('title', 'Admin: Plans')

@section('content')
<div class="admin">
    <div class="container my-5 margin-container">
        <div class="row mb-2">
            <div class="col-3">
            </div>
            <div class="col">
                <h2 class="admin_friends_list_title">Plans List</h2>
            </div>
            <div class="col-3 ms-auto mb-auto">
                <form action="#" class="search-form">
                    <label class="form-control-sm">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" name="search"  placeholder="Search for plan">
                    </label>
                </form>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-3 mb-auto">
                @include('admin.left_side_menu') 
            </div>

            <div class="col-9 mb-3">
                <div class="admin-table">
                    <table class="table align-middle bg-white border">
                        <thead class="thead-plans">
                            <tr>
                                <th>plan ID</th>
                                <th>plan date</th>
                                <th>owner</th>
                                <th>Created At</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="no-hover-effect">
                            <tr>
                                <td>10</td>
                                <td>2023:09:01</td>
                                <td>Mike Smith</td>
                                <td>2023:08:15</td>
                                <td><i class="fa-solid fa-calendar text-success"></i>&nbsp; Activate</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm" data-bs-toggle="dropdown">
                                            <i class="fa-solid fa-calendar text-secondary"></i>
                                        </button>
        
                                        <div class="dropdown-menu menu-hover">
                                            <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#activateModal">
                                                <i class="fa-solid fa-calendar text-success"></i>  Activate
                                            </a>
                                            
                                            <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deactivateModal">
                                                <i class="fa-solid fa-calendar-xmark text-danger"></i></i>  Deactivate
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
    @include('admin.plans.modal.status.activate')
    @include('admin.plans.modal.status.deactivate')
</div>
    
@endsection
