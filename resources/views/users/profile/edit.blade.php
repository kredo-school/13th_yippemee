@extends('layouts.app')

@section('title', 'Edit Profile')

@section('content')

<style>
    .col-6 {font-family: 'Marcellus', serif;}
    .col-6 {color: #253C5C;}
    .icon-lg {font-size: 6rem;}
    .icon-md {font-size: 3.5rem;}
    .icon-sm {font-size: 2rem;}
    .px-5 {color: #253C5C}

    a.btn--yellow {
  color: #253C5C;
  background-color: #F1DD6C;
  border-bottom: 5px solid #F1DD6C;
}

a.btn--yellow:hover {
  margin-top: 3px;
  color: #253C5C;
  background: # fff20a;
  border-bottom: 2px solid #F1DD6C;
}

a.btn--green {
  color: #617EA8;
  background-color: #E6F2E9;
  border-bottom: 5px solid #E6F2E9;
}

a.btn--green:hover {
  margin-top: 3px;
  color: #617EA8;
  background: # fff20a;
  border-bottom: 2px solid #E6F2E9;
}
</style>



<div class="row justify-content-center">
    <div class="col-6">
        <form action="#" method="post" class="bg-white shadow rounded-3 p-5" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <h2 class="h3 mb-0 fw-light text-center" class="list-group-item">Update Profile</h2>
            <div class="row mb-3">

                <div class="col-4">
                    <i class="fa-regular fa-circle-user d-block text-center icon-lg"></i>
                </div>


                <div class="col-auto align-self-end">
                    <input type="file" name="avatar" id="avatar" class="form-control form-control-sm mt-1" aria-describedby="avatar-info">
                    <div class="form-text" id="avatar-info">
                        Acceptable formats: jpeg, jpg, png, gif only<br>
                        Max file size is 1048kb
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label fw-bold">Name</label>
                <input type="text" name="name" id="name" value="{{ "NAME" }}" class="form-control" autofocus>
                </div>



            <div class="mb-3">
                <label for="name" class="form-label fw-bold">User Name</label>
                <input type="text" name="name" id="name" value="{{ "USER NAME" }}" class="form-control" autofocus>
            </div>

            <div class="text-end">
            <a href="#" class="btn btn--green btn--cubic px-5">Cancel</a>
            <a href="#" class="btn btn--yellow btn--cubic px-5">Save</a>
            </div>
        </form>
    </div>
</div>
@endsection
