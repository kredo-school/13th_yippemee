@extends('layouts.app')

@section('title', 'My Plan')

@section('content')


    <div class="container my-5 margin-container">
        <div class="row mb-5">

            <div class="row">
                <div class="col  page-title">
                    <h2 class="text-center " >My Plans</h2>
                    <span class="bar bar-short mt-4"></span>
                </div>
            </div>

        </div>

        <div class="row mb-3">
            <div class="col-2 mb-auto">


            </div>

            @if ($plans->isNotEmpty())

            <div class="col-9 mb-3">
                <div class="admin-table">
                    <table class="table align-middle bg-white border">
                        <thead class="thead-plans">
                            <tr>
                                <th>plan ID</th>
                                <th>plan date</th>
                                <th>Start time</th>
                                <th>End time</th>
                                <th>Created At</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($plans->where('user_id', Auth::id()) as $plan)

                            <tr>
                                <td><a href="{{ route('plan.show', ['date' => date('Ymd')]) }}" class="text-decoration-none text-dark">{{ $plan->id }}</a></td>
                                <td>{{ $plan->date }}</td>
                                <td>{{ $plan->s_time }}</td>
                                <td>{{ $plan->e_time }}</td>
                                <td>{{ $plan->created_at }}</td>
                                <td>
                                    @if ($plan->trashed())
                                    <i class="fa-solid fa-calendar-xmark text-danger me-1"></i>Deactivate
                                    @else
                                    <i class="fa-solid fa-calendar text-success me-1"></i>Activate
                                    @endif
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm" data-bs-toggle="dropdown">
                                            <i class="fa-solid fa-calendar text-secondary"></i>
                                        </button>

                                        <div class="dropdown-menu menu-hover">
                                            @if ($plan->trashed())
                                            <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#activateModal-{{ $plan->id }}">
                                                <i class="fa-solid fa-calendar text-success me-1"></i>Activate
                                            </a>
                                            @else
                                            <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deactivateModal-{{ $plan->id }}">
                                                <i class="fa-solid fa-calendar-xmark text-danger me-1"></i>Deactivate
                                            </a>
                                            @endif
                                        </div>
                                        @include('admin.plans.modal.status.activate')
                                        @include('admin.plans.modal.status.deactivate')
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <li class="list-group-item d-flex align-items-center">
                                <p class="text-center">No Plan Yet.</p>
                            </li>
                            @endforelse
                        </tbody>
                    </table>
                    @endif
                </div>

            </div>
        </div>
    </div>
@endsection

