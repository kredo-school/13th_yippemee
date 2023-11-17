
<div class="container col-8">
    @if($users->count() == 0)
        <p class="text-muted lead text-center">There are no applicable persons.</p>
    @else
        <form action="{{ route('friends.add') }}" method="post">
            @csrf

            @foreach($users as $user)
                <div class="row justify-content-center align-items-center mt-1">
                    <div class="col-1">
                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="friend_ids[]" value="{{ $user->id }}" class="form-check-input">
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
                    <!--name-->
                    <div class="col">
                        <a href="#" class="text-decoration-none text-dark fw-bold">{{ $user->name }}</a>
                    </div>
                    <!--username-->
                    <div class="col">
                        <a href="#" class="text-decoration-none text-dark fw-bold">{{ $user->username }}</a>
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