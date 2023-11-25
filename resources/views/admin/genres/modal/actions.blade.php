<!--update genre-->
<div class="modal fade" id="updateGenre-{{ $genre->id }}" tabindex="-1" role="dialog" aria-labelledby="updateGenre"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
    
        <!--Content-->
        <div class="modal-content genre-content">
        
            <!--Header-->
            <div class="modal-header-warning modal-header-title">
                <p class="heading lead modal-title-font m-4">Edit Genre</p>
                <button type="button" class="btn-close btn-close-edit m-4" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        
            <!--Footer-->
            <form action="{{ route('admin.genres.update', ['id' => $genre->id]) }}"  method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <div class="modal-body modal-genre-margin">
                    <div class="mb-3">
                        <label for="genreImage-{{ $genre->id }}" class="form-label">Genre Name</label>
                        <input type="text" class="form-control edit-genre" name="new_name"  placeholder="Genre name" autofocus value="{{ $genre->name }}" >
                    </div>
        
                    <div class="mb-3">
                        <label for="genreImage-{{ $genre->id }}" class="form-label">Genre Image</label>
                        <div>
                            @if ($genre->image)
                            <img src="{{ asset($genre->image) }}" alt="Genre Image" class="genre-img mb-2">
                            @endif
                        </div>
                        <input type="file" class="form-control edit-genre" id="genreImage-{{ $genre->id }}" name="image">
                    </div>

                    <div class="modal-footer border-0 d-flex justify-content-center">
                        <button type="button" class="btn btn-outline-warning btn-md me-2" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-warning btn-md text">Update</button>
                    </div>

                </div>
                
            </form>
        </div>
    </div>
</div>   

<!--delete genre-->
<div class="modal fade" id="deleteGenre-{{ $genre->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteGenre"
aria-hidden="true">

    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Header-->
            <div class="modal-header-danger modal-header-title">
                <p class="heading lead modal-title-font m-4">Delete Genre</p>
                <button type="button" class="btn-close btn-close-white m-4" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <!--Body-->
            <div class="modal-body d-flex justify-content-center align-items-center flex-column">
                <span><i class="fa-solid fa-trash-can fa-3x icon-red mb-4"></i></span>
                <p class="text-width">Are you sure you want to delete the genre name <strong>"{{ $genre->name }}"</strong> ?</p>
                <p class="text-muted text-width">This action will affect all the posts under this genre. Posts without a genre will fall under Uncategorized.</p>
            </div>

            <!--Footer-->
            <div class="modal-footer d-flex justify-content-center border-0"> 
                <form action="{{ route('admin.genres.destroy', ['id' => $genre->id]) }}" method="post">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-md me-2">Delete</button>
                    <button type="button" class="btn btn-outline-danger btn-md" data-bs-dismiss="modal">Cancel</button>
                </form>
                
            </div>
            
        </div>

        <!--/.Content-->
    </div>

</div>