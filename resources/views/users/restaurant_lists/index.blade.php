@extends('layouts.app')

@section('title', 'Restaurant list')

@section('content')
<div class="container restaurant-list bg-white mx-auto">
    <div class="row mt-3" style="background-color: #E6F2E9;" class="mt-3 mb-3 m-0 p-0">
        <h2 class="mt-3 text-center" >Where to next, 【 user name 】?</h2>
    </div>
   
    <div class="row text-center mt-4 mx-auto w-75" style="display:inline-flex">
        <form action="" >
            <div class="col">
                <input type="text" name="serch" id="serch" class="form-control " >
                <button type="submit" class="btn mt-3 a" style="background-color: #E6F2E9;">Serach</button>
            </div>
            <div >
        </form>
    </div>
    
    <div class="row mt-4">
        <div class="col">
            <h2 class="h3 text-start ms-3 mb-4">Genre</h2>
        </div>
        <div class="col text-end me-5 mt-3">
            <a href="genre/more">More>> </a>
        </div>
    </div>
    <div class="row">
       <div class="row text-center">
            <div class="col-md">
                <img src="/images/sushi.jpg" alt="" class="restaurant-list img  rounded" style="width:100%; aspect-ratio: 4 / 3;">
                <br>
                <label for="japanese" class="h4"><a href="{{ url('/genre/japanese') }}" class="text-decoration-none">Japanese</a></label>
            </div>
            <div class="col-md">
                <img src="/images/pasta.jpg" alt="" class="restaurant-list img rounded" style="width:100%; aspect-ratio: 4 / 3;">
                <br>
                <label for="japanese" class="h4"><a href="{{ url('/genre/italian') }}" class="text-decoration-none">Italian</a></label>
            </div>
            <div class="col-md">               
                <img src="/images/chinesefood.jpg" alt="" class="restaurant-list img rounded" style="width:100%; aspect-ratio: 4 / 3;">
                <br>
                <label for="japanese" class="h4"><a href="{{ url('/genre/chinese') }}" class="text-decoration-none">Chinese</a></label>
            </div>
            <div class="col-md">               
                <img src="/images/coffee.jpg" alt="" class="restaurant-list img rounded" style="width:100%; aspect-ratio: 4 / 3;">
                <br>
                <label for="japanese" class="h4"><a href="{{ url('/genre/cafe') }}" class="text-decoration-none">Cafe</a></label>
            </div>
       </div>
    </div>

    <div class="row mt-5">
        <div class="col">
            <h2 class="h3 text-start ms-3 mb-4">Area</h2>
        </div>
        <div class="col text-end me-5 mt-3">
            <a href="area/more">More>> </a>
        </div>
    </div>
    
    <div class="row area-list">
       <div class="row text-center">
            <div class="col-md">
                <img src="/images/tokyo.jpg" alt="" class="rounded w-100" style="height:200px;">
                <br>
                <label for="tokyo" class="h4 mt-1"><a href="{{ url('/genre/japanese') }}" class="text-decoration-none">Tokyo</a></label>
            </div>
            <div class="col-md">
                <img src="/images/osaka.jpg" alt="" class="rounded w-100" style="height:200px;">
                <br>
                <label for="osaka" class="h4 mt-1"><a href="" class="text-decoration-none">Osaka</a></label>
            </div>
        </div>
    </div>

    <div class="row area-list mb-5 ">
       <div class="row text-center">
            <div class="col-md">
                <img src="/images/okinawa.jpg" alt="" class="rounded w-100" style="height:200px;">
                <br>
                <label for="tokyo" class="h4 mt-1"><a href="" class="text-decoration-none">Okinawa</a></label>
            </div>
            <div class="col-md">
                <img src="/images/nagoya.jpg" alt="" class="rounded w-100" style="height:200px;">
                <br>
                <label for="osaka" class="h4 mt-1"><a href="" class="text-decoration-none">Nagoya</a></label>
            </div>
        </div>
    </div>
</div>

@endsection