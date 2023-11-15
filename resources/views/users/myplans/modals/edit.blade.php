<div class="modal fade" id="edit_plan" tabindex="-1" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog">
    <div class="modal-content modal-myplan">
        <div class="modal-header modal-header-profile" style="margin-left: 250px">
        <h1 class="modal-title fs-5" id="edit_plan">
            <form action="#" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <h2 class="mb-0 fw-bold">Edit Plan</h2>
            <span class="bar bar-short mt-4"></span>
        </h1>
        </div>

        <div class="modal-body modal-body-profile">

        <div class="modal-profile-edit mb-4">
            <label for="date" class="form-label fw-bold mb-1">Date</label>
            <input type="date" name="" id="" value="" class="form-control" autofocus>
        </div>

        <div class="modal-profile-edit mb-4">
            <label for="time" class="form-label fw-bold mb-1">Time</label>
            <input type="time" name="time" id="time" value="" class="form-control" autofocus>
        </div>

        <div class="modal-profile-edit mb-4">
            <label for="restaurant" class="form-label fw-bold mb-1">Place</label>
            <input type="text" name="" id="" value="" class="form-control" autofocus>
        </div>

        <div class="modal-profile-edit mb-4">
            <label for="group" class="form-label fw-bold mb-1">Group</label>
            <input type="text" name="group" id="group" value="" class="form-control" autofocus>
        </div>

        <div class="modal-profile-edit mb-4">
            <label for="memo" class="form-label fw-bold mb-0">Memo</label>
            <textarea name="memo" id="memo" rows="3" class="form-control"></textarea>
        </div>

        <div class="modal-footer modal-footer-myplan">
            <a href="{{ route('myplans.show', $user->id) }}" class="btn btn--green btn--cubic px-5">Cancel</a>
            <a href="{{ route('myplans.show', $user->id) }}" class="btn btn--yellow btn--cubic px-5">Save</a>
        </div><!-- /.modal-footer -->
    </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
