@extends('layouts.app')

@section('title', 'Visits')

@section('content')

{{-- Side bar --}}
<div class="col-2 mb-3 mt-3 ms-4">
    <div class="row bg-white container ms-auto me-auto shadow rounded-3 p-5w">

    <table class="table table-borderless">
        <tbody>
            <tr>
                <th scope="row"><i class="fa-regular fa-circle-user icon-sm"></i></th>
                <td class="profile">John Smith</td>
            </tr>
            <tr>
                <th scope="row"><i class="fa-regular fa-pen-to-square icon-sm"></i></th>
                <td class="profile">Post</td>
            </tr>
            <tr>
                <th scope="row"><i class="fa-regular fa-square-check icon-sm"></i></th>
                <td class="profile">Visits</td>
            </tr>
            <tr>
                <th scope="row"><i class="fa-solid fa-bucket icon-sm"></i></th>
                <td class="profile">Bucket Lists</td>
            </tr>
            <tr>
                <th scope="row"><i class="fa-solid fa-calendar-days icon-sm"></i></th>
                <td class="profile">Schedule</td>
            </tr>
            <tr>
                <th scope="row"><i class="fa-solid fa-people-group icon-sm"></i></th>
                <td class="profile">Groups</td>
            </tr>
        </tbody>
    </table>
    {{-- End od Side bar --}}

    {{-- Visits --}}
    <div class="col-6 mb-3 mt-3 ms-4">
        <div class="row bg-white container ms-auto me-auto shadow rounded-3 p-5w">


@endsection
