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
                                <h4 class="page-title">Employe Form</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <!-- end page title end breadcrumb -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">        
                                    <h4 class="mt-0 header-title">Employe Details</h4>
                                    @include('flash-message')
                                    @yield('content')
                                    <form class="form-parsley" action="{{ route('employ.update', $employ->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" class="form-control" required placeholder="Name" id="name"required data-parsley-minlength="4" value="{{ $employ->name }}">
                                        </div><!--end form-group-->
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input type="text" name="address" class="form-control" required placeholder="Address" id="address" required data-parsley-minlength="6" value="{{ $employ->address }}">
                                        </div><!--end form-group-->
   
                                        <div class="form-group">
                                            <label for="phone" >Phone Number</label>
                                            <input data-parsley-type="digits" type="text" name="phone" class="form-control" required data-parsley-length="[11,11]" placeholder="Number" id="phone" value="{{ $employ->phone }}">
                                        </div><!--end form-group-->
                                        <div class="form-group">
                                            <label for="joining" >Joining Date</label>
                                        <div class="input-group">                                            
                                            <input type="text" name="joining" class="form-control" placeholder="2017-06-04" id="mdate" value="{{ $employ->joining }}">
                                            <div class="input-group-append" id="joining">
                                             <span class="input-group-text"><i class="dripicons-calendar"></i></span>
                                            </div>
                                        </div>
                                        </div>
                                            <!--end form-group-->

                                        <div class="form-group">
                                            <label for="salary">Salary</label>
                                            <input data-parsley-type="digits" type="text" name="salary" class="form-control" required data-parsley min="15000" max="100000" placeholder="" id="salary" value="{{ $employ->salary }}">
                                        <div class="form-group">
                                            <br>

                                            <label for="incentives">Incentives</label>
                                            <input type="text" name="incentives" class="form-control" required placeholder="" id="incentives" required data-parsley-max="15" data-parsley-type="alphanum" value="{{ $employ->incentives }}">
                                        </div><!--end form-group-->
                                        </div><!--end form-group-->
                                        <div class="col-sm-4">
                                            <label for="designation">Designation</label>
                                                <select name="designation" class="form-control">
                                                <option value="{{ $employ->designation }}">{{ $employ->designation }}</option>
                                                <option value="Superviser">Superviser</option>
                                                <option value="Delivery Boy" selected="">Delivery Boy</option>
                                                <option value="Accountant">Accountant</option>
                                                </select>
                                        </div><!--end col-->
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
