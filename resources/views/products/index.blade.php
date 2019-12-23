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
                                <h4 class="page-title">Employes</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0 mb-4">Products Growth</h4>
                                    <div class="chart-demo">
                                        <div id="apex_line1" class="apex-charts"></div>
                                    </div>                                        
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="icon-contain">
                                        <div class="row">
                                            <div class="col-8 align-self-center">
                                                <h5 class="">Returning Products</h5>
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
                                                <h5 class="">New Products</h5>
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
                                    <button onclick="window.open('/product/create')" class="btn btn-primary px-4 float-right mt-0 mb-3"><i class="mdi mdi-plus-circle-outline mr-2"></i>Add New Product</button>
                                    <h4 class="header-title mt-0">Product Details</h4> 
                                    @include('flash-message')
                                    @yield('content')
                                    <div class="table-responsive dash-social">
                                        <table id="datatable" class="table">
                                            <thead class="thead-light">
                                            <tr>
                                                <th>#</th>
                                                <th>Product Name</th>
                                                <th>Size</th>
                                                <th>Qty</th>                                                    
                                                <th>Action</th>
                                            </tr><!--end tr-->
                                            </thead>
        
                                            <tbody>
                                            {{$no=1}}
                                            @foreach ($products ?? '' as $product)
                                            <tr>
                                                <td scope="row">{{ $no }}</td>
                                                <td>{{ $product->product }}</td>
                                                <td>{{ $product->size }}</td>
                                                <td>{{ $product->qty }}</td>
                                                <td class="row">
                                                    <a href="product/{{ $product->id }}/edit" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <form action="{{ route('product.destroy',$product->id) }}" method="POST">
                                                        @csrf
                                                            @method('delete')
                                                            <button type="submit" class="fas fa-trash-alt text-danger font-16"></button>
                                                    </form>
                                                </td>
                                            </tr><!--end tr-->    
                                            {{$no++}}    
                                            @endforeach                         
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
