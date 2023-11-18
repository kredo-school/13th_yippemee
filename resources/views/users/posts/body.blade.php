@if (isset($social_posts) && $social_posts->count() > 0)
    <div class="col-9">
        <div class="row delete_display_flex">
            @foreach($social_posts as $social_post)
            @if($social_post->user_id == Auth::id())
                <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                    <div class="post">
                        <div class="card border-0">
                            @include('social.contents.body', ['id' => $social_post->id])
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
        </div>
    </div>
@else
    <div class="col-9">
        <p>No posts to display.</p>
    </div>
@endif
