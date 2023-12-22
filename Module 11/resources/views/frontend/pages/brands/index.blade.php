@extends('frontend.layouts.app')
@section('title','IMS | Brand')


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
                                            <h3 class="card-title">Brand List</h3>
                                        </div>
                                        <div class="col-sm-auto">
                                            <div>
                                                <a href="{{ Route('brand.create') }}" class="btn btn-success"
                                                    id="addbrand-btn"><i class="ri-add-line align-bottom me-1"></i>
                                                    Add Brand</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    @if (session()->has('success'))
                                    <div class="alert alert-success">{{ session('success')}}</div>
                                        
                                    @else
                                        
                                    @endif
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead class="text-center">

                                            <tr>
                                                <th>Sl</th>
                                                <th>Brand Title</th>
                                                <th>Description</th>
                                                <th>Remarks</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>

                                        </thead>

                                        <tbody class="text-center">

                                            @foreach ($brands as $brand)
                                            <tr>
                                                <td>{{ $loop-> iteration}}</td>
                                                <td>{{ $brand-> title}}</td>
                                                <td>{{ $brand-> description}}</td>
                                                <td>{{ $brand-> remark}}</td>
                                                <td>
                                                    
                                                    <span class="badge rounded-pill bg-success">
                                                        {{ $brand-> status}}
                                                    </span>
                                                    
                                                </td>
                                                <td>
                                                    <a class="btn btn-info btn-sm" href="{{ Route('brand.edit', $brand->id) }}">
                                                        <i class="fas fa-pencil-alt">
                                                        </i>
                                                        Edit
                                                    </a>
                                                </td>
                                            </tr>    
                                            @endforeach
                                            

                                        </tbody>

                                        <tfoot class="text-center">

                                            <tr>
                                                <th>Sl</th>
                                                <th>Brand Title</th>
                                                <th>Description</th>
                                                <th>Remarks</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>

                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
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