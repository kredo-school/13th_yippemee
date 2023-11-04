<div class="modal fade" id="group-edit" aria-hidden="true">
    <div class="modal-dialog edit-dialog modal-xl">
        <div class="modal-content edit-content">
            <div class="modal-header edit-header w-100">
                <div class="row w-100" >
                    <h1 class="mt-2 ms-3"><i class="fa-regular fa-pen-to-square"></i> Edit the group</h1>
                </div>
            </div>
            <div class="modal-body edit-body">
                <form action="#" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    <div class="row" id="form-group">
                        <div class="col-5" id="form-group-left" style="position: relative;">

                            <div class="group-image-upload">
                                <div class="image-edit">
                                    <input type="file" id="imageUpload">
                                    <label for="imageUpload" class="justify-content-center text-center">
                                        <i class="fa-solid fa-camera"></i>
                                    </label>
                                </div>

                                <div class="image-preview">
                                    <div id="imagePreview" style="background-image: url('/images/user-icon.png');">
                                        {{-- @if ($group->image)  !!!!!!!!!!!!!!! I commented threads 4th November
                                            <img id="pre-image" src="{{ $group->image }}" alt="{{ $group->name }}" class="img-thumbnail rounded-circle" style="border:1px solid red;">
                                        @else
                                            <img id="pre-image" src="url('images/user-icon.png')" alt="group-pic">
                                        @endif --}}
                                    </div>
                                </div>
                            </div>
                            <script>
                                function readURL(input) {
                                    if (input.files && input.files[0]) {
                                        var reader = new FileReader();
                                        reader.onload = function(e) {
                                            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                                            $('#imagePreview').hide();
                                            $('#imagePreview').fadeIn(650);
                                        }
                                        reader.readAsDataURL(input.files[0]);
                                    }
                                }
                                $("#imageUpload").change(function() {
                                    readURL(this);
                                });
                            </script>

                            {{-- previous input file --}}
                            {{-- <label for="fileToUpload" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; margin: auto;">
                                <img src="{{ $group->image }}" alt="{{ $group->name }}" class="img-thumbnail">
                            </label>
                            <div class="profile-pic-edit img-thumbnail rounded-circle" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; margin: auto;">
                                <i class="fa-solid fa-camera"></i>
                                <span>Edit Image</span>
                            </div>
                            <input type="file" name="fileToUpload" id="fileToUpload">
                            <script>
                                document.querySelector('.profile-pic-edit').addEventListener('click', function() {
                                    document.getElementById('fileToUpload').click();
                                });
                            </script> --}}

                        </div>
                        <div class="col-6 mt-3" id="form-group-right">
                            <label for="name"></label>
                            <input type="text" value="{{ old('name', $group->name) }}">
                            <br>
                            <label for="restaurant"></label>
                            <input type="text" value="{{ old('restaurant_id', $group->restaurant_id) }}">
                            <br>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer edit-footer bg-white border-0 mb-2">
                <form action="#" method="post">
                    <a href="{{route('group_list')}}" class="btn calncel-btn" data-bs-dismiss="modal">Cancel</a>
                    <button type="submit" class="btn g-save-btn float-end">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
