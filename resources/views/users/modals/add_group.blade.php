<!-- Main Blade View -->
<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#openModalButton").click(function() {
                $.ajax({
                    url: "/path-to-your-modal-content",
                    method: "GET",
                    success: function(data) {
                        $("#myModal .modal-body").html(data);
                        $("#myModal").modal("show");
                    },
                    error: function() {
                        alert("Failed to load modal content");
                    }
                });
            });
        });
    </script>
</head>

<body>
    <!-- Main content of your page -->

    <!-- Button to trigger the modal -->


    <!-- Modal -->
    <div class="modal fade" id="add_group" tabindex="-1" role="dialog" aria-labelledby="add_group_label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <div class="row align-items-center">
                        <div class="col-11 mt-2">
                            <h1 class="modal-title" id="add_group-label" style="color: #253c5c;">
                                <i class="fa-solid fa-square-plus fa-xl"></i>
                                Create a group
                            </h1>
                        </div>
                        <div class="col-1">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <form action="#" method="post" enctype="multipart/form-data">
                        <div class="form-group form-group-left">
                            <label for="fileToUpload">
                                <div class="profile-pic" style="background-image: url('https://randomuser.me/api/portraits/med/men/65.jpg')">
                                    <i class="fa-solid fa-camera"></i>
                                    <span>Edit Image</span>
                                </div>
                            </label>
                            <input type="File" name="fileToUpload" id="fileToUpload">
                        </div>

                        <div class="form-group form-group-right">
                            <label for="name"></label>
                            <input type="text" placeholder="Name"  require>
                            <br>
                            <label for="restaurant"></label>
                            <input type="text" placeholder="Restaurant" >
                            <br>
                            <label for="members" require></label>
                            <input type="text" placeholder="Members" >
                            <br>
                            <label for="description"></label>
                            <textarea name="description" id="description" cols="60" rows="5" placeholder="What is this group for?"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Create</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Include jQuery and Bootstrap JavaScript -->
    <!-- Initialize the modal and handle the AJAX request -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#openModalButton").click(function() {
                $.ajax({
                    url: "/path-to-your-modal-content",
                    method: "GET",
                    success: function(data) {
                        $("#myModal .modal-body").html(data);
                        $("#myModal").modal("show");
                    },
                    error: function() {
                        alert("Failed to load modal content");
                    }
                });
            });
        });
    </script>
</body>
</html>
