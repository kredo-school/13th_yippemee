@extends('layouts.app')
@section('title', 'public calendar')
@section('content')
<link href="{{ asset('css/public.css') }}" rel="stylesheet">

<div class="container calendar-title">
    <h2 class="text-center">Decide by Date</h2>
    <span class="bar bar-short mt-4"></span>
    <p class="text-center pt-4 mb-0">Let's check what your friends are craving,<br>and add yours too.</p>
</div>

<div class="left-navi">
    @include('users.calendars.public.planlist')
</div>

<div class="main-div">
    <div class="main-contents">
        <div class="top-button">
            <div class="row">
                <div class="col text-end">
                    <a href="#" class="btn btn-create-plan mt-2" data-bs-toggle="modal" data-bs-target="#create-plan"><i class="fa-regular fa-calendar-plus fa-3x"></i></a>
                </div>
            </div>
        </div>
        <div class="monthly-calendar">
            <div class="w-100 calendar-button text-center">
                <h1 class="text-center">
                    September
                </h1>
                <div class="pre-next-button justify-content-center">
                    <a href="#" class="text-decoration-none me-4"><i class="fa fa-chevron-left fw-bold" style="color: #253c5c;"></i></a>
                    <a href="#" class="text-decoration-none ms-4"><i class="fa fa-chevron-right" style="color: #253c5c;"></i></a>
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
                            <a href="#" class="button-to-list text-decoration-none">1</a>
                        </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td class="text-center">3</td>
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

<div class="right-navi">
    @include('users.calendars.public.detail')
</div>

{{-- modal --}}
@include('users.modals.create')
@endsection
