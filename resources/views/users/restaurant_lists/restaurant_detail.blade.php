@extends('layouts.app')

@section('title', 'Restaurant list')

@section('content')
<div class="w-75 mx-auto restaurant-list bg-white mt-5 pt-5">
    <div class="container bg-white">
        <div class="row w-75 mx-auto">
            <div class="col-md-10">
                <a href="" class="h2 fw-bold">restaurant:name</a>
            </div>
            <div class="col-md-2">
                <i class="fa-solid fa-bookmark ms-4 text-end h2"></i>
            </div>
        </div>

        <div class="row mt-3 detal-right ">               
             <img src="/images/tokyo.jpg" alt="" class="rounded  mx-auto" style="height: 400px;">
          
                <div class="row mt-5"> 
                    <div class="col-md-2">                       
                    </div>    
                    <div class="col-md-8 float-left">
                        <div class="row">
                            <div class="col-md-10 mb-1">
                                <a href="" class="h2 fw-bold ">restaurant:name</a>                           
                            </div>
                            <div class="col-md-2">
                            </div>
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
                        <hr>
                        <table class="mb-3">
                            <tr>
                                <td>Address:</td>
                                <td>285 main street Japan</td>
                                <td></td>
                            </tr>
                            <tr>
                            <td >Tel :</td>
                            <td class="text-start">236-556-1122 </td>
                            <td></td>
                            </tr>
                        </table>
                        
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83327.51117460211!2d-123.123904!3d49.25773545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54867353ebfec64d%3A0xcf11567a16f148c0!2sPerfecto%20Cafe%20%26%20Gelato!5e0!3m2!1sja!2sca!4v1695904254573!5m2!1sja!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <hr>
                        <p class="fw-bold mt-4"><i class="fa-regular fa-clock"></i>open hour</p>
                            <table class="mx-auto">
                                <tr>
                                <td>Monday</td>
                                <td>9:00</td>
                                <td>15:00</td>
                                </tr>
                                <tr>
                                <td>Tuesday</td>
                                <td>9:00</td>
                                <td>15:00</td>
                                </tr>
                                <tr>
                                <td>Wednesday</td>
                                <td>9:00</td>
                                <td>15:00</td>
                                </tr>
                                <tr>
                                <td>Thursday</td>
                                <td>9:00</td>
                                <td>15:00</td>
                                </tr>
                                <tr>
                                <td>Friday</td>
                                <td>9:00</td>
                                <td>15:00</td>
                                </tr>
                                <tr>
                                <td>Saturday</td>
                                <td>9:00</td>
                                <td>15:00</td>
                                </tr>
                                <tr>
                                <td>Sunday</td>
                                <td>9:00</td>
                                <td>15:00</td>
                                </tr>
                            </table>
                        </div>
                    <hr>
                    <table class="mb-3">
                            <tr>
                                <td>URL:</td>
                                <td>httpss:www.ccc.com</td>
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