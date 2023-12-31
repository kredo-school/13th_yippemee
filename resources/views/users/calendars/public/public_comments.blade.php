<div class="row">
    <div class="comments-area">
        <div class="comments-body">
            @if ($selected_plan->publicComments && $selected_plan->publicComments->isNotEmpty())
                @foreach ($selected_plan->publicComments as $public_comment)  
                
                    <div class="row border-0 p-0 mx-2">
                        <div class="col-auto">
                            <a href="#" class="text-decoration-none text-post"><strong>{{ $public_comment->user->name }}</strong></a> &nbsp;
                        </div>
                        <div class="col-auto small text-muted">
                            {{ \Carbon\Carbon::parse($public_comment->created_at)->diffForHumans() }}
                        </div>
                    </div>

                    <div class="row mx-2 mb-1">
                        <div class="col">
                            <p class="d-inline fw-light" style="color:#253c5c;">{{ $public_comment->body }}</p>
                        </div>
                    </div>

                @endforeach

            @endif 
        </div>
        
        
        <form action="{{ route('public_comment.store', ['plan_id'=> $selected_plan->id]) }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="input-group comment">
                {{-- <input type="text" class="form-control form-comment" placeholder="Comment" aria-label="Comment" aria-describedby="comment-form"> --}}
                <textarea name="comment_body{{ $selected_plan->id }}" rows="1" class="form-control form-control-sm" placeholder="Add a Comment...">{{ old('comment_body'. $selected_plan->id) }}</textarea>
                <button type="submit" class="btn btn-comment" type="button" id="comment-form"><i class="fa-solid fa-paper-plane fa-white"></i></button>
            </div>

            
            {{-- <div class="input-group py-2">
                <textarea name="comment_body{{ $selected_plan->id }}" rows="1" class="form-control form-control-sm" placeholder="Add a Comment...">{{ old('comment_body'. $selected_plan->id) }}</textarea>
                <button type="submit" class="btn btn-post btn-sm">Post</button>
            </div>
             --}}
        </form>
    </div>

</div>