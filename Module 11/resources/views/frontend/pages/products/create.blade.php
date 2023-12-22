@extends('frontend.layouts.app')
@section('title','IMS | Add Product')


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
                                            <h3 class="card-title">Add Product</h3>
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

                                    <form action="{{ route('product.store') }}" enctype="multipart/form-data" method="POST">
                                        @csrf

                                        <div class="row">
                                            

                                            <div class="col-lg-4 mb-3 ">
                                                <label class="form-label" for="title">Product Title <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="title"
                                                    id="title" placeholder="Enter product title">
                                            </div>

                                            <div class="col-lg-4 mb-3">
                                                <div class="mb-lg-0">
                                                    <label for="group_id" class="form-label">
                                                        Group
                                                        <span class="text-danger">
                                                            *
                                                        </span>
                                                    </label>
                                                    <div class="input-group">
                                                        <select class="form-select" name="group_id" id="choices-group-input">
                                                            <option selected disabled>Choose group...</option>
                                                            @foreach($groups as $group)
                                                                <option value="{{ $group->id }}" data-price="{{ $group->id }}">{{ $group->title }}</option>
                                                            @endforeach
                                                        </select>
                                                        <button class="btn btn-outline-success" data-bs-toggle="modal"
                                                        id="group-create-btn" data-bs-target="#showModal-group"
                                                        type="button" onclick="{{ route('group.create') }}">
                                                        <i class="bx bx-add-to-queue"></i>
                                                    </button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mb-3">
                                                <div class="mb-lg-0">
                                                    <label for="category_id" class="form-label">
                                                        Category
                                                        <span class="text-danger">
                                                            *
                                                        </span>
                                                    </label>
                                                    <div class="input-group">
                                                        <select class="form-select" name="category_id" id="choices-group-input">
                                                            <option selected disabled>Choose category...</option>
                                                            @foreach($categorys as $category)
                                                                <option value="{{ $category->id }}" data-price="{{ $category->id }}">{{ $category->title }}</option>
                                                            @endforeach
                                                        </select>
                                                        <button class="btn btn-outline-success" data-bs-toggle="modal"
                                                        id="group-create-btn" data-bs-target="#showModal-category"
                                                        type="button">
                                                        <i class="bx bx-add-to-queue"></i>
                                                    </button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mb-3">
                                                <div class="mb-lg-0">
                                                    <label for="brand_id" class="form-label">
                                                        Brand
                                                        <span class="text-danger">
                                                            *
                                                        </span>
                                                    </label>
                                                    <div class="input-group">
                                                        <select class="form-select" name="brand_id" id="choices-group-input">
                                                            <option selected disabled>Choose brand...</option>
                                                            @foreach($brands as $brand)
                                                                <option value="{{ $brand->id }}" data-price="{{ $brand->id }}">{{ $brand->title }}</option>
                                                            @endforeach
                                                        </select>
                                                        <button class="btn btn-outline-success" data-bs-toggle="modal"
                                                        id="group-create-btn" data-bs-target="#showModal-brand"
                                                        type="button">
                                                        <i class="bx bx-add-to-queue"></i>
                                                    </button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mb-3">
                                                <div class="mb-lg-0">
                                                    <label for="style_id" class="form-label">
                                                        Style
                                                        <span class="text-danger">
                                                            *
                                                        </span>
                                                    </label>
                                                    <div class="input-group">
                                                        <select class="form-select" name="style_id" id="choices-group-input">
                                                            <option selected disabled>Choose style...</option>
                                                            @foreach($styles as $style)
                                                                <option value="{{ $style->id }}" data-price="{{ $style->id }}">{{ $style->title }}</option>
                                                            @endforeach
                                                        </select>
                                                        <button class="btn btn-outline-success" data-bs-toggle="modal"
                                                        id="group-create-btn" data-bs-target="#showModal-style"
                                                        type="button">
                                                        <i class="bx bx-add-to-queue"></i>
                                                    </button>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-lg-4 mb-3">
                                                <div class="mb-lg-0">
                                                    <label for="size_id" class="form-label">
                                                        Size
                                                        <span class="text-danger">
                                                            *
                                                        </span>
                                                    </label>
                                                    <div class="input-group">
                                                        <select class="form-select" name="size_id" id="choices-group-input">
                                                            <option selected disabled>Choose size...</option>
                                                            @foreach($sizes as $size)
                                                                <option value="{{ $size->id }}" data-price="{{ $size->id }}">{{ $size->title }}</option>
                                                            @endforeach
                                                        </select>
                                                        <button class="btn btn-outline-success" data-bs-toggle="modal"
                                                        id="group-create-btn" data-bs-target="#showModal-size"
                                                        type="button">
                                                        <i class="bx bx-add-to-queue"></i>
                                                    </button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mb-3">
                                                <div class="mb-lg-0">
                                                    <label for="color_id" class="form-label">
                                                        Color
                                                        <span class="text-danger">
                                                            *
                                                        </span>
                                                    </label>
                                                    <div class="input-group">
                                                        <select class="form-select" name="color_id" id="choices-group-input">
                                                            <option selected disabled>Choose color...</option>
                                                            @foreach($colors as $color)
                                                                <option value="{{ $color->id }}" data-price="{{ $color->id }}">{{ $color->title }}</option>
                                                            @endforeach
                                                        </select>
                                                        <button class="btn btn-outline-success" data-bs-toggle="modal"
                                                        id="group-create-btn" data-bs-target="#showModal-color"
                                                        type="button">
                                                        <i class="bx bx-add-to-queue"></i>
                                                    </button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mb-3">
                                                <div class="mb-lg-0">
                                                    <label for="uom_id" class="form-label">
                                                        UOM
                                                        <span class="text-danger">
                                                            *
                                                        </span>
                                                    </label>
                                                    <div class="input-group">
                                                        <select class="form-select" name="uom_id" id="choices-group-input">
                                                            <option selected disabled>Choose uom...</option>
                                                            @foreach($uoms as $uom)
                                                                <option value="{{ $uom->id }}" data-price="{{ $uom->id }}">{{ $uom->title }}</option>
                                                            @endforeach
                                                        </select>
                                                        <button class="btn btn-outline-success" data-bs-toggle="modal"
                                                        id="group-create-btn" data-bs-target="#showModal-uom"
                                                        type="button">
                                                        <i class="bx bx-add-to-queue"></i>
                                                    </button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mb-3 ">
                                                <div class="mb-lg-0">
                                                    <label for="description"
                                                        class="form-label">Description</label>
                                                    <textarea class="form-control" name="description"
                                                        id="description" rows="1"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="mb-lg-0">
                                                    <label for="imagess" class="form-label">Product Image</label>
                                                    <input class="form-control" type="file" id="formFile" name="imagess">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <br>
                                        <div class="row">

                                            <div class="col-lg-4 mb-3 ">
                                                <label class="form-label" for="unit_price">
                                                    Unit Price 
                                                    <span class="text-danger">
                                                        *
                                                    </span>
                                                </label>
                                                <input type="text" class="form-control" name="unit_price"
                                                    id="unit_price" placeholder="Enter unit price">
                                            </div>

                                            <div class="col-lg-4 mb-3 ">
                                                <label class="form-label" for="other_cost">
                                                    Other Cost 
                                                    <span class="text-danger">
                                                        *
                                                    </span>
                                                </label>
                                                <input type="text" class="form-control" name="other_cost"
                                                    id="other_cost" placeholder="Enter other cost">
                                            </div>

                                            <div class="col-lg-4 mb-3 ">
                                                <label class="form-label" for="purchase_price">
                                                    Purchase Price 
                                                    <span class="text-danger">
                                                        *
                                                    </span>
                                                </label>
                                                <input type="text" class="form-control" name="purchase_price"
                                                    id="purchase_price" placeholder="" disabled>
                                            </div>

                                            <div class="col-lg-4 mb-3 ">
                                                <label class="form-label" for="profit_margin">
                                                    Profit Margin (%)
                                                </label>
                                                <input type="text" class="form-control" name="profit_margin"
                                                    id="profit_margin" placeholder="Enter profit margin in %">
                                            </div>

                                            <div class="col-lg-4 mb-3 ">
                                                <label class="form-label" for="sale_price">
                                                    Sale Price 
                                                    <span class="text-danger">
                                                        *
                                                    </span>
                                                </label>
                                                <input type="text" class="form-control" name="sale_price"
                                                    id="sale_price" placeholder="Enter sale price">
                                            </div>

                                            <div class="col-lg-4 mb-3 ">
                                                <label class="form-label" for="final_sale_price">
                                                    Final Sale Price 
                                                    <span class="text-danger">
                                                        *
                                                    </span>
                                                </label>
                                                <input type="text" class="form-control" name="final_sale_price"
                                                    id="final_sale_price" placeholder="" disabled>
                                            </div>

                                        </div>
                                        <br>
                                        <hr>
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-4 mb-3">
                                                <div class="mb-lg-0">
                                                    <label for="status" class="form-label">
                                                        Discount Type
                                                    </label>
                                                    <div class="input-group">
                                                        <select class="form-select" name="status" id="choices-status-input">
                                                            <option selected disabled>Choose Discount Type...</option>
                                                            <option value="percentage">Percentage (%)</option>
                                                            <option value="fixed amount">Fixed Amount</option>
                                                        </select>
                                                        <!-- <button class="btn btn-outline-success" data-bs-toggle="modal"
                                                        id="product-create-btn" data-bs-target="#showModal-project"
                                                        type="button">
                                                        <i class="bx bx-add-to-queue"></i>
                                                    </button> -->
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mb-3 ">
                                                <label class="form-label" for="discount_amount">
                                                    Discount Amount 
                                                </label>
                                                <input type="text" class="form-control" name="discount_amount"
                                                    id="discount_amount" placeholder="Enter discount amount">
                                            </div>

                                        </div>
                                        <br>
                                        <hr>
                                        <br>
                                        <div class="row">

                                            <div class="col-lg-4 mb-3 ">
                                                <label class="form-label" for="final_sale_price">
                                                    Opening / Current Stock 
                                                </label>
                                                <input type="text" class="form-control" name="final_sale_price"
                                                    id="final_sale_price" placeholder="" disabled>
                                            </div>

                                            <div class="col-lg-4 mb-3 ">
                                                <label class="form-label" for="adjust_stock">
                                                    Adjust Stock (+/-) 
                                                </label>
                                                <input type="text" class="form-control" name="adjust_stock"
                                                    id="adjust_stock" placeholder="">
                                            </div>

                                            <div class="col-lg-4 mb-3 ">
                                                <div class="mb-lg-0">
                                                    <label for="adjust_note"
                                                        class="form-label">Adjust Note</label>
                                                    <textarea class="form-control" name="adjust_note"
                                                        id="adjust_note" rows="1"></textarea>
                                                </div>
                                            </div>

                                        </div>
                                        <br>
                                        <hr>
                                        <br>
                                        <div class="row">

                                            <div class="col-lg-4 mb-3"></div>
                                            <div class="col-lg-4 mb-3">
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
                                                        id="product-create-btn" data-bs-target="#showModal-project"
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




@include('frontend.popUp.color')
@include('frontend.popUp.uompop')





@endsection