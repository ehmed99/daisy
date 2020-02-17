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
                            <form class="form-parsley" action="{{ route('discountVoucher.store') }}"method="post">
                                @csrf
                                <h4 class="header-title mt-0 mb-3">Customer Infomation</h4>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="client">
                                        @if(is_array($clients ?? '')||is_object($clients ?? ''))
                                            @foreach ($clients ?? '' as $client)
                                                <option value="{{ $client->id }}"> {{ $client->name }} ( {{ $client->address }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Voucher Name</label>
                                    <input type="text" name="vourcher_name" class="form-control" required placeholder="vourcher_name" id="vourcher_name" required data-parsley-minlength="4">
                                </div><!--end form-group-->
                                <div class="form-group">
                                    <label for="product">Product</label>
                                    <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" id="product" name="product">
                                        @if(is_array($products ?? '')||is_object($products ?? ''))
                                            @foreach ($products ?? '' as $product)
                                                <option value="{{ $product->id }}"> {{ $product->product }} </option>
                                            @endforeach
                                        @endif
                                </select>
                                </div>
                                <div class="form-group">
                                    <label>Discount</label>
                                    <input type="text" name="discount"class="form-control" required placeholder="" id="discount" required data-parsley-minlength="4">
                                </div><!--end form-group-->
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
