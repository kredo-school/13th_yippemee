<div class="container plan-body" id="preferenceList">
    <p class="text-center" style="color:#253c5c;"><i class="far fa-clipboard"></i> Preference List</p>
    {{-- <div class="planlist-date" id="displayDate">&#8203;``【oaicite:3】``&#8203;</div> --}}
    <div class="preferencelist-date" id="displayDate">
        @if(isset($selected_date))
            &#8203;【{{ $selected_date ?? '' }}】&#8203;
        @else
            &#8203;【{{date('Ymd')}}】&#8203;
        @endif
        {{-- <div class="preferencelist-date" id="displayDate">
            &#8203;&#8203;``【oaicite:0】``&#8203;&#8203;
        </div> --}}
    </div>
    @isset($preferences)
        @if ($preferences->isNotEmpty())
            <div class="list-group">
                @foreach ($preferences as $preference)
                {{-- {{ route('preference.show', ['group'  => $group, 'date' => date('Ymd', strtotime($selected_date)), 'id' => $preference->id ]) }} --}}
                    <a href="#" class="btn-detail text-decoration-none">
                        <div class="col-auto time-col">
                            {{ $preference->s_time }} - {{ $preference->e_time }}
                        </div>
                        <div class="col-7 name-col">{{ $preference->user->name }}</div>
                        <div class="col-auto avatar-col">
                            @if ($preference->user->avatar)
                                <img id="#" src="{{ $preference->user->avatar }}" alt="{{ $preference->user->username }}" class="rounded-circle" style="height: 40px; width:40px;">
                            @else
                                <i class="far fa-circle-user fa-2x" style="color: #253C5C;"></i>
                            @endif
                        </div>
                    </a>
                @endforeach
            </div>
        @else
            <h5 class="pt-3 ps-3" style="color: gray">Nothing added yet</h5>
        @endif
    @endisset
</div>
