@extends('layouts.admin')

@section('content')
        <div class="page-wrapper">
    <!-- Page Content-->
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">   
                            <h4 class="mt-0 header-title">Customer Details</h4>
                            <form class="form-parsley" action="#" method="post">                              
                                <div class="form-group">
                                    <label for="product">Product</label>
                                    <input type="text" name="product" class="form-control" required placeholder="Product Type" id="product" required data-parsley-minlength="4">
                                </div>
                                <div class="form-group">
                                    <label for="qty">Qty</label>
                                    <input type="text" name="qty" class="form-control" required placeholder="Qty" id="qty" required data-parsley-minlength="4">
                                </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title mt-0 mb-3">Billing Details</h4>
                                            <div class="billing-nav">
                                                <ul class="nav nav-pills justify-content-center text-center mb-3" id="pills-tab" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="pills-credit-card-tab" data-toggle="pill" href="#pills-credit-card"><i class="mdi mdi-credit-card d-block mx-auto text-danger font-18"></i>Cash</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="pills-paypal-tab" data-toggle="pill" href="#pills-paypal"><i class="mdi mdi-paypal d-block mx-auto text-secondary font-18"></i>FOC</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content" id="pills-tabContent">
                                                    <div class="tab-pane fade show active" id="pills-credit-card">
                                                        <div class="demo-container">
                                                            <div class="card-wrapper mb-4"></div>                                                
                                                            <div class="form-container">
                                                                <form class="bill-form">
                                                                    <div class="row">
                                                                        <div class="col-md-6">                            
                                                                            <div class="form-group">
                                                                                <label>Amount</label>
                                                                                <input placeholder="Amount" class="form-control" type="text" name="amount">
                                                                            </div>
                                                                        </div><!--end col-->
                                                                    </div><!--end row-->
                                                                    <button class="btn btn-success px-3">Pay Now</button>
                                                                </form><!--end form-->
                                                            </div><!--end form-container-->
                                                        </div><!--end demo-->
                                                    </div><!--end tab-pane-->
                                                    <div class="tab-pane fade" id="pills-paypal">
                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-6 offset-lg-3">
                                                                <div class="card border">
                                                                    <div class="card-body">
                                                                        <h4 class="title-text"><i class="mdi mdi-paypal d-block mx-auto text-secondary font-18"></i>FOC</h4>
                                                                        <p class="mb-0 text-muted">Free Of Cost
                                                                        </p>
                                                                    </div><!--end card-body-->
                                                                </div><!--end card-->
                                                            </div><!--end col-->
                                                        </div><!--end row-->                                                   
                                                    </div><!--end tab-pane-->  
                                                </div><!--end tab-content--> 
                                            </div> <!--end billing-nav-->                                       
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                <div class="form-group mb-0">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-danger waves-effect m-l-5">
                                        Cancel
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection