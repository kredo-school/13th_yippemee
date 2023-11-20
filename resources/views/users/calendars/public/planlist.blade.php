<div class="container plan-body" id="planList">
    <p class="text-center" style="color:#253c5c;"><i class="fa-regular fa-clipboard"></i> Created Plan List</p>

    <div class="planlist-date" id="displayDate">【{{$selected_date}}】</div>

    @if ($plans->isNotEmpty())
    <div class="list-group">
        @foreach ($plans as $plan)
        <a href="{{ route('plan.show', ['date' => date('Ymd'), 'id' => $plan->id ]) }}" class="btn-detail text-decoration-none">
            <div class="col-auto time-col">
                {{ $plan->s_time }}
                {{ $plan->e_time }}
            </div>
            <div class="col-7 name-col">{{ $plan->user->name }}</div>
            <div class="col-auto avatar-col">
            @if ($plan->user->avatar)
                <img id="#" src="{{ $plan->user->avatar }}"
                alt="{{ $plan->user->username }}" class="rounded-circle" style="height: 100%; width:100%;">
            @else
                <i class="fa-regular fa-circle-user fa-2x" style="color: #253c5c;"></i>
            @endif
            </div>
        </a>
        @endforeach
    </div>
    @else
        <h5 class="pt-3 ps-3" style="color: gray">No plans added yet</h5>
    @endif
</div>

