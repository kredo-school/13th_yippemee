@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<style>
    .col-3 {font-family: 'Marcellus', serif;}
    .col-5 {font-family: 'Marcellus', serif;}
    .col-9 {font-family: 'Marcellus', serif;}
    .col-12 {font-family: 'Marcellus', serif;}
    .icon-lg {font-size: 9rem;}
    .icon-md {font-size: 3.5rem;}
    .icon-sm {font-size: 2rem;}
    .display-6 {color: #253C5C;}
    .mt-0 {color: #253C5C;}
    .ms-3 {color: #253C5C;}
    .text-end {color: #253C5C;}
    .text-decoration-none {color: #253C5C;}
    .mb-4 {color: #253C5C;}
    .text-center {color: #253C5C;}
</style>

{{-- Header --}}
<div class="row bg-white container ms-auto me-auto mb-3 shadow rounded-3 p-5w">
    <div class="col-5 mb-3 mt-3">
            <i class="fa-regular fa-circle-user icon-md d-block text-end"></i>
    </div>

    <div class="col-5">
        <div class="row">
            <div class="col-auto">
                <div class="display-6 mt-3">{{ "John Smith" }}
                <a href="#" class="btn-sm mb-3 ms-3"><i class="fa-solid fa-pen-clip icon-sm"></i></a></div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="mt-0">{{"@JohnSmith12345678"}}</div>
        </div>
        <div class="row mb-4"></div>
    </div>
    <div class="col-12">
        <div class="row justify-content-center me-5">
            <div class="col-auto"><h4><a href="#" class="text-decoration-none">Post</a></h4></div>
            <div class="col-auto"><h4><a href="#" class="text-decoration-none">Vists</a></h4></div>
            <div class="col-auto"><h4><a href="#" class="text-decoration-none">Bucket Lists</a></h4></div>
            <div class="col-auto"> <h4><a href="#" class="text-decoration-none">Schedule</a></h4></div>
            <div class="col-auto"><h4><a href="#" class="text-decoration-none">Groups</a></h4></div>
        </div>
    </div>
</div>
{{-- End of header --}}

{{-- INTRO --}}
<div class="row bg-white container ms-auto me-auto shadow rounded-3 p-5w">
    <div class="col-3 mb-3 mt-3">
        <div class="row bg-white ms-auto me-auto shadow rounded-3 p-5w">
            <h4 class="fw-bold mt-2 mb-4">intro</h4>
            <h5><div class="mb-4"><a href="#" class="text-decoration-none mb-2"><i class="fa-solid fa-house"></i> Live</h5></a>
            <h5><div class="mb-4"><a href="#" class="text-decoration-none"><i class="fa-solid fa-utensils"></i> Best restaurant</h5></a>
            <h5><div class="mb-4"><a href="#" class="text-decoration-none"><i class="fa-solid fa-pizza-slice"></i> Favorite Genre</h5></a>
            <h5><div class="mb-4"><a href="#" class="text-decoration-none"><i class="fa-solid fa-plus"></i> {{ "Write about yourself" }}</h5></a>
        </div>
    </div>

{{-- END of Intro--}}

{{-- Post --}}
    <div class="col-9">
        <h3 class="mt-5 text-center">No Posts Yet</h3>
    </div>
</div>
{{-- End of Post --}}


@endsection

