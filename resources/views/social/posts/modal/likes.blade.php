<!-- Show post -->
<div class="modal fade" id="likes-modal-{{ $social_post->id }}">
    <div class="modal-dialog">
        <div class="modal-content border">
            <div class="modal-header">
                <h5 class="modal-title mx-auto"><i class="fa-solid fa-heart text-danger"></i> Likes</h5>
            </div>
            <div class="modal-body mb-2">
                <div class="container col-8">
                    @if($social_post->likes->count() == 0)
                        <p class="text-muted lead text-center">This post hasn't been getting likes.</p>
                    @endif
                    @foreach($social_post->likes as $like)
                        <div class="row justify-content-center align-items-center mt-3">
                            <div class="col-auto">
                                <a href="#">
                                    @if($like->user->avatar)
                                        <img src="{{ $like->user->avatar }}" alt="{{ $like->user->avatar }}" class="rounded-circle user-avatar">
                                    @else
                                        <i class="fa-solid fa-circle-user text-secondary user-icon"></i>
                                    @endif
                                </a>
                            </div>
                            <div class="col ps-1 text-truncate">
                                <a href="#" class="text-decoration-none text-dark fw-bold small">{{ $like->user->name }}</a>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Home -->
<div class="modal fade" id="likes-post-{{ $social_post->id }}">
    <div class="modal-dialog">
        <div class="modal-content border">
            <div class="modal-header">
                <h5 class="modal-title mx-auto"><i class="fa-solid fa-heart text-danger"></i> Likes</h5>
            </div>
            <div class="modal-body mb-2">
                <div class="container col-8">
                    @if($social_post->likes->count() == 0)
                        <p class="text-muted lead text-center">This post hasn't been getting likes.</p>
                    @endif
                    @foreach($social_post->likes as $like)
                        <div class="row justify-content-center align-items-center mt-3">
                            <div class="col-auto">
                                <a href="#">
                                    @if($like->user->avatar)
                                        <img src="{{ $like->user->avatar }}" alt="{{ $like->user->avatar }}" class="rounded-circle user-avatar">
                                    @else
                                        <i class="fa-solid fa-circle-user text-secondary user-icon"></i>
                                    @endif
                                </a>
                            </div>
                            <div class="col ps-1 text-truncate">
                                <a href="#" class="text-decoration-none text-dark fw-bold small">{{ $like->user->name }}</a>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>