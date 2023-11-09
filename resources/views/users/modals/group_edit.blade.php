<div class="modal fade" id="edit{{ $group['id'] }}" aria-hidden="true">
    <div class="modal-dialog edit-dialog modal-xl">
        <div class="modal-content edit-content">
            <div class="modal-header edit-header w-100">
                <div class="row w-100">
                    <h1 class="mt-2 ms-3"><i class="fa-regular fa-pen-to-square"></i> Edit the group</h1>
                </div>
            </div>
            <form action="{{ route('group.update', $group->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <div class="modal-body edit-body">
                    <div class="row" id="form-group">
                        <div class="col-5" id="form-group-left" style="position: relative;">
                            <div class="group-image-upload">
                                <div class="image-edit">
                                    <input type="file" name="image" id="uploadImage{{ $group->id }}">
                                    <label for="uploadImage{{ $group->id }}"
                                        class="justify-content-center text-center">
                                        <i class="fa-solid fa-camera"></i>
                                    </label>
                                </div>
                                <div class="image-preview">
                                    {{-- First Image --}}
                                    @if ($group->image)
                                        <img id="imageBackground{{ $group->id }}" src="{{ $group->image }}"
                                            alt="{{ $group->name }}" class="rounded-circle" style="height: 100%; width:100%;">
                                    @else
                                        <img id="imageBackground{{ $group->id }}" src="url('images/user-icon.png')"
                                            alt="group-image">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mt-3" id="form-group-right">
                            <label for="name"></label>
                            <input class="group-name" name="name" type="text" placeholder="Current name: {{ $group->name }}">
                            <br>
                            <label for="restaurant"></label>
                            <input class="restaurant-id" type="text" name="restaurant_id"
                                placeholder="Current restaurant: {{ $group->restaurant_id }}">
                            <br>
                        </div>
                    </div>
                </div>
                <div class="modal-footer edit-footer bg-white border-0 mb-2">

                    <a href="{{ route('group_list') }}" class="btn cancel-btn" data-bs-dismiss="modal">Cancel</a>
                    <script>
                        // When cancelled, reset the image to the original one
                        $(document).ready(function() {
                            var originalImage = $('#imageBackground{{ $group->id }}').attr('src');
                            $('.cancel-btn').click(function() {
                                $('#imageBackground{{ $group->id }}').attr('src', originalImage);
                            });
                        });
                    </script>
                    <button type="submit" class="btn g-save-btn float-end">Save</button>

                </div>
            </form>
        </div>
    </div>
</div>
