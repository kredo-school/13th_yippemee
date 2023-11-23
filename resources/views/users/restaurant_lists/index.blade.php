@extends('layouts.app')

@section('title', 'Restaurant list')

@section('content')
<div class="container restaurant-list bg-white justify-content-center mx-auto w-50">
    <div class="row mt-2">
        <div class="col text-center page-title">
            <h2 class="post_title mt-3 page-title">Where to next, 【 user name 】?</h1>
            <span class="bar bar-short mt-4"></span>
        </div>
    </div>
  
    <form action="" >
    <div class="row  mt-4  w-50 mx-auto text-center" >      
            <div class="col ">
                <input type="text" name="serch" id="serch" class="form-control " > 
                
                <button type="submit" class="btn mt-3 text-center ps-4 pe-4" style="background-color: #E6F2E9;">Serach</button>
                <a href="{{ url('/restaurantlist/post') }}" class="btn mt-3 ms-3 ps-5 pe-5" style="background-color: #E6F2E9;">Post</a>                                
            </div>          
            </div>
        
        </form>
    
    
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
       <div class="row text-center">
    @foreach($all_genres as $index => $genre)
        @if($index < 4)
            <div class="col-md">
                <img src="/images/sushi.jpg" alt="" class="restaurant-list img rounded" style="width:100%; aspect-ratio: 4 / 3;">
                <br>
                <label for="{{ $genre->name }}" class="h4"><a href="{{ url('/genre/'.$genre->name.'/restaurants') }}" class="text-decoration-none">{{ $genre->name }}</a></label>
            </div>
        @endif
    @endforeach
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