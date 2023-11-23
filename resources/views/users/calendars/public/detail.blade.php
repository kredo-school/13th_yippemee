<div class="container detail-body">
    @if (!is_null($selected_plan))
        <p class="text-end" style="color:#253c5c;">
            {{ $selected_plan->user->name }}
            @if ($selected_plan->avatar)
                <img id="#" src="{{ $selected_plan->avatar }}"
                alt="{{ $selected_plan->user->username }}" class="rounded-circle" style="height: 45px; width:45px;">
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
                <i class="fa-solid fa-circle-user" style="color: #1f5120;"></i>
                <i class="fa-solid fa-circle-user" style="color: #8b3768;"></i>
                <i class="fa-solid fa-circle-user" style="color: #e6bf33;"></i>
            </div>
            <div class="col-1">
                <a href="#"><i class="fa-solid fa-angles-right" style="color: #253c5c;"></i></a>
            </div>
        </div>
        <div class="row comment-form">
            <div class="comment-area">
                <h5>Comments:</h5>
                <div class="comment-screen">
                    <div class="row user-comment w-100">
                        <div class="col-2"><i class="fa-regular fa-user-circle fa-xl"></i></div>
                        <div class="col-10">
                            <div class="row user-name">@user_1</div>
                            <div class="row one-comment">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi deleniti eveniet aperiam non maxime placeat odio, reiciendis atque eius optio?</div>
                        </div>
                    </div>

                    <div class="row user-comment w-100">
                        <div class="col-2"><i class="fa-regular fa-user-circle fa-xl"></i></div>
                        <div class="col-10">
                            <div class="row user-name">@user_1</div>
                            <div class="row one-comment">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi deleniti eveniet aperiam non maxime placeat odio, reiciendis atque eius optio?</div>
                        </div>
                    </div>
                </div>
            </div>
            <form action="#" method="post">
                <div class="input-group comment">
                    <input type="text" class="form-control form-comment" placeholder="Comment" aria-label="Comment" aria-describedby="comment-form">
                    <button class="btn btn-comment" type="button" id="comment-form"><i class="fa-solid fa-paper-plane fa-white"></i></button>
                </div>
            </form>
        </div>
        <form action="#" method="post" class="float-end">
            {{-- could be checkbox...? --}}
            <button type="submit" class="btn btn-join"><span>JOIN <i class="fa-solid fa-person-walking-arrow-right" style="color: #253c5c;"></i></span></button>
            {{-- add undo button --}}
        </form>
    @else
        <p class="text-end" style="color:#253c5c;">Plan Detail</p>
        <h5 class="text-center pt-5" style="color:gray;">Select from Plan List</h5>
    @endif
</div>

