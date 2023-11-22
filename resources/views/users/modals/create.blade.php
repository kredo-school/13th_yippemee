<style>
    .checkbox-input {
        display: flex;
        align-items: center;
    }

    .checkbox-input label {
        width: 400px;
        font-size: 17px
    }
</style>

<div class="modal fade" id="create-plan" aria-hidden="true">
    <div class="modal-dialog create-dialog modal-xl">
        <div class="modal-content create-content">
            <div class="modal-header create-header w-100" style="background-color: #F1A29B;">
                <div class="row w-100">
                    <div class="col-11">
                        <h1 class="mt-2 ms-3 text-white"><i class="fa-solid fa-calendar-plus"
                                style="color: #FFFFFF;"></i> Create your plan</h1>
                    </div>
                    <div class="col-1">
                        <a href="#" class="btn close-button mt-2" data-bs-dismiss="modal"><i
                                class="fa-solid fa-xmark fa-2x" style="color: white;"></i></a>
                    </div>
                </div>
            </div>
            <form action="{{ route('plan.store') }}" method="POST">
                @csrf
                <div class="modal-body create-body">

                    <div class="row">
                        <div class="col-6" id="left-form-group">
                            <div class="row">
                                <label class="label-title" for="date"><i class="fa-regular fa-calendar"></i>
                                    Date</label>
                                <br>
                                <input type="date" name="date" id="dateToCheck">
                            </div>
                            <h2 class="label-title mt-2"><i class="fa-regular fa-clock"></i> Time</h2>
                            <div class="row time-row">
                                <div class="col-auto">
                                    <label class="s-time" name="s_time" for="s-time">Start Time</label><br>
                                    <input type="time" class="s-time me-3" name="s_time" id="s-time">
                                </div>
                                <div class="col-auto">
                                    <label class="e-time" name="e_time" for="e-time">End Time</label><br>
                                    <input type="time" class="e-time" name="e_time" id="e-time">
                                </div>
                            </div>
                            <div class="row">
                                <label class="label-title" name="restaurant" for="restaurant"><i
                                        class="fa-solid fa-shop"></i> Restaurant</label>
                                <br>
                                <input type="text" name="restaurant" id="restaurant">
                            </div>
                        </div>
                        <div class="col-6 form-group right">
                            <div class="row">
                                <h2 class="label-title mb-0"><i class="fa-solid fa-utensils"></i> Genre</h2>
                            </div>
                            <div class="row genre" id="genre">
                                <div class="col-6 checkbox-left">
                                    @foreach ($genres as $genre)
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="genre[]" value="{{ $genre['id'] }}"
                                                id="{{ $genre['id'] }}">
                                            <label for="{{ $genre['name'] }}">{{ $genre['name'] }}</label>
                                        </div>
                                    @endforeach
                                    {{--
                                    <div class="checkbox-input mt-3">
                                        <input type="checkbox" name="genre" value="chinese" id="chinese">
                                        <label for="chinese">Chinese</label>
                                    </div>
                                    <div class="checkbox-input mt-3">
                                        <input type="checkbox" name="genre" value="indian" id="indian">
                                        <label for="indian">Indian</label>
                                    </div> --}}
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row" id="description-form">
                        <label class="label-title" for="create-description"><i class="fa-solid fa-pencil"></i>
                            Description</label>
                        <br>
                        <textarea name="description" id="create-description" cols="60" rows="3" style="width:95%;"></textarea>
                    </div>
                </div>
                <div class="modal-footer create-footer bg-white border-0 mb-2">
                    <button type="submit" class="create-btn float-end">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>


