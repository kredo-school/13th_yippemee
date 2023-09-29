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

        {{-- month --}}
        {{-- カレンダーの左側の部分をとって左右から出てくるモーダルに情報を入れるようにする --}}
        {{-- ホバーボタンをカレンダーのdivの中に入れる --}}
        <div class="row">
            <div class="col-md-12">
                        <div class="elegant-calencar d-md-flex">
                            {{-- <div class="wrap-header d-flex align-items-center img" >
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
                            </div> --}}
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
                                            <td>
                                                <button type="button" class="btn btn-day" data-toggle="modal" data-target="#detail-modal">
                                                   1
                                                </button>
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
        </div>
    </div>
    @include('users.modals.detail')
@endsection
