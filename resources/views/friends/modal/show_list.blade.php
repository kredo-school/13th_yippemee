<!-- views/friends/modal/show_list.blade.php -->
<div class="modal fade" id="showlist-modal">
    <div class="modal-dialog">
        <div class="modal-content border">
            <div class="modal-header">
                <h5 class="modal-title mx-auto"><i class="fa-solid fa-users text-success"></i> Maybe a friend?</h5>
            </div>
            <div class="modal-body mb-2">
                <div class="container col-8">
                    @if(isset($users) && $users->count() == 0)
                        <p class="text-muted lead text-center">There are no applicable persons.</p>
                    @elseif(isset($users))

                        <form action="{{ route('friends.add') }}" method="post">
                            @csrf
                            @foreach($users as $user)
                                <div class="row justify-content-center align-items-center mt-3">
                                    <!--checkbox-->
                                    <div class="col-1">
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" name="name[]" id="{{ $user->name }}" value="{{ $user->id }}" class="form-check-input">
                                        </div>
                                    </div>
                                    <!--avator-->
                                    <div class="col-1">
                                        <a href="#">
                                            @if($user->avatar)
                                                <img src="#" alt="#" class="rounded-circle user-avatar">
                                            @else
                                                <i class="fa-solid fa-circle-user text-secondary user-icon"></i>
                                            @endif
                                        </a>
                                    </div>
                                    <!--username-->
                                    <div class="col">
                                        <a href="#" class="text-decoration-none text-dark fw-bold">{{ $user->name }}</a>
                                    </div>
                                    
                                </div>
                            @endforeach
                    
                            <div class="modal-footer d-flex justify-content-center border-0"> 
                                <button type="submit" class="btn btn-success me-2">Add</button>
                                <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </form>

                    @endif    
                </div>
            </div>
        </div>
    </div>
</div>




{{-- <div class="modal fade" id="showlist-modal">
    <div class="modal-dialog">
        <div class="modal-content border">
            <div class="modal-header">
                <h5 class="modal-title mx-auto"><i class="fa-solid fa-users text-primary"></i>Maybe a friend?</h5>
            </div>
            <div class="modal-body mb-2">
                <div class="container col-8">
                    @if(isset($users) && $users->count() == 0)
                        <p class="text-muted lead text-center">There are no applicable persons.</p>
                    @else
                        @foreach($users as $user)
                            <div class="row justify-content-center align-items-center mt-3">
                                <div class="col-auto">
                                    <a href="#">
                                        @if($user->avatar)
                                            <img src="#" alt="#" class="rounded-circle user-avatar">
                                        @else
                                            <i class="fa-solid fa-circle-user text-secondary user-icon"></i>
                                        @endif
                                    </a>
                                </div>
                                <div class="col ps-1 text-truncate">
                                    <a href="#" class="text-decoration-none text-dark fw-bold small">{{ $user->name }}</a>
                                </div>

                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div> --}}

{{-- 
<!-- Home -->
<div class="modal fade" id="showlist-modal-{{ $user }}">
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
</div> --}}