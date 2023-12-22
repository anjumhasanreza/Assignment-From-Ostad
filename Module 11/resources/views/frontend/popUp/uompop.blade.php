
<!-- Add UOM Pop-up Start -->

<div class="modal fade" id="showModal-uom" tabindex="-1" aria-labelledby="add_uom" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <!-- <h5 class="modal-title" id="exampleModalLabel">&nbsp;</h5> -->
                <h5 class="modal-title" id="add_uom">Add UOM</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal"></button>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="tablelist-form" autocomplete="off"action="{{ route('uom.store') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="modal-body">
                    <input type="hidden" id="id-field" />

                    <div class="mb-3" id="modal-id">
                        <label for="orderId" class="form-label">ID</label>
                        <input type="text" id="orderId" class="form-control" placeholder="ID" readonly />
                    </div>

                    <div class="mb-3 ">
                        <label class="form-label" for="title">UOM Title <span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="title"
                        id="title" placeholder="Enter uom title" required>
                    </div>

                    <div class="mb-3 ">
                        <label class="form-label" for="description">Description</label>
                        <input type="text" class="form-control" id="description"
                            placeholder="Enter uom's description" name="description">
                    </div>

                    <div class="mb-3 ">
                        <label class="form-label" for="remark">Remark</label>
                        <input type="text" class="form-control" id="remark"
                            placeholder="Enter uom's remarks" name="remark">
                    </div>

                    <div class="mb-3 ">
                        <div class="mb-lg-0">
                            <label for="status" class="form-label">Status <span
                                    class="text-danger">*</span></label>
                            {{-- <select class="form-select" data-choices data-choices-search-false
                                id="choices-status-input" name="status">
                                <option value="Active" selected>Active</option>
                                <option value="Inactive">Inactive</option>
                            </select> --}}

                            <select class="form-select" name="status" id="choices-status-input">
                                <option selected disabled>Choose Status...</option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success" id="add-btn">Add UOM</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Add UOM Pop-up End  -->



