@extends('layouts.app')

@section('title', 'Genre more')

@section('content')
<div class="w-75 mx-auto restaurant-list bg-white mb-5">
        <div class="row mt-3" style="background-color: #E6F2E9;" class="mt-3 mb-3 ">
            <h2 class=" h1 mt-5 mb-5 text-center bg-white " >Food genre</h2>
        </div>  
    <div class="container mt-5">
        <div class="row">
            <div class="col-2 h3">Asian Food</div>
                <div class="col-md ">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="/images/sushi.jpg" alt="" class="restaurant-list img me-3" style="height: 100px; width:100px;">
                        </div>
                        <div class="col-md-9 text-start">
                            <a href="{{ url('/genre/japanese') }}" class="text-decoration-none text-dark h5  ">Japanese</a> <br>
                            <a href="/genre/japanese">Sushi</a> / <a href="/genre/japanese">Ramen</a></p>
                        </div>
                    </div>
                </div>

            <div class="col-md ">
                <div class="row">
                            <div class="col-md-3">
                                <img src="/images/sushi.jpg" alt="" class="restaurant-list img me-3" style="height: 100px; width:100px;">
                            </div>
                            <div class="col-md-9 text-start" >
                            <a href="" class="text-decoration-none text-dark h5  ">Chinese</a>  <br>                           
                            </div>
                        </div>
                </div>
        </div>

        <div class="row mt-5">
            <div class="col-2 "></div>
                <div class="col-md ">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="/images/sushi.jpg" alt="" class="restaurant-list img me-3" style="height: 100px; width:100px;">
                        </div>
                        <div class="col-md-9 text-start">
                        <a href="" class="text-decoration-none text-dark h5  ">Vietnumies</a>  <br>
                            <a href="">Pho</a> / <a href="">Banmi</a></p>
                        </div>
                    </div>
                </div>

            <div class="col-md ">
                <div class="row">
                        <div class="col-md-3">
                            <img src="/images/sushi.jpg" alt="" class="restaurant-list img me-3" style="height: 100px; width:100px;">
                        </div>
                        <div class="col-md-9 text-start">
                        <a href="" class="text-decoration-none text-dark h5 ">Thai</a> <br>                           
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <div class="row mt-5">
                <div class="col-2 h3">Western Food</div>
                    <div class="col-md ">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="/images/sushi.jpg" alt="" class="restaurant-list img me-3" style="height: 100px; width:100px;">
                            </div>
                            <div class="col-md-9 text-start">
                            <a href="" class="text-decoration-none text-dark h5">Japanese</a> <br>
                                <a href="">Sushi</a> / <a href="">Ramen</a></p>
                            </div>
                        </div>
                    </div>

            <div class="col-md ">
                <div class="row">
                            <div class="col-md-3">
                                <img src="/images/sushi.jpg" alt="" class="restaurant-list img me-3" style="height: 100px; width:100px;">
                            </div>
                            <div class="col-md-9 text-start">
                            <a href="" class="text-decoration-none text-dark h5">Japanese</a> <br>                           
                            </div>
                        </div>
                </div>
        </div>

        <div class="row mt-5">
                <div class="col-2 "></div>
                    <div class="col-md ">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="/images/sushi.jpg" alt="" class="restaurant-list img me-3" style="height: 100px; width:100px;">
                            </div>
                            <div class="col-md-9 text-start">
                            <a href="" class="text-decoration-none text-dark h5">Japanese</a> <br>
                                <a href="">Sushi</a> / <a href="">Ramen</a></p>
                            </div>
                        </div>
                    </div>

            <div class="col-md ">
                <div class="row">
                            <div class="col-md-3">
                                <img src="/images/sushi.jpg" alt="" class="restaurant-list img me-3" style="height: 100px; width:100px;">
                            </div>
                            <div class="col-md-9 text-start">
                            <a href="" class="text-decoration-none text-dark h5">Japanese</a> <br>                           
                            </div>
                        </div>
                </div>
        </div>
        
        <hr>

        <div class="row mt-5 mb-5">
                <div class="col-2 "></div>
                    <div class="col-md ">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="/images/sushi.jpg" alt="" class="restaurant-list img me-3" style="height: 100px; width:100px;">
                            </div>
                            <div class="col-md-9 text-start">
                            <a href="" class="text-decoration-none text-dark h5">Japanese</a> <br>
                                <a href="">Sushi</a> / <a href="">Ramen</a></p>
                            </div>
                        </div>
                    </div>

            <div class="col-md ">
                <div class="row">
                            <div class="col-md-3">
                                <img src="/images/sushi.jpg" alt="" class="restaurant-list img me-3" style="height: 100px; width:100px;">
                            </div>
                            <div class="col-md-9 text-start" >
                            <a href="" class="text-decoration-none text-dark h5">Japanese</a> <br>                           
                            </div>
                        </div>
                </div>
        </div>

        <div class="row mt-5 mb-5">
                <div class="col-2 "></div>
                    <div class="col-md ">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="/images/sushi.jpg" alt="" class="restaurant-list img me-3" style="height: 100px; width:100px;">
                            </div>
                            <div class="col-md-9 text-start">
                            <a href="" class="text-decoration-none text-dark h5">Japanese</a> <br>
                                <a href="">Sushi</a> / <a href="">Ramen</a></p>
                            </div>
                        </div>
                    </div>

            <div class="col-md mb-5 ">
                <div class="row">
                            <div class="col-md-3">
                                <img src="/images/sushi.jpg" alt="" class="restaurant-list img me-3" style="height: 100px; width:100px;">
                            </div>
                            <div class="col-md-9 text-start">
                            <a href="" class="text-decoration-none text-dark h5 ">Japanese</a> <br>                           
                            </div>
                        </div>
                </div>
        </div>




    </div>
</div>
@endsection