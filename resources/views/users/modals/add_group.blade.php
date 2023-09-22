@extends('layouts.app')

@section('title','add_group')

@section('content')
<div class="container my-auto w-50">
    <div class="card">
        <div class="card-header bg-warning">
            <div class="row align-items-center">
                <div class="col-11 mt-2">
                    <h1 style="color: #253c5c;">
                        <i class="fa-solid fa-square-plus fa-xl" style="color: #253c5c;"></i>
                        Create a group
                    </h1>
                </div>
                <div class="col-1">
                    <a href="#"><i class="fa-solid fa-xmark fa-2x" style="color: #253c5c;"></i></a>
                </div>
            </div>
        </div>
        <form action="#" method="post">
            <div class="card-body">
                <div class="form-group">
                    <i class="fa-regular fa-circle fa-10x"></i>
                </div>

                <div class="form-group">
                    <label for="name" require></label>
                    <input type="text" placeholder="Name" class="text-primary border-none">

                    <label for="restaurant"></label>
                    <input type="text" placeholder="Restaurant">

                    <label for="members" require></label>
                    <input type="text" placeholder="Members">

                    <label for="description"></label>
                    <textarea name="description" id="description" cols="60" rows="10" placeholder="What is this group for?"></textarea>
                </div>
            </div>

            <div class="card-footer border-0">
                <div class="btn-radius-gradient-wrap">
                    <a href="" class="btn btn-radius-gradient">Create</a>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
