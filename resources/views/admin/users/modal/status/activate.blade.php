<div class="modal fade" id="activateModal" tabindex="-1" role="dialog" aria-labelledby="activateModal"
aria-hidden="true">
   
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Header-->
            <div class="modal-header-success modal-header-title">

                <p class="heading lead modal-title-font  m-4">Activate User</p>
                <button type="button" class="btn-close btn-close-white  m-4" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <!--Body-->
            <div class="modal-body d-flex justify-content-center align-items-center flex-column">
                <span><a href="#"><img src="{{ asset('img/woman01.jpg') }}" alt="woman" class="d-block mu-auto profile-picture-modal"></a></span>
                <p class="pt-3 pr-2">Are you sure to want to activate 'username'?</p>
            </div>

            <!--Footer-->
            <div class="modal-footer d-flex justify-content-center border-0"> 
                <form action="#" method="post">
                    <button type="submit" class="btn btn-success btn-lg">Activate</button>
                    <button type="button" class="btn btn-outline-success btn-lg" data-bs-dismiss="modal">Cancel</button>
                </form>
                
            </div>
            
        </div>

        <!--/.Content-->
    </div>

</div>

