<div class="col-9">
    <div class="row">
        
        @forelse ($all_buckets as $bucket)
        <div class="col-4 mt-3 mb-2">
            <div class="card" style="width: 18rem; text-align: left" >
            <img src="{{ $bucket->image }}" alt="{{ $bucket->id }}" class="img-size-bucket">
                <div class="card-body card-body-visit">
                     <div class="container row container-text-bucket">
                        <div class="col-10">
                            <h4 class="card-title fw-bold ps-0" style="color: #253C5C">{{ $bucket->restaurantName }}</h4>
                        </div>

                        <div class="col-2">
                            <div class="dropdown">
                                <button class="btn btn-sm shadow-none" data-bs-toggle="dropdown">
                                <i class="fa-solid fa-ellipsis"></i>
                                </button>

                                <div class="dropdown-menu">
                                    <form action="{{ route('bucket.edit', $bucket->id) }}"  method="post" class="dropdown-item">
                                        <a href="#" class="dropdown-item">
                                            <i class="fa-regular fa-pen-to-square"></i> Edit
                                        </a>
                                    </form>

                                    <a href="#" class="dropdown-item text-danger">
                                        <i class="fa-regular fa-trash-can" data-bs-toggle="modal" data-bs-target="#delete-bucket-{{ $bucket->id }}"></i> Delete
                                    </a>
                                </div>
                                @include('users.bucket.modals.delete')
                            </div>
                        </div>
                    </div>
                        <ul class="bucketlist_body ms-3 bucket-card">
                            <li>
                                @foreach ($bucket->bucketGenre as $bucket_genre)
                                <div class="badge fw-light bg-opacity-50" style="background-color: #F1A29B">
                                    {{ $bucket_genre->genre->name }}
                                </div>
                                @endforeach
                            </li>

                            <li><i class="fa-regular fa-clock"></i>
                                {{ $bucket->hoursOption }}
                            </li>

                            <li class="bucketScroll mt-2 mb-3">{{ $bucket->description }}</li>

                            <li>
                                <a href="{{ $bucket->url }}"><div class="only-background"><i class="fa-solid fa-arrow-up-right-from-square"></i> Website</div>
                                </a>
                            </li>
                        </ul>
                </div>
            </div>
        </div>
        @empty
        <h4>Make your Bucket List</h4>
        @endforelse
    </div>
</div>



