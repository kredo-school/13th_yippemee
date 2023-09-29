@extends('layouts.app')
@section('title', 'Decide by date')
@section('content')
    <div class="container">
        <h2 class="mx-auto text-center mt-5 bg-white w-50 rounded"><u>Decide by Date</u></h2>
        <div class="row w-100">
            <div class="col-8">
                {{-- hover button --}}
                <div class="hover-button">
                    <label class="rocker">
                        <input type="checkbox" class="hover-check">
                        <span class="switch-left">M</span>
                        <span class="switch-right">W</span>
                    </label>
                </div>
            </div>
            <div class="col-2">

            </div>
            <div class="col-2">
                <a href="#" class="btn btn-create-plan" data-bs-toggle="modal" data-bs-target="#create-plan"><i class="fa-regular fa-calendar-plus fa-3x"></i></a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                        <div class="elegant-calencar d-md-flex">
                            <div class="wrap-header d-flex align-items-center img" >
                                <div class="header w-100" >
                                    <div class="head-info" >
                                        <div class="head-month text-center">September</div>
                                        <div class="head-day ">16th</div>
                                    </div>
                                    <div class="head-month text-start ms-3"><u>Title :</u></div>
                                    <div class="head-month mt-3 text-start ms-3"><i class="fa-solid fa-map-pin me-2"></i>Location :</div>
                                    <div class="head-month mt-3 text-start ms-3"><i class="fa-regular fa-clock me-2"></i>Time :</div>
                                    <hr>
                                    <div class="head-month text-start ms-3">Description:</div>
                                    <hr>
                                    <a href="#" class="text-end" data-bs-toggle="modal" data-bs-target="#activate-modal">Show more</a>
                                </div>
                            </div>
                            <div class="calendar-wrap">
                                <div class="w-100 button-wrap">
                                    <div class="pre-button d-flex align-items-center justify-content-center pt-4"><i class="fa fa-chevron-left fw-bold"></i>
                                    </div>
                                    <div class=" d-flex align-items-center justify-content-center h2 ">
                                        September
                                    </div>
                                    <div class="next-button d-flex align-items-center justify-content-center pt-4"><i class="fa fa-chevron-right"></i>
                                    </div>
                                </div>
                                {{-- weekly --}}
                                <h1>Weekly Calendar</h1>

                                <div class="week">
                                    <div id="day-1" class="day day-1">
                                        <p class="day-title">Sun</p>
                                        <div class="day__morning"></div>
                                        <div class="day__noon"></div>
                                        <div class="day__evening"></div>
                                    </div>
                                    <div id="day-2" class="day day-2">
                                        <p class="day-title">Mon</p>
                                        <div class="day__morning"></div>
                                        <div class="day__noon"></div>
                                        <div class="day__evening"></div>
                                    </div>
                                    <div id="day-3" class="day day-3">
                                        <p class="day-title">Tue</p>
                                        <div class="day__morning"></div>
                                        <div class="day__noon"></div>
                                        <div class="day__evening"></div>
                                    </div>
                                    <div id="day-4" class="day day-4">
                                        <p class="day-title">Wed</p>
                                        <div class="day__morning"></div>
                                        <div class="day__noon"></div>
                                        <div class="day__evening"></div>
                                    </div>
                                    <div id="day-5" class="day day-5">
                                        <p class="day-title">Thu</p>
                                        <div class="day__morning"></div>
                                        <div class="day__noon"></div>
                                        <div class="day__evening"></div>
                                    </div>
                                    <div id="day-6" class="day day-6">
                                        <p class="day-title">Fri</p>
                                        <div class="day__morning"></div>
                                        <div class="day__noon"></div>
                                        <div class="day__evening"></div>
                                    </div>
                                    <div id="day-7" class="day day-7">
                                        <p class="day-title">Sat</p>
                                        <div class="day__morning"></div>
                                        <div class="day__noon"></div>
                                        <div class="day__evening"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection

