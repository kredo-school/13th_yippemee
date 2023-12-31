<div class="modal fade" id="delete{{ $group['id'] }}">
    <div class="modal-dialog delete-dialog modal-xl">
        <div class="modal-content delete-content">
            <div class="modal-header delete-header w-100">
                <div class="row w-100" >
                    <h1 class="mt-2 ms-3"><i class="fa-solid fa-trash-can" style="color: #dc3545"></i> Delete the group:</h1>
                </div>
            </div>
            <div class="modal-body delete-body">
                <div class="row">
                    <p>Are you sure you want to delete this group?</p>
                </div>
                <div class="row">
                    <img src="{{ asset('storage/images/' . $group->image) }}" alt="{{ $group->name }}" id="modal-image">
                </div>
                <div class="row name">
                    <div class="group-name">{{ $group->name }}</div>
                </div>
            </div>
            <div class="modal-footer delete-footer bg-white border-0 mb-2">
                <form action="{{ route('group.destroy', $group->id) }}" method="post">
                    @csrf
                    @method('DELETE')

                    <a href="{{ route('group_list') }}" class="btn calncel-btn" data-bs-dismiss="modal">Cancel</a>
                    <button type="delete" class="btn g-delete-btn float-end">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

