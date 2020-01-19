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
                <h4 class="page-title">Orders</h4>
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div><!--end row-->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <button onclick="window.open('/client/create')"  class="btn btn-primary px-4 float-right mt-0 mb-3"><i class="mdi mdi-plus-circle-outline mr-2"></i>Add New Customer</button>
                    <h4 class="header-title mt-0">Customers Details</h4>
                    @include('flash-message')
                    @yield('content')
                    <div class="table-responsive dash-social">
                        <table id="datatable" class="table">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Client Name</th>
                                <th scope="col">Emp name</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Bill</th>
                                <th scope="col">Paid Amount</th>
                            </tr><!--end tr-->
                            </thead>

                            <tbody>
                            @foreach ($orders ?? '' as $order)
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td>{{ $order->client->name }}</td>
                                <td>{{ $order->emp->name }}</td>
                                <td>{{ $order->quantity }}</td>
                                <td>{{ $order->bill }}</td>
                                <td>{{ $order->paid_amount }}</td>
                            @endforeach                      
                            </tbody>
                        </table>       
                        {{-- <p>Total Rate :  {{$clients->sum('rate')}}</p>          
                        <p>Total Bottles :  {{$clients->sum('qty')}}</p>        
                        <p>Total Customers :  {{$clients->count($no)}}</p>         --}}
                    </div>                                         
                </div><!--end card-body--> 
            </div><!--end card--> 
        </div> <!--end col-->                               
    </div><!--end row-->
  
</div><!-- container -->
</div>
<!-- end page content -->
@endsection
