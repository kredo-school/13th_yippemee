@extends('layouts.app')

@section('title', 'Group list')

@section('content')


    <div class="container my-4 margin-container bg-white">
        <div class="row grouplist-title">
            <div class="col-4 d-flex flex-column align-items-start" hidden>
            </div>
            <div class="col-4  page-title">
                <h2 class="text-center">Decide by place</h2>
                <span class="bar bar-short mt-4"></span>
                <h3 class="text-center pt-4 mb-0"><span>Group list</span></h3>
            </div>
            <div class="col-4 d-flex flex-column align-items-end pe-5">
                <button type="button" class="btn btn-add" id="btn-add" data-bs-toggle="modal" data-bs-target="#add-group">
                    <i class="fa-solid fa-square-plus fa-lg" style="color: #253c5c;"></i> New group
                </button>
            </div>
        </div>

        @if ($groups->isNotEmpty())
            <div class="row mt-5">
                @foreach ($groups as $index => $group)
                    <div class="col-md-3">
                        <div class="card" id="group-card">
                            <div class="card-header group-header bg-white" id="group-header">
                                <a href="{{route('private_calendar')}}">
                                    <img src=" {{ $group->image }}" alt=" {{ $group->name }}" class="group-pic" name="image" id="image">
                                </a>
                            </div>
                            <div class="card-body bg-white d-flex" id="group-body">
                                <div class="row w-100">
                                   <div class="col-10 group-div">
                                        <a href="{{route('private_calendar')}}" class="text-decoration-none" style="color:#253c5c;">
                                            <h5>{{ $group->name }}</h5>
                                        </a>
                                        <p><i class="fa-solid fa-location-dot ps-2" style="color: #253c5c;"></i> {{ $group->restaurant_id }}</p>
                                    </div>


                                    <div class="col-2 edit-div">
                                        <div class="btn-group-drop">
                                            <button class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical fa-2x" style="color: #253c5c;"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <button type="button" class="dropdown-item item-member" data-bs-toggle="modal" data-bs-target="#group-member">Members</button>
                                                <button type="button" class="dropdown-item item-edit" data-bs-toggle="modal" data-bs-target="#group-edit">Edit </button>
                                                <button type="button" class="dropdown-item item-delete" data-bs-toggle="modal" data-bs-target="#group-delete-{{ $group->id }}">Delete</button>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if(($index + 1) % 4 == 0)
                        </div>
                        <div class="row mt-3">
                    @endif
                @endforeach
            </div>
        @else
            <h4 class="text-muted text-center mt-5">No Groups Yet.</h4>
        @endif
    </div>


@include('users.modals.add_group')
@include('users.modals.group_member')
@include('users.modals.group_edit')
@include('users.modals.group_delete')
@endsection
