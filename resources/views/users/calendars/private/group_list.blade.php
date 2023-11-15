@extends('layouts.app')

@section('title', 'Group list')

@section('content')
    <div class="container my-4 margin-container">

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
            <div class="row mt-5 bg-white">
                @foreach ($groups as $group)
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                        <div class="card" id="group-card">
                            <div class="card-header group-header bg-white" id="group-header">
                                <a href="{{ route('private_calendar') }}">
                                    <img src="{{ asset('storage/images/' . $group->image) }}" alt=" {{ $group->name }}" class="group-pic">
                                </a>
                            </div>
                            <div class="card-body bg-white d-flex" id="group-body">
                                <div class="row w-100">
                                    <div class="col-10 group-div">
                                        <a href="{{ route('private_calendar') }}" class="text-decoration-none"
                                            style="color:#253c5c;">
                                            <h5>{{ $group->name }}</h5>
                                        </a>
                                        <p><i class="fa-solid fa-location-dot ps-2" style="color: #253c5c;"></i>
                                            {{ $group->restaurant_id }}</p>
                                    </div>
                                    <div class="col-2 edit-div">
                                        <div class="btn-group-drop">
                                            <button class="btn dropdown-toggle" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical fa-2x" style="color: #253c5c;"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <button type="button" class="dropdown-item item-member"
                                                    data-bs-toggle="modal" data-bs-target="#member{{ $group['id'] }}"
                                                    data-member={{ $group->member_id }}>Members</button>
                                                <button type="button" class="dropdown-item item-edit"
                                                    data-bs-toggle="modal" data-bs-target="#edit{{ $group['id'] }}"
                                                    data-group-name={{ $group->name }}
                                                    data-restaurant={{ $group->restaurant_id }}
                                                    data-image={{ $group->image }}>Edit </button>
                                                <button type="button" class="dropdown-item item-delete"
                                                    data-bs-toggle="modal" data-bs-target="#delete{{ $group['id'] }}"
                                                    data-group-name={{ $group->name }}
                                                    data-image={{ $group->image }}>Delete</button>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                @foreach ($groups as $group)
                    @include('users.modals.group_member')
                    @include('users.modals.group_edit')
                    @include('users.modals.group_delete')
                @endforeach
                <script>
                    function readURL(input, groupId) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();
                            reader.onload = function(e) {
                                $('#imageBackground' + groupId).attr('src', e.target.result).show();
                            }
                            reader.readAsDataURL(input.files[0]);
                        }
                    }
                    @foreach ($groups as $group)
                        $("#uploadImage{{ $group->id }}").change(function() {
                            readURL(this, '{{ $group->id }}');
                        });
                    @endforeach
                </script>
            </div>
        @else
            <h4 class="text-muted text-center mt-5">No Groups Yet.</h4>

        @endif
    </div>
    {{--
    <script>
        item-member
        $(".item-member").on("click", function() {
            var groupMember       = $(this).attr('data-member');
            $('.classname').text(groupMember);
        });

        item-edit
        $(".item-edit").on("click", function() {
            var editGroupId       = $(this).attr('data-group-name');
            var restaurantId    = $(this).attr('data-restaurant');
            var editImage           = $(this).attr("data-image");
            $('.group-name').text(editGroupId);
            $('.restaurant-id').text(restaurantId);
            $("#modal-image").attr("src", editImage);
        });
        item-delete
        $(".item-delete").on("click", function() {
            var deleteGroupId       = $(this).attr('data-group-name');
            var deleteImage           = $(this).attr("data-image");
            $('.group-name').text(deleteGroupId);
            $("#modal-image").attr("src", deleteImage);
        });
    </script> --}}

    @include('users.modals.add_group')

@endsection
