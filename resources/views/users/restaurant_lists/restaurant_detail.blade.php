@extends('layouts.app')

@section('title', 'Restaurant list')

@section('content')
<div class="w-75 mx-auto restaurant-list bg-white mt-5 pt-5">
    <div class="container bg-white">
        <div class="row w-75 mx-auto">
            <div class="col-md-10">
                <a href="" class="h2 fw-bold">{{$restaurant->name}}</a>
            </div>
            <div class="col-md-2">
                <i class="fa-solid fa-bookmark ms-4 text-end h2"></i>
            </div>
        </div>

        <div class="row mt-3 detal-right ">               
             <img src="{{$restaurant->image}}" alt="" class="rounded  mx-auto" style="height: 400px;">
          
                <div class="row mt-5"> 
                    <div class="col-md-2">                       
                    </div>    
                    <div class="col-md-8 float-left">
                        <div class="row">
                            <div class="col-md-10 mb-1">
                                <a href="" class="h2 fw-bold ">{{$restaurant->name}}</a>                           
                            </div>
                            <div class="col-md-2">
                            </div>
                        </div>               
                    
                        <p>[  {{$restaurant->location}}] </p>
                        <hr>
                        <div class="rate">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        4.2 <i class="fa-regular fa-comment-dots ms-3"></i> <a href="">133 </a> <i class="fa-solid fa-bookmark ms-4"></i> 1236   <span class="ms-2">{{$restaurant->price}}</span>
                        <br>
                        <p class="mt-2">{{$restaurant->description}}</p>
                        <hr>
                        <table class="mb-3">
                            <tr>
                                <td>Address:</td>
                                <td>{{$restaurant->address}}</td>
                                <td></td>
                            </tr>
                            <tr>
                            <td >Tel :</td>
                            <td class="text-start">{{$restaurant->tel}} </td>
                            <td></td>
                            </tr>
                        </table>
                        
                        <iframe src="{{$restaurant->googlemap}}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <hr>
                        <p class="fw-bold mt-4"><i class="fa-regular fa-clock"></i>open hour</p>
                            <table class="mx-auto">
                                <tr>
                                <td>Monday</td>
                                <td>{{$restaurant->monday}}</td>
                                <td>15:00</td>
                                </tr>
                                <tr>
                                <td>Tuesday</td>
                                <td>{{$restaurant->tuesday}}</td>
                                <td>15:00</td>
                                </tr>
                                <tr>
                                <td>Wednesday</td>
                                <td>{{$restaurant->wednesday}}</td>
                                <td>15:00</td>
                                </tr>
                                <tr>
                                <td>Thursday</td>
                                <td>{{$restaurant->thursday}}</td>
                                <td>15:00</td>
                                </tr>
                                <tr>
                                <td>Friday</td>
                                <td>{{$restaurant->friday}}</td>
                                <td>15:00</td>
                                </tr>
                                <tr>
                                <td>Saturday</td>
                                <td>{{$restaurant->saturday}}</td>
                                <td>15:00</td>
                                </tr>
                                <tr>
                                <td>Sunday</td>
                                <td>{{$restaurant->sunday}}</td>
                                <td>15:00</td>
                                </tr>
                            </table>
                        </div>
                    <hr>
                    <table class="mb-3">
                            <tr>
                                <td>URL:</td>
                                <td>{{$restaurant->url}}</td>
                                <td></td>
                            </tr>
                        </table>
                </div>
        <div class="colmd-2"></div>
        <hr class="mt-3">
            </div>
    </div>
    </div>
@endsection