{{-- picture --}}
<div class="col-4 ms-auto mb-3 mt-3">
            <img src="{{ asset('img/R.jpg') }}" alt="logo" class="w-100">
    </div>

{{-- Restaurant info --}}
    <div class="col-4 me-auto">
        <div class="row">
        <h3><div class="col-12 mt-4 fw-bold">{{ "Bistro Ha Noi's Restaurant" }}</div>
        </h3>

{{-- from --}}
<table>
<tbody>
    <tr>
        <th><i class="body fa-solid fa-utensils ms-2"></i></th>
        <th>Genre</th>
    </tr>
    <tr>
        <td></td>
        <td>Vietnam</td>
    </tr>

    <tr>
        <th><i class="body fa-regular fa-clock ms-2"></i></th>
        <th>Hours of operation</th>
    </tr>
    <tr>
        <td></td>
        <td>Mon–Fri 11:00am–10:00pm Sat 11:00am–11:00pm</td>
    </tr>

    <tr>
        <th><i class="body fa-solid fa-globe ms-2"></i></th>
        <th>Web Site</th>
    </tr>
    <tr>
        <td></td>
        <td>https://www.google.com/</td>
    </tr>

    <tr>
        <th><i class="body fa-solid fa-microphone ms-2"></i></th>
        <th>Additional</th>
    </tr>
    <tr>
        <td></td>
        <td> Non-Smoking, Private Room, View</td>
    </tr>

</tbody>
</table>
{{-- end --}}
</div>
</div>

{{-- Modal Delete or Edit--}}
<div class="col-auto mt-3">
    <div class="dropdown">
        <button class="btn" data-bs-toggle="dropdown">
            <h4><i class="fa-solid fa-ellipsis"></i></h4>
        </button>

    <div class="dropdown-menu">
        {{-- Modal Button --}}
        <a href="#" class="dropdown-item mt-0">
            <i class="fa-solid fa-file-circle-check"></i> Visit</a>

        <a href="#" class="dropdown-item">
            <i class="fa-regular fa-pen-to-square" data-bs-toggle="modal" data-bs-target="#edit-bucket"></i> Edit</a>

        <a href="#" class="dropdown-item text-danger">
            <i class="fa-regular fa-trash-can" data-bs-toggle="modal" data-bs-target="#delete-bucket"></i> Delete</a>

                    {{-- <button class="dropdown-item text-danger" data-bs-toggle="modal" data-bs-target="#delete-visits">
                        <i class="fa-regular fa-trash-can"></i> Delete
                    </button> --}}
    </div>
        {{-- Include Modal here --}}
        @include('users.bucket.modals.delete')

        {{-- Include Modal --}}
        @include('users.bucket.modals.edit')
    </div>
</div>

    {{-- Adjusting the layout --}}
    <div class="col-3 mb-3 mt-3"></div>
</div>
</article>
    {{-- 2nd Post --}}
    {{-- <div class="col-3 ms-auto mb-3 mt-3">
        <img src="{{ asset('img/Tenpura.jpg') }}" alt="logo" class="w-100">
    </div>

    <div class="col-4 me-auto">
        <div class="row">
            <h3><div class="col-12 mt-3 fw-bold">
                     {{ "Restaurant Tenpura" }}
                </div>
            </h3>
            <div class="mt-0 mb-0">{{ date('M d, Y') }}</div>

            <p class="d-inline fw-light">{{ "Write some information here" }}</p>
        </div>
    </div> --}}

        {{-- Modal Delete or Edit--}}
        {{-- <div class="col-auto mt-3">
            <div class="dropdown">
                <button class="btn btn-sm shadow-none" data-bs-toggle="dropdown">
                    <i class="fa-solid fa-ellipsis"></i>
                </button>

                    <div class="dropdown-menu"> --}}
                        {{-- Modal Button --}}
                    {{-- <a href="#" class="dropdown-item">
                        <i class="fa-regular fa-pen-to-square" data-bs-toggle="modal" data-bs-target="#edit-visits"></i> Edit
                    </a> --}}

                    {{-- 2nd modal --}}
                        {{-- <button class="dropdown-item text-danger" data-bs-toggle="modal" data-bs-target="#delete-visits">
                            <i class="fa-regular fa-trash-can"></i> Delete
                        </button> --}}
                    {{-- </div> --}}
                        {{-- Include Modal here --}}
                        {{-- @include('users.visits.modals.delete') --}}
                        {{-- Include Modal --}}
                        {{-- @include('users.visits.modals.edit') --}}
            {{-- </div>
        </div>
</div> --}}


