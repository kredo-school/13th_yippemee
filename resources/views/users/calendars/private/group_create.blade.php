@extends('layouts.app')

@section('title', 'Create Group')

@section('content')

<div class="container my-4 margin-container">

    <div class="row grouplist-title">
        <div class="col-4 d-flex flex-column align-items-start" hidden>
        </div>
        <div class="col-4  page-title">
            <h2 class="text-center">Create Group</h2>
            <span class="bar bar-short mt-4"></span>
        </div>
    </div>

    <form action="{{ route('group.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="row" id="form-group">
                <div class="col-5" id="form-group-left">
                    <div class="group-image-upload">
                        <div class="image-edit">
                            <input type="file" name="image" id="imageUpload">
                            <label for="imageUpload" class="justify-content-center text-center">
                                <i class="fa-solid fa-camera"></i>
                            </label>
                        </div>

                        <div class="image-preview">

                            {{-- default --}}
                            <div id="defaultBackground" class="profile-pic"></div>

                            {{-- Uploaded Image --}}
                            <!-- CSS Needs to be background cover, and background centered -->
                            <div id="newImage" style="background-size:cover; background-position:center;">
                            </div>
                        </div>

                    </div>
                    <script>
                        function readAddURL(input) {
                            if (input.files && input.files[0]) {
                                var reader = new FileReader();
                                reader.onload = function(e) {
                                    $('#newImage').css('background-image', 'url(' + e.target.result +
                                    ')'); // Changed the newImage to the uploaded image
                                    $('#defaultBackground').hide(); //Hide default background
                                }
                                reader.readAsDataURL(input.files[0]);
                            }
                        }
                        $("#imageUpload").change(function() {
                            readAddURL(this);
                        });
                    </script>
                </div>
                <div class="col-6" id="form-group-right">
                    <label for="name" class="form-label"></label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                    <br>
                    <label for="restaurant_id" class="form-label"></label>
                    <input type="text" name="restaurant_id" id="restaurant_id" class="form-control"
                        placeholder="Restaurant">
                    <br>
                    <label for="user_id" class="form-label">Select Members <br>(Please select your own name as well. You can select multiple people.)</label>
                   <select name="user_id[]" id="user_id" class="form-select" multiple>

                    @foreach ($users as $user)

                    <option value="{{ $user->id }}">{{ $user->name}}</option>

                    @endforeach

                   </select>
                </div>
            </div>
        <div class="modal-footer border-0 me-5">
            <button type="submit" class="btn btn-create ">Create</button>
        </div>
    </form>


</div>

@endsection
