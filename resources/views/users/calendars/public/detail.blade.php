 
<div class="container detail-body">
    @if (!is_null($selected_plan))
        <p class="text-end" style="color:#253c5c;">
            {{ $selected_plan->user->name }}
            @if ($selected_plan->avatar)
                <img id="#" src="{{ $selected_plan->avatar }}"
                alt="{{ $plan->user->username }}" class="rounded-circle" style="height: 45px; width:45px;">
            @else
                <i class="fa-regular fa-circle-user fa-2x" style="color: #253c5c;"></i>
            @endif
        </p>
        <div class="preference">
            <div class="pre-title">【Details】</div>
            <div class="pre-detail">
                <div class="row">
                    <div class="col-auto"><i class="fa-regular fa-clock"></i>{{ $selected_plan ->date}}</div>
                    <div class="col-auto ps-2">{{ $selected_plan ->s_time}} - {{ $selected_plan ->e_time }}</div>

                </div>
                <div class="row">
                    <div class="col-auto"><i class="fa-solid fa-shop"></i></div>
                    <div class="col-auto ps-2">{{ $selected_plan ->restaurant_id }}</div>
                </div>
                <div class="row">
                    <div class="col-auto"><i class="fa-solid fa-utensils"></i></div>
                    <div class="col-auto ps-2">
                        @if ($selected_plan ->genres)
                            @foreach($selected_plan ->genres as $genre)
                            <div class="badge bg-genre bg-opacity-50 text-wrap mr-3">
                                {{ $genre->name }}
                            </div>
                            @endforeach
                        @else
                            No genres selected
                        @endif

                    </div>
                </div>
            </div>

            <div class="pre-border"></div>

            <div class="pre-description">【Description】</div>
            <div class="pre-comment">{{ $selected_plan ->description }}</div>
        </div>
        <div class="row">
            <div class="col-5 hidden"></div>
            <div class="col-1">
                <i class="fa-solid fa-user-check" style="color: #253c5c;"></i>
            </div>
            <div class="col-4">
            <div class="joined-users">
                @foreach ($selected_plan->joinedUsers as $joinedUser)
                    @if($joinedUser->avatar)
                        <div class="col">
                            <img src="{{ $joinedUser->avatar}}" alt="{{ $joinedUser->name }}" class="rounded-circle" style="height:100%; width:100%;">
                            {{ $joinedUser->name }}
                        </div>
                    @else
                        <div class="col">
                            <i class="fa-regular fa-circle-user fa-1x" style="color:#253c5c;">
                            {{ $joinedUser->name }}</i>
                        </div>
                    @endif               
                @endforeach
            </div>
                
            </div>
            <div class="col-1">
                <a href="#"><i class="fa-solid fa-angles-right" style="color: #253c5c;"></i></a>
            </div>
        </div>
        <div class="row comment-form">
            <div class="comment-area">
                <h5>Comments:</h5>
                @include('users.calendars.public.public_comments',['plan_id'=> $selected_plan->id])
            </div>
        </div>
            </div>
    
            @if (Auth::check() && $selected_plan->isJoined(Auth::user()))
            
            <form action="{{ route('join_group.destroy', ['plan_id' => $selected_plan->id]) }}" method="post" class="float-end">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-join"><span>UNJOIN <i class="fa-solid fa-person-walking-arrow-right" style="color: #253c5c;"></i></span></button>
            </form>
        @elseif(Auth::check())
            <form action="{{ route('join_group.store', ['plan_id' => $selected_plan->id]) }}" method="post" class="float-end">
                @csrf
                <button type="submit" class="btn btn-join"><span>JOIN <i class="fa-solid fa-person-walking-arrow-right" style="color: #253c5c;"></i></span></button>
            </form>
        @endif
    @else
        <p class="text-end" style="color:#253c5c;">Plan Detail</p>
        <h5 class="text-center pt-5" style="color:gray;">Select from Plan List</h5>
    @endif
</div>
