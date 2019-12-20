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
                                    <form class="form-parsley" action="{{ route('employ.store') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                            <label for="emplyName">Name</label>
                                            <input type="text" name="emplyName" class="form-control" required placeholder="Name" id="emplyName"required data-parsley-minlength="4">
                                        </div><!--end form-group-->
                                        <div class="form-group">
                                            <label for="employAddress">Address</label>
                                            <input type="text" name="employAddress" class="form-control" required placeholder="Address" id="employAddress" required data-parsley-minlength="6">
                                        </div><!--end form-group-->
   
                                        <div class="form-group">
                                            <label for="employPh" >Phone Number</label>
                                            <input data-parsley-type="digits" type="text" name="employPh" class="form-control" required
                                            data-parsley-length="[11,11]" placeholder="Number" id="employPh">
                                        </div><!--end form-group-->
                                        <div class="form-group">
                                            <label for="employjoining" >Joining Date</label>
                                        <div class="input-group">                                            
                                            <input type="text" name="emplyjoining" class="form-control" placeholder="2017-06-04" id="mdate">
                                            <div class="input-group-append" id="employjoining">
                                             <span class="input-group-text"><i class="dripicons-calendar"></i></span>
                                            </div>
                                        </div>
                                        </div>
                                            <!--end form-group-->

                                        <div class="form-group">
                                            <label for="employSalary">Salary</label>
                                            <input data-parsley-type="digits" type="text" name="employSalary" class="form-control" required data-parsley min="15000" max="100000" 
                                            placeholder="" id="employSalary">
                                        <div class="form-group">
                                            <br>

                                            <label for="employIncentives">Incentives</label>
                                            <input type="text" name="employIncentives" class="form-control" required placeholder="" id="employIncentives" required data-parsley-max="15" data-parsley-type="alphanum">
                                        </div><!--end form-group-->
                                        </div><!--end form-group-->
                                        <div class="col-sm-4">
                                            <label for="employDesignation">Designation</label>
                                                <select name="employDesignation" class="form-control">
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
