@extends('layouts.app')

@section('title', 'Genre more')

@section('content')
<div class="w-75 mx-auto restaurant-list bg-white mb-5 text-start">
        <div class="row mt-3" style="background-color: #E6F2E9;" class="mt-3 mb-3 ">
            <h2 class=" h1 mt-5 mb-5 text-center bg-white rounded" >Food Area</h2>
        </div>  
    <div class="container mt-5">
        <div class="row">
            <div class="col-2 h3">Asian </div>
                <div class="col-md ">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="/images/sushi.jpg" alt="" class="restaurant-list img me-3" style="height: 100px; width:100px;">
                        </div>
                        <div class="col-md-9">
                            <a href="{{ url('/genre/japanese') }}" class="text-decoration-none  h5  rounded">Japan</a> <br>
                            <a href="{{ url('/genre/japanese') }}">Sushi</a> / <a href="">Ramen</a></p>
                        </div>
                    </div>
                </div>

            <div class="col-md ">
                <div class="row">
                            <div class="col-md-3">
                                <img src="/images/sushi.jpg" alt="" class="restaurant-list img me-3" style="height: 100px; width:100px;">
                            </div>
                            <div class="col-md-9">
                            <a href="" class="text-decoration-none text-dark h5  rounded">Vietnum</a>  <br>                           
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
                        <div class="col-md-9">
                        <a href="" class="text-decoration-none text-dark h5  rounded">China</a>  <br>
                            <a href="">Pho</a> / <a href="">Banmi</a></p>
                        </div>
                    </div>
                </div>

            <div class="col-md ">
                <div class="row">
                        <div class="col-md-3">
                            <img src="/images/sushi.jpg" alt="" class="restaurant-list img me-3" style="height: 100px; width:100px;">
                        </div>
                        <div class="col-md-9">
                        <a href="" class="text-decoration-none text-dark h5  rounded">Korea</a> <br>                           
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <div class="row mt-5">
                <div class="col-2 h3">Nouth America</div>
                    <div class="col-md ">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="/images/sushi.jpg" alt="" class="restaurant-list img me-3" style="height: 100px; width:100px;">
                            </div>
                            <div class="col-md-9">
                            <a href="" class="text-decoration-none text-dark h5">Canada</a> <br>
                                <a href="">Sushi</a> / <a href="">Ramen</a></p>
                            </div>
                        </div>
                    </div>

            <div class="col-md ">
                <div class="row">
                            <div class="col-md-3">
                                <img src="/images/sushi.jpg" alt="" class="restaurant-list img me-3" style="height: 100px; width:100px;">
                            </div>
                            <div class="col-md-9">
                            <a href="" class="text-decoration-none text-dark h5">Unites States</a> <br>                           
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
                            <div class="col-md-9">
                            <a href="" class="text-decoration-none text-dark h5">Mexico</a> <br>
                                <a href="">Sushi</a> / <a href="">Ramen</a></p>
                            </div>
                        </div>
                    </div>

            <div class="col-md ">
                <div class="row">
                            <div class="col-md-3">
                                <img src="/images/sushi.jpg" alt="" class="restaurant-list img me-3" style="height: 100px; width:100px;">
                            </div>
                            <div class="col-md-9">
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
                            <div class="col-md-9">
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
                            <div class="col-md-9">
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
                            <div class="col-md-9">
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
                            <div class="col-md-9">
                            <a href="" class="text-decoration-none text-dark h5 ">Japanese</a> <br>                           
                            </div>
                        </div>
                </div>
        </div>




    </div>
</div>
@endsection