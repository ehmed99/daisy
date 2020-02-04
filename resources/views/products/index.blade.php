@extends('layouts.admin')

@section('content')
<div class="page-wrapper">
            

            <!-- Page Content-->
            <div class="page-content">

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="icon-contain">
                                        <div class="row">
                                            <div class="col-8 align-self-center">
                                                <h5 class="">600 ML Bottles</h5>
                                                <p class="text-muted mb-0">Last Month : 150 <i class="mdi mdi-menu-up text-success font-16"></i></p>
                                            </div><!--end col-->
                                        </div>  <!--end row-->                                                      
                                    </div><!--end icon-contain-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->   
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="icon-contain">
                                        <div class="row">
                                            <div class="col-8 align-self-center">
                                                <h5 class="">1.5 Litter Bottles</h5>
                                                <p class="text-muted mb-0">Last Month : 10 <i class="mdi mdi-menu-down text-danger font-16"></i></p>
                                            </div><!--end col-->
                                        </div>  <!--end row-->                                                      
                                    </div><!--end icon-contain-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->  
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="icon-contain">
                                        <div class="row">
                                            <div class="col-8 align-self-center">
                                                <h5 class="">6 Litter Bottles</h5>
                                                <p class="text-muted mb-0">Last Month : 30% <i class="mdi mdi-menu-up text-success font-16"></i></p>
                                            </div><!--end col-->
                                        </div>  <!--end row-->                                                      
                                    </div><!--end icon-contain-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="icon-contain">
                                        <div class="row">
                                            <div class="col-8 align-self-center">
                                                <h5 class="">19 Litter Bottles</h5>
                                                <p class="text-muted mb-0">Last Month : 30% <i class="mdi mdi-menu-up text-success font-16"></i></p>
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
                                    <button onclick="window.open('product/create')" class="btn btn-primary px-4 float-right mt-0 mb-3"><i class="mdi mdi-plus-circle-outline mr-2"></i>Add New Product</button>
                                    <h4 class="header-title mt-0">Product Details</h4> 
                                    @include('flash-message')
                                    @yield('content')
                                    <div class="table-responsive dash-social">
                                        <table id="datatable" class="table">
                                            <thead class="thead-light">
                                            <tr>
                                                <th>#</th>
                                                <th>Product Name</th>
                                                <th>Product Image</th>
                                                <th>Product Price</th>
                                                <th>Size</th>                                                   
                                                <th>Action</th>
                                            </tr><!--end tr-->
                                            </thead>
        
                                            <tbody>
                                            
                                            @foreach ($products ?? '' as $product)
                                            <tr>
                                                <td scope="row">{{ $loop->iteration }}</td>
                                                <td>{{ $product->product }}</td>
                                                <td><img src="/image/{{Session::get('path')}}" with="100" ></td>
                                                <td>{{ $product->price }}</td>
                                                <td>{{ $product->size }}</td>
                                                <td class="row">
                                                    <a href="product/{{ $product->id }}/edit" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <form action="{{ route('product.destroy',$product->id) }}" method="POST">
                                                        @csrf
                                                            @method('delete')
                                                            <button type="submit" class="fas fa-trash-alt text-danger font-16"></button>
                                                    </form>
                                                </td>
                                            </tr><!--end tr-->    
                                             
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
