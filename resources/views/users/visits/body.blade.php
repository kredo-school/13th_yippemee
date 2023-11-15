<div class="col-9">
    <div class="row">

        @forelse($all_visits as $visit)
        <div class="row visit_body_line ms-1">
        <div class="col-4 mb-3 mt-3">
            <img src="{{ $visit->image }}" alt="{{ $visit->id }}" class="img-size-visit">
        </div>

        <div class="col-7">
            <div class="row">
                <div class="col-10 mt-3">
                    <h3 class="visit-show fw-bold">{{ $visit->restaurantName}}</h3>
                </div>

                <div class="col-2" style="text-align: right">
                    <div class="dropdown mt-3">
                    <button class="btn btn-sm shadow-none" data-bs-toggle="dropdown">
                        <h3><i class="fa-solid fa-ellipsis"></i></h3>
                    </button>

                    <div class="dropdown-menu">
                        <a href="{{ route('visits.edit', $visit->id) }}" class="dropdown-item">
                            <i class="fa-regular fa-pen-to-square"></i> Edit
                        </a>

                        <a href="#" class="dropdown-item text-danger">
                            <i class="fa-regular fa-trash-can" data-bs-toggle="modal" data-bs-target="#delete-visits"></i> Delete
                        </a>
                    </div>
                    @include('users.visits.modals.delete')
                    </div>
                </div>
            </div>

            <h3>
                <div class="visit-show reviewed mb-4">
                @for($i=1; $i<=$visit->star_rating; $i++)
                    <label class="text">{{$i}} stars</label>
                @endfor
                </div>
            </h3>

            <div class="visit-show mb-3 fw-bold">
                {{ $visit->date }}
            </div>



            <h5>
                <div class="col-11 visit-show">
                {{ $visit->description }}
                </div>
            </h5>

        </div>

    </div>

        @empty
            <div class="text-center">
                <h2>Make your Visit List</h2>
            </div>
        </div>
        @endforelse

</div>

{{-- <style>
    .reviewed {
    float: left;
    padding: 0;
    }

    .reviewed:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ffc700;
    }
    .reviewed:not(:checked) > label:before {
    content: '★ ';
    }
</style> --}}
