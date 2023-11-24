<div class="row align-items-center justify-content-between">
    <div class="col text-start">
        @if($social_post->user->avatar)
            <img src="{{ $social_post->user->avatar }}" alt="{{ $social_post->user->avatar }}" class="rounded-circle user-avatar">
        @else
            <i class="fa-solid fa-circle-user text-secondary user-icon"></i>
        @endif
        <a href="{{ route('profile.show', ['id' => $social_post->user->id]) }}" class="text-decoration-none text-post"><strong>{{ $social_post->user->name }}</strong></a>
    </div>
    <div class="col-auto">
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

    <div class="col-auto">
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
                    <button type="button" class="btn shadow-none ps-0 want-button" data-bs-toggle="modal" data-bs-target="#wants-modal-{{ $social_post->id }}">{{ $social_post->wants->count() }}</button>
                @endif
            </form>
        @endif
        @include('social.posts.modal.wants')
    </div>

</div>
