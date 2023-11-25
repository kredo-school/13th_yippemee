<div class="col-9">
    <div class="row">

        @if ($user->bucket->isNotEmpty())
        @foreach ($user->bucket as $bucket)
        <div class="col-4 mt-3 mb-2">
            <div class="card" style="width: 18rem; text-align: left; height:460px" >
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
                                    <form action="#" method="post">
                                        <a href="{{ route('bucket.edit', $bucket->id) }}" class="dropdown-item">
                                            <i class="fa-regular fa-pen-to-square"></i> Edit
                                        </a>
                                    </form>

                                    <form action="{{ route('bucket.destroy', $bucket->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="dropdown-item text-danger">
                                            <i class="fa-regular fa-trash-can" data-bs-toggle="modal" data-bs-target="#delete-bucket-{{ $bucket->id }}"></i> Delete
                                        </button>
                                    </form>

                                    {{-- <button class="dropdown-item text-danger">
                                            <i class="fa-regular fa-trash-can" data-bs-toggle="modal" data-bs-target="#delete-bucket-{{ $bucket->id }}"></i> Delete
                                    </button> --}}
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

                            <li class="bucketScroll mt-1 mb-1">{{ $bucket->description }}</li>

                            <li>
                                @if ($bucket->url)
                                <div class="only-background">
                                    <a href="{{ $bucket->url }}"><i class="fa-solid fa-arrow-up-right-from-square"></i> Website</a>
                                </div>
                                @else
                                @endif
                            </li>
                        </ul>
                </div>
            </div>
        </div>
        @endforeach
        @else
            <h4>
                <a href="{{ route('bucket.create') }}" class="list-group-item list-group-item-action py-2 ripple">
                Make your Bucket List
                <span><i class="fa-solid fa-bucket me-3 link-place" style="font-size: 20px"></i></span></a>
            </h4>
    </div>
        @endif
</div>

