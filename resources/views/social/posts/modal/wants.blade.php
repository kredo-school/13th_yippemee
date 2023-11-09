
<!-- Show post -->
<div class="modal fade" id="wants-modal-{{ $social_post->id }}">
    <div class="modal-dialog">
        <div class="modal-content border">
            <div class="modal-header">
                <h5 class="modal-title mx-auto"><i class="fa-solid fa-utensils text-success"></i> Wanna Go</h5>
            </div>
            <div class="modal-body mb-2">
                <div class="container col-8">
                    @if($social_post->wants->count() == 0)
                        <p class="text-muted lead text-center">This post hasn't been getting "Wanna Go".</p>
                    @endif
                    @foreach($social_post->wants as $want)
                        <div class="row justify-content-center align-items-center mt-3">
                            <div class="col-auto">
                                <a href="#">
                                    @if($want->user->avatar)
                                        <img src="{{ $want->user->avatar }}" alt="{{ $want->user->avatar }}" class="rounded-circle user-avatar">
                                    @else
                                        <i class="fa-solid fa-circle-user text-secondary user-icon"></i>
                                    @endif
                                </a>
                            </div>
                            <div class="col ps-1 text-truncate">
                                <a href="#" class="text-decoration-none text-dark fw-bold small">{{ $want->user->name }}</a>
                            </div>
                            
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Home -->
<div class="modal fade" id="wants-post-{{ $social_post->id }}">
    <div class="modal-dialog">
        <div class="modal-content border">
            <div class="modal-header">
                <h5 class="modal-title mx-auto"><i class="fa-solid fa-utensils text-success"></i> Wanna Go</h5>
            </div>
            <div class="modal-body mb-2">
                <div class="container col-8">
                    @if($social_post->wants->count() == 0)
                        <p class="text-muted lead text-center">This post hasn't been getting "Wanna Go".</p>
                    @endif
                    @foreach($social_post->wants as $want)
                        <div class="row justify-content-center align-items-center mt-3">
                            <div class="col-auto">
                                <a href="#">
                                    @if($want->user->avatar)
                                        <img src="{{ $want->user->avatar }}" alt="{{ $want->user->avatar }}" class="rounded-circle user-avatar">
                                    @else
                                        <i class="fa-solid fa-circle-user text-secondary user-icon"></i>
                                    @endif
                                </a>
                            </div>
                            <div class="col ps-1 text-truncate">
                                <a href="#" class="text-decoration-none text-dark fw-bold small">{{ $want->user->name }}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>