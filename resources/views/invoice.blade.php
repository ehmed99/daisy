@extends('layouts.admin')

@section('content')

<div class="page-wrapper">
            

    <!-- Page Content-->
    <div class="page-content">

        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="">
                                        <h6 class="mb-0"><b>Start Date :</b> 11/05/2019</h6>
                                        <h6 class="mb-0"><b>End Date :</b> 10/06/2019</h6>
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-6">   
                                    <h6 class="mb-0"><b>Compny :</b> DaisyWater</h6>
                                    <h6 class="mb-0"><b>Client Name :</b> Trading System</h6>                                         
                                    <h6 class="mb-0"><b>Invoice No :</b> #1240</h6>  
                                </div><!--end col-->
                                <div class="col-md-3">
                                    <div class="text-center bg-light p-3 mb-3">
                                        <h5 class="bg-info mt-0 p-2 text-white d-sm-inline-block">Payment Methods</h5>
                                        <h6 class="font-13">Paypal & Cards Payments :</h6>
                                        <p class="mb-0 text-muted">CompanyA/c.paypal@gmai.com</p>
                                        <p class="mb-0 text-muted">Visa, Master Card, Chaque</p>
                                    </div>                                              
                                </div> <!--end col-->                                           
                            </div><!--end row-->

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive project-invoice">
                                        <table class="table table-bordered mb-0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Prrduct Name</th>
                                                    <th>Date</th>
                                                    <th>Cash Recevied</th> 
                                                    <th>Cash Pending</th>
                                                </tr><!--end tr-->
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Hassan</td>
                                                    <td>Jan /20/2020</td>
                                                    <td>$50</td>
                                                    <td>$3000.00</td>
                                                </tr><!--end tr-->
                                                <tr>                                                        
                                                    <td colspan="2" class="border-0"></td>
                                                    <td class="border-0 font-14"><b>Sub Total</b></td>
                                                    <td class="border-0 font-14"><b>$82,000.00</b></td>
                                                </tr><!--end tr-->
                                                <tr>
                                                    <th colspan="2" class="border-0"></th>                                                        
                                                    <td class="border-0 font-14"><b>Tax Rate</b></td>
                                                    <td class="border-0 font-14"><b>$0.00%</b></td>
                                                </tr><!--end tr-->
                                                <tr class="bg-light text-white">
                                                    <th colspan="2" class="border-0"></th>                                                        
                                                    <td class="border-0 font-14"><b>Total</b></td>
                                                    <td class="border-0 font-14"><b>$82,000.00</b></td>
                                                </tr><!--end tr-->
                                            </tbody>
                                        </table><!--end table-->
                                    </div>  <!--end /div-->                                          
                                </div>  <!--end col-->                                      
                            </div><!--end row-->

                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <h5 class="mt-4">Terms And Condition :</h5>
                                    <ul class="pl-3">
                                        <li><small>All accounts are to be paid within 7 days from receipt of invoice. </small></li>
                                        <li><small>To be paid by cheque or credit card or direct payment online.</small></li>
                                        <li><small> If account is not paid within 7 days the credits details supplied as confirmation<br> of work undertaken will be charged the agreed quoted fee noted above.</small></li>                                            
                                    </ul>
                                </div> <!--end col-->                                       
                                <div class="col-lg-6 align-self-end">
                                </div><!--end col-->
                            </div><!--end row-->
                            <hr>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-12 col-xl-4 ml-auto align-self-center">
                                    <div class="text-center text-muted"><small>Thank you very much for doing business with us. Thanks !</small></div>
                                </div><!--end col-->
                                <div class="col-lg-12 col-xl-4">
                                    <div class="float-right d-print-none">
                                        <a href="javascript:window.print()" class="btn btn-info"><i class="fa fa-print"></i></a>
                                        <a href="#" class="btn btn-primary">Submit</a>
                                        <a href="#" class="btn btn-danger">Cancel</a>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div><!--end row-->  

        </div><!-- container -->
    </div>
    <!-- end page content -->

@endsection