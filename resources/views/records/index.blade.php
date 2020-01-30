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
                        <h4 class="page-title">Records</h4>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div><!--end row-->
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="icon-contain">
                                <div class="row">
                                    <div class="col-8 align-self-center">
                                        <h5 class="">Returning Records</h5>
                                        <p class="text-muted mb-0">Last Month : 150 <i class="mdi mdi-menu-up text-success font-16"></i></p>
                                    </div><!--end col-->
                                    <div class="col-4">
                                        <span class="peity-bar" data-peity='{ "fill": ["#394b7b", "#4d79f6"]}' data-width="100%" data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                                    </div><!--end col-->
                                </div>  <!--end row-->                                                      
                            </div><!--end icon-contain-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->   
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="icon-contain">
                                <div class="row">
                                    <div class="col-8 align-self-center">
                                        <h5 class="">New Records</h5>
                                        <p class="text-muted mb-0">Last Month : 10 <i class="mdi mdi-menu-down text-danger font-16"></i></p>
                                    </div><!--end col-->
                                    <div class="col-4">
                                        <span class="peity-line" data-width="100%" data-peity='{ "fill": ["#21667d"],"stroke": ["#39a6ca"]}' data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                                    </div><!--end col-->
                                </div>  <!--end row-->                                                      
                            </div><!--end icon-contain-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->  
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="icon-contain">
                                <div class="row">
                                    <div class="col-8 align-self-center">
                                        <h5 class="">Bounce Rate</h5>
                                        <p class="text-muted mb-0">Last Month : 30% <i class="mdi mdi-menu-up text-success font-16"></i></p>
                                    </div><!--end col-->
                                    <div class="col-4 text-right">
                                        <span class="peity-donut" data-peity='{ "fill": ["#4d79f6", "#394b7b"], "innerRadius": 23, "radius": 32 }' data-width="60" data-height="60">226,134</span>
                                    </div><!--end col-->
                                </div>  <!--end row-->                                                      
                            </div><!--end icon-contain-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->                                         
            </div><!--end row-->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mt-0">Records Details</h4> 
                            <div class="table-responsive dash-social">
                                <table id="datatable" class="table">
                                    <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Client Name</th>
                                        <th>Address</th>
                                        <th>Order</th>                                                    
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Total</th>
                                    </tr><!--end tr-->
                                    </thead>

                                    <tbody>
                                        @if(is_array($errors)||is_object($errors))
                                        @foreach ($errors ?? '' as $order)
                                        <tr>
                                            <td scope="row">{{ $loop->iteration }}</td>
                                            <td>{{ $order->client->name }}</td>
                                            <td>{{ $order->client->address }}</td>
                                            <td>{{ $order->quantity }}</td>
                                            <td>{{ $order->date }}</td>
                                            <td>{{ $order->status }}</td>
                                            <td>{{ $order->bill }}</td>
                                        @endforeach    
                                        @endif
                                        </tr>  
                                                            
                                    </tbody>
                                </table>                    
                            </div>                                         
                        </div><!--end card-body--> 
                    </div><!--end card--> 
                </div> <!--end col-->                               
            </div><!--end row--> 

        </div><!-- container -->
    </div>
    <!-- end page content -->
@endsection