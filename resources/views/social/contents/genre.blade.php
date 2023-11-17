<div class="col text-end">
    @if($social_post->genres->isEmpty())
        <div class="badge bg-genre text-wrap mr-3">
            Uncategorized
        </div>
    @else
        @foreach($social_post->genres as $genre)
        <div class="badge bg-genre bg-opacity-50 text-wrap mr-3">
            {{ $genre->name }}
        </div>
        @endforeach
    @endif
</div>