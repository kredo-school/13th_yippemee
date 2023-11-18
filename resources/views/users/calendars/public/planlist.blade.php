<div class="container plan-body" id="planList">
    <p class="text-center" style="color:#253c5c;"><i class="fa-regular fa-clipboard"></i> Created Plan List</p>

    <div class="planlist-date">{{--date('F d Y', strtotime($plan->date))--}} 1 November 2023</div>
    <div class="list-group">

    @if ($plans->isNotEmpty())
        @foreach ($plans as $plan)
        <a href="#" class="btn-detail text-decoration-none">
            <div class="col-auto time-col">
                {{ $plan->s_time }}
                {{ $plan->e_time }}
            </div>
            <div class="col-7 name-col">{{ $plan->user->name }}</div>
            <div class="col-auto avatar-col">
            @if ($user->avatar)
                <img src="{{ $plan->user->avatar }}"
                alt="{{ $plan->user->username }}" class="rounded-circle" style="height: 100%; width:100%;">
            @else
                <i class="fa-regular fa-circle-user fa-2x" style="color: #253c5c;"></i>
            @endif
            </div>
        </a>
        @endforeach

    @else
        <p>No plans added yet</p>
    @endif

    </div>
</div>
