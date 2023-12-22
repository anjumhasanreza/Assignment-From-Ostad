
<!-- Add Color Pop-up Start -->

<div class="modal fade" id="showModal-color" tabindex="-1" aria-labelledby="add_color" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <!-- <h5 class="modal-title" id="exampleModalLabel">&nbsp;</h5> -->
                <h5 class="modal-title" id="add_color">Add Color</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal"></button>
            </div>
            <form class="tablelist-form" autocomplete="off">
                <div class="modal-body">
                    <input type="hidden" id="id-field" />

                    <div class="mb-3" id="modal-id">
                        <label for="orderId" class="form-label">ID</label>
                        <input type="text" id="orderId" class="form-control" placeholder="ID" readonly />
                    </div>

                    <!-- <div class="mb-3">
                        <label for="color-title-field" class="form-label">Color Title</label>
                        <input type="text" id="color-title-field" class="form-control"
                            placeholder="Enter color title" required />
                    </div> -->

                    <div class="mb-3 ">
                        <label class="form-label" for="color-title-input">Color Title <span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="color-title-input"
                            placeholder="Enter color title" required>
                    </div>

                    <div class="mb-3 ">
                        <label class="form-label" for="color-description-input">Description</label>
                        <input type="text" class="form-control" id="color-description-input"
                            placeholder="Enter color's description">
                    </div>

                    <div class="mb-3 ">
                        <label class="form-label" for="remarks-input">Remarks</label>
                        <input type="text" class="form-control" id="remarks-input"
                            placeholder="Enter color's remarks">
                    </div>

                    <div class="mb-3 ">
                        <div class="mb-lg-0">
                            <label for="choices-status-input" class="form-label">Status <span
                                    class="text-danger">*</span></label>
                            <select class="form-select" data-choices data-choices-search-false
                                id="choices-status-input">
                                <option value="Active" selected>Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success" id="add-btn">Add Color</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Add Color Pop-up End  -->