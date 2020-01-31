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
                        <h4 class="page-title">Discount Voucher</h4>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div><!--end row-->
            <!-- end page title end breadcrumb -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @include('flash-message')
                                    @yield('content')
                            <form class="form-parsley" action="{{ route('discountVoucher.store') }}"method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Voucher Name</label>
                                    <input type="text" name="vourcher_name" class="form-control" required placeholder="vourcher_name" id="vourcher_name" required data-parsley-minlength="4">
                                </div><!--end form-group-->
                                <div class="col-sm-4" id="productname">
                                    <label>Product Name</label>
                                        <select name="product_name" class="form-control">
                                        <option value="600 ML">600 ML</option>
                                        <option value="1.5 Litters" selected="">1.5 Litters</option>
                                        <option value="6 Litters">6 Litters</option>
                                        <option value="9 Litters">9 Litters</option>
                                        </select>
                                </div><!--end col-->
                                <br>
                                <div class="form-group">
                                    <label>Discount</label>
                                    <input type="text" name="discount"class="form-control" required placeholder="" id="discount" required data-parsley-minlength="4">
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
                            </form><!--end form-->   
                            @if($errors->any())
                                    <div>
                                        <ul>
                                            @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif            
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div> <!-- end col -->
            </div><!-- container -->
    </div>
    <!-- end page content -->
@endsection
