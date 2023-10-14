@extends('layouts.app')
@section('title', 'Decide by place')
@section('content')
<style>
    body {
        background-image: url('/images/restaurant3.jpg');
        background-size:cover;
        padding-top: 20px;
        margin-top: -20px;
        height: 1100px;
        background-repeat: none;
    }
    .bg-layer {
        background: rgba(0,0,0,0.3);
        height: 1100px;
        width: 100%;
    }
</style>

<div class="bg-layer">
    <div class="container container-calendar">
        <div class="title-box">
            <div class="sticky-box">
                <div class="row sticky-title" id="sticky-private">
                    <h1 class="title-div my-auto text-center">
                        <i class="fa-regular fa-calendar" style="color: #253c5c;"></i> Decide by Place
                    </h1>
                    <p class="text-center mb-0">Let's check friends' schedule,<br>and add yours too!</p>
                    <h3 class="text-center"><i class="fa-regular fa-user-circle fa-1x"></i><span> Group name</span></h3>
                    <p class="text-center"><i class="fa-solid fa-location-dot"></i> Restaurant name</p>
                </div>
            </div>
        </div>


        <div class="container calendar-box">
            <div class="top-button">
                <div class="row">
                    {{-- hover button --}}
                    <div class="col-10 calender-hover">
                        <label class="rocker">
                            <input type="checkbox" class="hover-check">
                            <span class="switch-left">M</span>
                            <span class="switch-right switch-right-private">W</span>
                        </label>
                    </div>

                    <div class="col-2">
                        <a href="#" class="btn btn-create-plan mt-2" data-bs-toggle="modal" data-bs-target="#preference-modal"><i class="fa-regular fa-calendar-plus fa-3x"></i></a>
                    </div>
                </div>
            </div>

            <div class="monthly-calendar">
                <div class="w-100 calendar-button">
                    <div class="pre-button d-flex align-items-center justify-content-center pt-4"><i class="fa fa-chevron-left fw-bold"></i>
                    </div>
                    <h1 class="d-flex align-items-center justify-content-center display-4">
                        September
                    </h1>
                    <div class="next-button d-flex align-items-center justify-content-center pt-4"><i class="fa fa-chevron-right"></i>
                    </div>
                </div>
                <table id="private-calendar">
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
                            <td>
                                <button type="button" class="btn btn-detail" data-bs-toggle="modal" data-bs-target="#preferenceList-modal">1</button>
                            </td>
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
    </div>
</div>
@include('users.modals.preference')
@include('users.modals.preferencelist')
@endsection
