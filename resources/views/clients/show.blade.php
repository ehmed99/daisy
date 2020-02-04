@extends('layouts.admin')

@section('content')

<div class="page-wrapper">
    <!-- Page Content-->
    <div class="page-content">
        <div class="container-fluid">
        <button onclick="window.open('/admin/client/invoice')"  class="btn btn-primary px-4 float-right mt-0 mb-3"><i class="mdi mdi-plus-circle-outline mr-2"></i>Invoice</button>
            <h1>Client Information</h1>
            <h5>Name :  {{ $client->name }}</h5>
            <h5>Address :  {{ $client->address }}</h5>
            <h5>Phone no :  {{ $client->clientPh }}</h5>
            <h5>Rate :  {{ $client->rate }}</h5>
            <h5>Qty :  {{ $client->qty }}</h5>
            <br>
            <h1 class="text-center">Back to back sales</h1>

            <div class="table-responsive dash-social">
                <table id="datatable" class="table">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Date</th>
                        <th scope="col">Product</th>
                        <th scope="col">Cash Recived</th>
                        <th scope="col">Cash Pending</th>
                    </tr><!--end tr-->
                    </thead>
                    <tbody>
                    <tr>
                        <td scope="row">1</td>
                        <td>26/12/19</td>
                        <td>Watter Bottle</td>
                        <td>200</td>
                        <td>500</td>
                    </tr>
                    <tr>
                        <td scope="row">2</td>
                        <td>26/12/19</td>
                        <td>Watter Bottle</td>
                        <td>200</td>
                        <td>500</td>
                    </tr>
                    <tr>
                        <td scope="row">3</td>
                        <td>26/12/19</td>
                        <td>Watter Bottle</td>
                        <td>200</td>
                        <td>500</td>
                    </tr>                     
                    </tbody>
                </table>
            </div>   
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="icon-contain">
                            <div class="row">
                                <div class="col-8 align-self-center">
                                    <h5 class="">Total Rate</h5>
                                    <p class="text-muted mb-0">#<i class="mdi mdi-menu-up text-success font-16"></i></p>
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
                                    <h5 class="">Total Bottles</h5>
                                    <p class="text-muted mb-0">#<i class="mdi mdi-menu-down text-danger font-16"></i></p>
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
                                    <h5 class="">Total Customers</h5>
                                    <p class="text-muted mb-0">#<i class="mdi mdi-menu-up text-success font-16"></i></p>
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
           
        </div>
    </div>
</div>

@endsection