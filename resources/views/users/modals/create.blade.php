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
            <div class="modal-header create-header w-100" style="color: #F1A29B; background-color: #F1A29B;">
                <div class="row w-100" >
                    <div class="col-11">
                        <h1 class="mt-2 ms-3 text-white"><i class="fa-solid fa-calendar-plus" style="color: #FFFFFF;"></i> Create your plan</h1>
                    </div>
                    <div class="col-1">
                        <a href="#" class="btn close-button mt-2" data-bs-dismiss="modal"><i class="fa-solid fa-x fa-2x" style="color: white;"></i></a>
                    </div>
                </div>
            </div>
            <div class="modal-body create-body">
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-5 form-group left">
                            <div class="row">
                                <label class="label-title" for="date" ><i class="fa-regular fa-calendar"></i> Date</label>
                                <br>
                                <input type="date" id="date" required>
                            </div>
                            <h2 class="label-title mt-2"><i class="fa-regular fa-clock"></i> Time</h2>
                            <div class="row time-row">
                                <div class="col-auto">
                                    <label class="s-time" for="s-time">Start Time</label><br>
                                    <input type="time" class="s-time me-3" id="s-time">
                                </div>
                                <div class="col-auto">
                                    <label class="e-time" for="e-time">End Time</label><br>
                                    <input type="time" class="e-time" id="e-time">
                                </div>
                            </div>
                            <div class="row">
                                <label class="label-title" for="restaurant"><i class="fa-solid fa-shop"></i> Restaurant</label>
                                <br>
                                <input type="search" id="restaurant">
                            </div>
                        </div>
                        <div class="col-7 form-group right">
                            <div class="row">
                                <h2 class="label-title"><i class="fa-solid fa-utensils"></i> Genre</h2>
                            </div>
                            <div class="row genre">
                                <div class="col-6 checkbox-left">
                                    <div class="checkbox-input">
                                        <input type="checkbox" name="genre" value="japanese" id="japanese">
                                        <label for="japanese">Japanese</label>
                                    </div>
                                    <div class="checkbox-input mt-3">
                                        <input type="checkbox" name="genre" value="chinese" id="chinese">
                                        <label for="chinese">Chinese</label>
                                    </div>
                                    <div class="checkbox-input mt-3">
                                        <input type="checkbox" name="genre" value="indian" id="indian">
                                        <label for="indian">Indian</label>
                                    </div>
                                </div>

                                <div class="col-6 checkbox-right">
                                    <div class="checkbox-input">
                                        <input type="checkbox" name="genre" value="italian" id="italian">
                                        <label for="italian">Italian</label>
                                    </div>
                                    <div class="checkbox-input mt-3">
                                        <input type="checkbox" name="genre" value="french" id="french">
                                        <label for="french">French</label>
                                    </div>
                                    <div class="checkbox-input mt-3">
                                        <input type="checkbox" name="genre" value="other" id="other">
                                        <label for="other">Other</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <label class="label-title" for="create-description"><i class="fa-solid fa-pencil"></i> Description</label>
                        <br>
                        <textarea name="description" id="create-description" cols="60" rows="3" style="width:800px;"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer create-footer bg-white border-0 mb-2">
                <form action="#" method="get">
                    <button type="submit" class="btn-create float-end">Create</button>
                </form>
            </div>
        </div>
    </div>
</div>
