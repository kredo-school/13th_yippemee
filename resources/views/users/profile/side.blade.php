{{-- side bar INTRO --}}
<div class="bg-white container ms-auto me-auto rounded-3 p-5w">
    <div class="row">
        <div class="col-3 mb-3 mt-3">

            <div class="col-12 mb-3 shadow mt-2">
            <table class="table table-borderless ms-0">
                <h3><p class="fw-bold ms-3 mt-3">Intro</p></h3>
                <tbody>
                    <tr>
                        <th scope="row">
                            <div class="icon-font">
                                <i class="fa-solid fa-location-dot icon-sm ms-2" data-bs-toggle="modal" data-bs-target="#edit-intro"></i></div></th>
                        <td class="ms-auto">Live</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="icon-font">
                                <i class="fa-solid fa-utensils icon-sm ms-2" data-bs-toggle="modal" data-bs-target="#edit-intro"></i></div></th>
                        <td>Best restaurant</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="icon-font">
                                <i class="fa-solid fa-burger icon-sm ms-2" data-bs-toggle="modal" data-bs-target="#edit-intro"></i></div></th>
                        <td>Favorite Genre</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="icon-font">
                                <i class="fa-regular fa-address-card icon-sm ms-2" data-bs-toggle="modal" data-bs-target="#edit-intro"></i></div>
                        </th>
                        <td>Write about yourself</td>
                    </tr>
                </tbody>
            </table>
            </div>

            {{-- 2nd --}}
            <div class="sidebar col-12 mb-3 shadow">
            <table class="table table-borderless">
                <h3><p class="fw-bold ms-3">Make your page</p></h3>
                <tbody>
                    <tr>
                        <th scope="row">
                            <a href="#" class="text-decoration-none icon-font ms-2"><i class="fa-regular fa-pen-to-square icon-sm"></i></a>
                        </th>
                        <td>Post</td>
                    </tr>

                    <tr>
                        <th scope="row"><a href="{{ route('visits.create') }}" class="text-decoration-none icon-font"><i class="fa-solid fa-file-circle-check icon-sm ms-2" id="visits"></i></a>
                        </th>
                        <td>Visits</td>
                    </tr>
                    <tr>
                        <th scope="row"><a href="{{ route('bucket.create') }}" class="text-decoration-none icon-font"><i class="fa-solid fa-bucket icon-sm ms-2"></i></a>
                        </th>
                        <td>Bucket Lists</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <a href="#" class="text-decoration-none icon-font ms-2"><i class="fa-solid fa-calendar-days icon-sm"></i></a>
                        </th>
                        <td>Schedule</td>
                    </tr>
                    <tr>

                        <th scope="row">
                            <a href="#" class="text-decoration-none icon-font">
                            <i class="fa-solid fa-people-group icon-sm ms-2"></i>
                        </th>
                        <td>Groups</td></a>
                    </tr>
                </tbody>
            </table>
        </div></div>
{{-- END of Create --}}
