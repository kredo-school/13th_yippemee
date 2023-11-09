@extends('layouts.app')

@section('title', 'Restaurant list')

@section('content')

<div class="w-75 mx-auto restaurant-list bg-white  text-start
">
   <div class="container">
    <div class="row  mt-4">
    <form action="#" >
        <div class="col ">
            <input type="text" name="serch" id="serch" class="form-control w-50  mt-5" class="mx-auto">
            <button type="submit" class="btn mt-3 text-end" style="background-color: #E6F2E9;">Serach</button>
        <div >   
        </form>
    </div>
    <div class="row mt-4">    
            <h2 class="h3 text-start ms-3 mb-4">Japense</h2> 
            <hr>
    </div>

    </div>
    @foreach($restaurants as $restaurant)
    <div class="row">
        <div class="col-md-4">
            <img src="{{$restaurant->image}}" alt="" class="rounded  " style="width:400px">
        </div>
        <div class="col-md-8 float-left">
            <div class="row">
                <div class="col-md-10">
                    <a href="{{route('detail', $restaurant->id ) }}" class="h2">{{$restaurant->name}}</a>
                </div>
                <div class="col-md-2">
                    <i class="fa-solid fa-bookmark ms-4 text-end h2"></i></div>
                </div>
           
            
                <p>[ {{$restaurant->location}} ] </p>
                <hr>
                <div class="rate">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
                4.2 <i class="fa-regular fa-comment-dots ms-3"></i> <a href="{{route('restaurantcomment', $restaurant->id ) }}">133 </a> <i class="fa-solid fa-bookmark ms-4"></i> 1236   <span class="ms-2">{{$restaurant->price}}</span>
                <br>
                <p class="mt-2">{{$restaurant->description}}</p>
                </div>
                
        </div>
          <hr class="mt-3">
    </div>
@endforeach
    <div class="row">
        <div class="col-md-4">
            <img src="/images/tokyo.jpg" alt="" class="rounded  " style="width:400px">
        </div>
        <div class="col-md-8 float-left">
            <div class="row">
                <div class="col-md-10">
                    <a href="" class="h2">restaurant:name</a>
                </div>
                <div class="col-md-2">
                    <i class="fa-solid fa-bookmark ms-4 text-end h2"></i></div>
                </div>           
            
                <p>[ Tokyo ] </p>
                <hr>
                <div class="rate">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
                4.2 <i class="fa-regular fa-comment-dots ms-3"></i> <a href="">133 </a> <i class="fa-solid fa-bookmark ms-4"></i> 1236   <span class="ms-2">$$$</span>
                <br>
                <p class="mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem odit expedita corporis iure ex impedit delectus itaque? Nostrum, laborum deleniti.</p>
                </div>
                
        </div>
          <hr class="mt-3">
    </div>

    <div class="row">
        <div class="col-md-4">
            <img src="/images/tokyo.jpg" alt="" class="rounded  " style="width:400px">
        </div>
        <div class="col-md-8 float-left">
            <div class="row">
                <div class="col-md-10">
                    <a href="" class="h2">restaurant:name</a>
                </div>
                <div class="col-md-2">
                    <i class="fa-solid fa-bookmark ms-4 text-end h2"></i></div>
                </div>           
            
                <p>[ Tokyo ] </p>
                <hr>
                <div class="rate">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
                4.2 <i class="fa-regular fa-comment-dots ms-3"></i> <a href="/restaurant/comment">133 </a> <i class="fa-solid fa-bookmark ms-4"></i> 1236   <span class="ms-2">$$$</span>
                <br>
                <p class="mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem odit expedita corporis iure ex impedit delectus itaque? Nostrum, laborum deleniti.</p>
                </div>
                
        </div>
          <hr class="mt-3">
    </div>

    <div class="row mb-5">
        <div class="col-md-4">
            <img src="/images/tokyo.jpg" alt="" class="rounded  " style="width:400px">
        </div>
        <div class="col-md-8 float-left">
            <div class="row">
                <div class="col-md-10">
                    <a href="" class="h2">restaurant:name</a>
                </div>
                <div class="col-md-2">
                    <i class="fa-solid fa-bookmark ms-4 text-end h2"></i></div>
                </div>          
            
                <p>[ Tokyo ] </p>
                <hr>
                <div class="rate">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
                4.2 <i class="fa-regular fa-comment-dots ms-3"></i> <a href="">133 </a> <i class="fa-solid fa-bookmark ms-4"></i> 1236   <span class="ms-2">$$$</span>
                <br>
                <p class="mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem odit expedita corporis iure ex impedit delectus itaque? Nostrum, laborum deleniti.</p>
                </div>
                
        </div>
          <hr class="mt-3">
    </div>
    </div>
</div>

@endsection