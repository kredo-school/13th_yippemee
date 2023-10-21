<div class="modal fade" id="connectModal" tabindex="-1" role="dialog" aria-labelledby="connectModal"
aria-hidden="true">
   
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Header-->
            <div class="modal-header-success modal-header-title">

                <p class="heading lead modal-title-font  m-4">Connect with friend</p>
                <button type="button" class="btn-close btn-close-white  m-4" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <!--Body-->
            <div class="modal-body d-flex justify-content-center align-items-center flex-column">
                <span><img src="{{ asset('img/woman01.jpg') }}" alt="woman" class="d-block mu-auto profile-picture-modal"></span>
                <p class="pt-3 pr-2">Are you sure to want to Connect with 'username'?</p>
            </div>

            <!--Footer-->
            <div class="modal-footer d-flex justify-content-center border-0"> 
                <form action="#" method="post">
                    <button type="submit" class="btn btn-success btn-lg">Connect</button>
                    <button type="button" class="btn btn-outline-success btn-lg" data-bs-dismiss="modal">Cancel</button>
                </form>
                
            </div>
            
        </div>

        <!--/.Content-->
    </div>

</div>

<div class="modal fade" id="disconnectModal" tabindex="-1" role="dialog" aria-labelledby="disconnectModal"
aria-hidden="true">

<div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Header-->
            <div class="modal-header-danger modal-header-title">
                <p class="heading lead modal-title-font m-4">Disonnect with friend</p>
                <button type="button" class="btn-close btn-close-white m-4" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <!--Body-->
            <div class="modal-body d-flex justify-content-center align-items-center flex-column">
                <span><img src="{{ asset('img/woman01.jpg') }}" alt="woman" class="d-block mu-auto profile-picture-modal"></i></span>
                <p class="pt-3 pr-2">Are you sure to want to disonnect with friend 'username'?</p>
            </div>

            <!--Footer-->
            <div class="modal-footer d-flex justify-content-center border-0"> 
                <form action="#" method="post">
                    <button type="submit" class="btn btn-danger btn-lg">Disonnect</button>
                    <button type="button" class="btn btn-outline-danger btn-lg" data-bs-dismiss="modal">Cancel</button>
                </form>
                
            </div>
            
        </div>

        <!--/.Content-->
    </div>

</div>

