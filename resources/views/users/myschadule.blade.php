@extends('layouts.app')

@section('title', 'My Schedule')

@section('content')
<div class="background pt-5">
    <div class="container">
        <h2 class="mx-auto text-center  bg-white w-50 rounded"><u>My Schedule</u></h2>
    
            <div class="row mt-5 ">
                <div class="col-6 float-left" style="width: 400px;">
                <label for="date" class="fw-bold h4 " ><input type="radio" name="date" value="date">Date</label>  
                <label for="place" class="fw-bold h4"><input type="radio" name="place" value="place" class="ms-3">Place</label>
                </div>
                <div class="col-6"></div>
            </div>

        <div class="row ">
            <div class="col-md-12">
                        <div class="elegant-calencar d-md-flex bg-white ">
                            <div class="wrap-header d-flex align-items-center img pe-5 " >
                                <p id="reset">Today</p>

                                    <div class="header w-100 mt-5 mb-5" style="height:500px;">
                                        <div class="head-info mt-5 " >
                                            <div class="head-month text-center ">September</div>
                                            <div class="head-day ">16th</div>
                                        </div>
                                            <div class="head-month text-start ms-3 mt-5
                                            "><u>Title :</u></div>
                                            <div class="head-month mt-3 text-start ms-3"><i class="fa-solid fa-map-pin me-2"></i>Location :</div>
                                            <div class="head-month mt-3 text-start ms-3"><i class="fa-regular fa-clock me-2"></i>Time :</div>
                                            <hr>
                                            <div class="head-month text-start ms-3">Description:</div>
                                            <hr>
                                    
                                            <a href="#" class="text-end mb-5" data-bs-toggle="modal" data-bs-target="#activate-modal">Show more</a>
                                        </div>
                                    
                            </div>
                            
                            <div class="calendar-wrap">
                                <div class=" button-wrap">
                                    <div class="pre-button d-flex align-items-center justify-content-center pt-4"><i class="fa fa-chevron-left fw-bold"></i>
                                    </div>
                                    <div class=" d-flex align-items-center justify-content-center h2 ">
                                        September
                                    </div>
                                    <div class="next-button d-flex align-items-center justify-content-center pt-4"><i class="fa fa-chevron-right"></i>
                                    </div>
                                </div>

                                <table id="calendar" class="calendar" style="width:100%; height:75%;">
                                    <thead>
                                        <tr>
                                            <th>Sun</th>
                                            <th>Mon</th>
                                            <th>Tue</th>
                                            <th>Wed</th>
                                            <th>Thu</th>
                                            <th>Fri</th>
                                            <th>Sat</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>1</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>5</td>
                                            <td>6</td>
                                            <td>7</td>
                                            <td>8</td>
                                            <td>9</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>11</td>
                                            <td>12</td>
                                            <td>13</td>
                                            <td>14</td>
                                            <td>15</td>
                                            <td>16</td>
                                        </tr>
                                        <tr>
                                            <td>17</td>
                                            <td>18</td>
                                            <td>19</td>
                                            <td>20</td>
                                            <td>21</td>
                                            <td>22</td>
                                            <td>23</td>
                                        </tr>
                                        <tr>
                                            <td>24</td>
                                            <td>25</td>
                                            <td>26</td>
                                            <td>27</td>
                                            <td>28</td>
                                            <td>29</td>
                                            <td>30</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>                               
                            </div>                           
                        </div>
                        <div class="row text-center">
                            <div class="col">
                                <button class="btn btn-warning mt-5 w-25 ">Back</button>
                            </div>
                        </div>
                </div>               
            </div>
        </div>   
    </div>
</div>
    @include('users.modal.status')
@endsection