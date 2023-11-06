<div class="col-9">
    <div class="row visit_body_line">
        @forelse($all_visits as $visit)
        <div class="col-4 ms-4 mb-3 mt-3">
            <img src="{{ $visit->image }}" alt="{{ $visit->id }}" class="w-100">
        </div>

        <div class="visit-show col-7">
            <div class="row">
                <div class="col-10 mt-3">
                    <h4 class="fw-bold">{{ $visit->restaurantName}}</h4>
                </div>

                <div class="col-2">
                    <div class="dropdown mt-3">
                        <button class="btn btn-sm shadow-none" data-bs-toggle="dropdown">
                            <i class="fa-solid fa-ellipsis"></i>
                        </button>

                        <div class="dropdown-menu">

                        <a href="{{ route('visits.edit', $visit->id) }}" class="dropdown-item">
                                <i class="fa-regular fa-pen-to-square"></i> Edit
                        </a>

                        <a href="#" class="dropdown-item text-danger">
                            <i class="fa-regular fa-trash-can" data-bs-toggle="modal" data-bs-target="#delete-visits"></i> Delete
                        </a>
                        </div>
                        {{-- Include Modal here --}}
                        @include('users.visits.modals.delete')
                    </div>
                </div>

                <div class="mt-0 mb-0">
                    {{ $visit->date }}
                </div>

                <div class="mt-0 mb-2">
                    <i class="fa-solid fa-star"></i>{{ $visit->star_rating }}
                </div>

                <h5><p class="d-inline fw-light">
                    {{ $visit->description }}</p>
                </h5>

            @empty
            <div class="text-center">
                <h2>Make your Visit List</h2>
            </div>
            @endforelse
            </div>
        </div>

    </div>
</div>
