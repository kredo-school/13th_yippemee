@extends('layouts.app')
@section('title', 'Decide by date')
@section('content')

<div class="calendar-bg-image">
    <div class="container container-calendar">
        <div class="box title-box">
            <div class="row title-area">
                <h1 class="title-div my-auto">
                    <i class="fa-regular fa-calendar" style="color: #253c5c;"></i> Decide by Date
                </h1>
                <p>Let's check what your friends are craving, and add yours too.</p>
            </div>
            <div class="row plan-box">
                <div class="accordion accordion-flush" id="accordionPlan">
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingPlan">
                            <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <h4 class=accordion-title><span>Created plans</span></h4>
                            </button>
                        </div>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionPlan">
                            <div class="accordion-body">
                                {{-- @if / foreach --}}
                                <button type="button" class="btn w-100" data-bs-toggle="modal" data-bs-target="#detail-modal">
                                    <div class="row plan-row">
                                        <div class="col-2 time-col">
                                            <div class="row">11:30</div>
                                            <div class="row">12:30</div>
                                        </div>
                                        <div class="col-7 name-col">User 1</div>
                                        <div class="col-1 avatar-col"><i class="fa-regular fa-circle-user fa-2x" style="color: #253c5c;"></i></div>
                                    </div>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="box calendar-box">
            <div class="row w-75 top-button">
                {{-- hover button --}}
                <div class="col-10 calender-hover w-25">
                    <label class="rocker">
                        <input type="checkbox" class="hover-check">
                        <span class="switch-left">M</span>
                        <span class="switch-right">W</span>
                    </label>
                </div>

                <div class="col-2">
                    <a href="#" class="btn btn-create-plan mt-2 me-2" data-bs-toggle="modal" data-bs-target="#create-plan"><i class="fa-regular fa-calendar-plus fa-3x"></i></a>
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
                <table id="public-calendar">
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
    </div>
</div>
    @include('users.modals.create')
    @include('users.modals.detail')
@endsection
