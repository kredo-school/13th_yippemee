<div class="row">
    <div class="mt-1">
        <form action="{{ route('social_comment.store', ['social_post_id' => $id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            
            <div class="input-group py-2">
                <textarea name="comment_body{{ $social_post->id }}" rows="1" class="form-control form-control-sm" placeholder="Add a Comment...">{{ old('comment_body'. $social_post->id) }}</textarea>
                <button type="submit" class="btn btn-post btn-sm">Post</button>
            </div>
            @error('comment_body' . $social_post->id)
            <p class="text-danger small">{{ $message }}</p>
            @enderror
        </form>

        @if ($social_post->comments && $social_post->comments->isNotEmpty())
            @foreach ($social_post->comments as $social_comment)  
            
                <div class="row border-0 p-0 mx-2 mt-2 mb-1 align-items-center">
                    <div class="col-auto">
                        <a href="{{ route('profile.show', ['id' => $social_comment->user->id]) }}" class="text-decoration-none text-post">
                            @if($social_comment->user->avatar)
                                <img src="{{ $social_comment->user->avatar }}" alt="{{ $social_comment->user->avatar }}" class="rounded-circle user-avatar">
                            @else
                                <i class="fa-solid fa-circle-user text-secondary user-icon"></i>
                            @endif
                            <strong>{{ $social_comment->user->username }}</strong>
                        </a> &nbsp;
                    </div>
                    <div class="col-auto small text-muted">
                        {{ \Carbon\Carbon::parse($social_comment->created_at)->diffForHumans() }}
                    </div>
                </div>

                <div class="row mx-2 mb-2">
                    <div class="col">
                        <p class="d-inline fw-light">{{ $social_comment->body }}</p>
                    </div>
                </div>

            @endforeach

        @endif    
    </div>

</div>