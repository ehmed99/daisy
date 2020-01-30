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
                                <h4 class="page-title">Customer Form</h4>
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
                                    <h4 class="mt-0 header-title">Customer Details</h4>
                                    <form class="form-parsley" action="{{ route('client.update', $client->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" class="form-control" required placeholder="Name" id="name" required data-parsley-minlength="4" value="{{ $client->name }}">
                                        </div><!--end form-group-->
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input type="text" name="address" class="form-control" required placeholder="Address" id="address" required  value="{{ $client->address }}">
                                        </div><!--end form-group-->
   
                                        <div class="form-group">
                                            <label for="clientPh">Phone Number</label>
                                            <input data-parsley-type="digits"type="text" name="clientPh" class="form-control" required data-parsley-length="[11,11]" placeholder="Number" id="clientPh" value="{{ $client->clientPh }}">
                                        </div><!--end form-group-->

                                        <div class="form-group">
                                            <label for="rate">Rate</label>
                                            <input data-parsley-type="digits" type="text" name="rate" class="form-control" required min="50" max="150" placeholder="" id="rate" value="{{ $client->rate }}">
                                        </div><!--end form-group-->
                                        <div class="form-group">
                                            <label for="product">Product</label>
                                            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" id="product" name="product">
                                                <option value="600ml">600ml</option>
                                                <option value="1.5 ltr">1.5 ltr</option>
                                                <option value="6 ltr">6 ltr</option>
                                                <option value="19 ltr">19 ltr</option>
                                                <option value="{{ $client->product }}">{{ $client->product }}</option>
                                            </select>
                                            </div><!--end form-group-->
                                        <br>

                                        <div class="form-group mb-0">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                            Update
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