<div class="row align-items-center">

    <div class="col">
        @if($social_post->isLiked())
            <form action="{{ route('social.posts.unlike', $social_post->id) }}" method="POST">
                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-sm shadow-none ps-0 like-button"><i class="fa-solid fa-heart text-danger"></i></button>
                @if($social_post->likes->count() > 0)
                    <button type="button" class="btn shadow-none ps-0" data-bs-toggle="modal" data-bs-target="#likes-modal-{{ $social_post->id }}">{{ $social_post->likes->count() }}</button>
                @endif
            </form>
        @else
            <form action="{{ route('social.posts.like', $social_post->id) }}" method="POST">
                @csrf
                <button type="submit" class="like-button"><i class="fa-regular fa-heart"></i></button>
                @if($social_post->likes->count() > 0)
                    <button type="button" class="btn shadow-none ps-0 like-button" data-bs-toggle="modal" data-bs-target="#likes-modal-{{ $social_post->id }}">{{ $social_post->likes->count() }}</button>
                @endif
            </form>
        @endif
        @include('social.posts.modal.likes')
    </div>

    <div class="col" style="padding: 0">
        @if($social_post->iswanted())
            <form action="{{ route('social.contents.want.destroy', $social_post->id) }}" method="POST">
                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-sm shadow-none ps-0 want-button"><i class="fa-solid fa-utensils text-success"></i></button>
                @if($social_post->wants->count() > 0)
                    <button type="button" class="btn shadow-none" data-bs-toggle="modal" data-bs-target="#wants-modal-{{ $social_post->id }}">{{ $social_post->wants->count() }}</button>
                @endif
            </form>
        @else
            <form action="{{ route('social.contents.want', $social_post->id) }}" method="POST">
                @csrf
                <button type="submit" class="want-button"><i class="fa-solid fa-utensils text-secondary"></i></button>
                @if($social_post->wants->count() > 0)
                    <button type="button" class="btn shadow-none want-button" data-bs-toggle="modal" data-bs-target="#wants-modal-{{ $social_post->id }}">{{ $social_post->wants->count() }}</button>
                @endif
            </form>
        @endif
        @include('social.posts.modal.wants')
    </div>

    <div class="col-md-4 text-end">
        <div class="dropdown">
            <button class="btn btn-sm shadow-none" data-bs-toggle="dropdown">
                <i class="fa-solid fa-ellipsis"></i>
            </button>
            <div class="dropdown-menu">
                <a href="{{ route('social.posts.edit', $social_post->id) }}" class="dropdown-item">
                    <i class="fa-solid fa-pen-to-square text-post"></i> Edit
                </a>
                <button class="dropdown-item text-danger" data-bs-toggle="modal" data-bs-target="#delete-post-{{ $social_post->id }}">
                    <i class="fa-solid fa-trash-can"></i> Delete
                </button>
            </div>
        </div>
    </div>
</div>
