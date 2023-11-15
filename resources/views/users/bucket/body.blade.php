<div class="col-9">
    <div class="row">
        @forelse ($all_buckets as $bucket)
        <div class="col-4 mt-3 mb-2">
            <div class="card" style="width: 18rem; text-align: left" >
            <img src="{{ $bucket->image }}" alt="{{ $bucket->id }}" class="img-size-bucket">
                <div class="card-body card-body-visit">
                     <div class="container row container-text-bucket">
                        <div class="col-10">
                            <h5 class="card-title fw-bold ps-0" style="text-align: left">{{ $bucket->restaurantName }}</h5>
                        </div>
                        <div class="col-2">
                            <div class="dropdown">
                                <button class="btn btn-sm shadow-none" data-bs-toggle="dropdown">
                                <i class="fa-solid fa-ellipsis"></i>
                                </button>
                                <div class="dropdown-menu">
                                    {{-- Modal Button --}}
                                    <a href="{{ route('bucket.edit', $bucket->id) }}" class="dropdown-item">
                                    <i class="fa-regular fa-pen-to-square"></i> Edit</a>

                                    <button type="button" class="dropdown-item item-delete" data-bs-toggle="modal" data-bs-target="#delete-bucket-{{ $bucket->id }}">
                                        <i class="fa-regular fa-trash-can"></i> Delete
                                    </button>
                                </div>
                                {{-- Include Modal here --}}
                                @include('users.bucket.modals.delete')
                            </div>
                        </div>
                    </div>
                        <ul class="bucketlist_body ms-3 bucket-card">
                            <li>
                                @foreach ($bucket->bucketGenre as $bucket_genre)
                                {{ $bucket_genre->genre->name }}
                                @endforeach
                            </li>
                            <li>{{ $bucket->hoursOption }}</li>
                            <li>{{ $bucket->description }}</li>
                            <li><a href="{{ $bucket->url }}">{{ $bucket->url }}</a></li>
                            <li><button type="submit" class="btn btn-lg shadow-none ps-0"><i class="fa-solid fa-square-check link-place"></i></button></li>
                                {{-- <button type="submit" class="btn btn-lg shadow-none ps-0"><i class="fa-solid fa-globe link-place"></i>{{ $bucket->url }}</button> --}}
                        </ul>
                </div>
            </div>
        </div>
        @empty
        <h4>Make your Bucket List</h4>
        @endforelse
    </div>
</div>
