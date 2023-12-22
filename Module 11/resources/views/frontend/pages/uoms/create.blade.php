@extends('frontend.layouts.app')
@section('title','IMS | Add UOM')


@section('content')


<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="h-100">

                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <div class="card card-animate">
                                <div class="card-header">
                                    <div class="row g-4">
                                        <div class="col-xl-10 col-md-10">
                                            <h3 class="card-title">Add UOM</h3>
                                        </div>

                                    </div>
                                </div>

                                <div class="card-body">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <form action="{{ route('uom.store') }}" enctype="multipart/form-data" method="POST">
                                        @csrf

                                        <div class="row">
                                            

                                            <div class="col-lg-6 mb-3 ">
                                                <label class="form-label" for="title">UOM Title <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="title"
                                                    id="title" placeholder="Enter uom title">
                                            </div>

                                            <div class="col-lg-6 mb-3 ">
                                                <div class="mb-lg-0">
                                                    <label for="description"
                                                        class="form-label">Description</label>
                                                    <textarea class="form-control" name="description"
                                                        id="description" rows="1"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 mb-3 ">
                                                <label class="form-label" for="remark">Remark</label>
                                                <input type="text" class="form-control" name="remark"
                                                    id="remark" placeholder="Enter uom remark">
                                            </div>

                                            <div class="col-lg-6 mb-3">
                                                <div class="mb-lg-0">
                                                    <label for="status" class="form-label">
                                                        Status
                                                        <span class="text-danger">
                                                            *
                                                        </span>
                                                    </label>
                                                    <div class="input-group">
                                                        <select class="form-select" name="status" id="choices-status-input">
                                                            <option selected disabled>Choose Status...</option>
                                                            <option value="active">Active</option>
                                                            <option value="inactive">Inactive</option>
                                                        </select>
                                                        <!-- <button class="btn btn-outline-success" data-bs-toggle="modal"
                                                        id="uom-create-btn" data-bs-target="#showModal-project"
                                                        type="button">
                                                        <i class="bx bx-add-to-queue"></i>
                                                    </button> -->
                                                    </div>
                                                </div>
                                            </div>

                                        </div>


                                        <div class="col-lg-7">
                                            <div class="text-end mb-4">
                                                <!-- <button type="submit" class="btn btn-secondary w-sm">Draft</button> -->
                                                <button type="submit" class="btn btn-success w-sm">Save</button>
                                                <button type="reset" onclick="history.back()"
                                                    class="btn btn-danger w-sm">Back</button>
                                            </div>


                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>



                    </div> <!-- end row-->

                </div> <!-- end .h-100-->

            </div> <!-- end col -->

        </div>

    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->




@endsection