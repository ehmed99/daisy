@extends('layouts.admin')

@section('content')
<div class="page-wrapper">
            

            <!-- Page Content-->
            <div class="page-content">

                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="float-right">
                                    <ol class="breadcrumb">
                                       <!-- <li class="breadcrumb-item"><a href="javascript:void(0);">Metrica</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">UI Kit</a></li>
                                        <li class="breadcrumb-item active">Validation</li> -->
                                    </ol><!--end breadcrumb-->
                                </div><!--end /div-->
                                <h4 class="page-title">Product Form</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <!-- end page title end breadcrumb -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">        
                                    <h4 class="mt-0 header-title">Product Details</h4>
                                    @include('flash-message')
                                    @yield('content')
                                    <form class="form-parsley" action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="product">Product Name</label>
                                        <input type="text" class="form-control" name="product">
                                    </div><!--end form-group-->
                                    <div class="form-group">
                                        <label for="img">Upload Image</label>
                                        <input type="file" name="img" class="form-control" required placeholder="img" id="img" required>
                                    </div><!--end form-group-->
                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <input type="text" name="price" class="form-control" required placeholder="price" id="price" required>
                                    </div><!--end form-group-->
                                    <div class="form-group">
                                        <label for="size">Size</label>
                                        <input type="text" name="size" class="form-control" required placeholder="size" id="size" required>
                                    </div><!--end form-group-->

                                
                                    
                                    <br>

                                        <div class="form-group mb-0">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                Submit
                                            </button>
                                            <button type="reset" class="btn btn-danger waves-effect m-l-5">
                                                Cancel
                                            </button>
                                        </div><!--end form-group-->
                                        @if($errors->any())
                                        <div>
                                            <ul>
                                                @foreach($errors->all() as $error)
                                                <li>{{$error}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endif
                                    </form><!--end form-->        
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
                    </div><!-- container -->
            </div>
            <!-- end page content -->
@endsection
