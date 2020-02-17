@extends('layouts.admin')

@section('content')
<div class="page-wrapper">
            

    <!-- Page Content-->
    <div class="page-content">

        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <button onclick="window.open('./discountVoucher/create')"  class="btn btn-primary px-4 float-right mt-0 mb-3"><i class="mdi mdi-plus-circle-outline mr-2"></i>Add Voucher</button>
                            <h4 class="header-title mt-0">Voucher Details</h4> 
                            <div class="table-responsive dash-social">
                                <table id="datatable" class="table">
                                    <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Client Name</th>
                                        <th>Product</th>
                                        <th>Discount</th>
                                        <th>Action</th>
                                    </tr><!--end tr-->
                                    </thead>

                                    <tbody>
                                        @foreach ($discountVourchers  as $discountVourcher)
                                    <tr>
                                        <td scope="row">{{ $loop->iteration }}</td>
                                        <td>{{ $discountVourcher->client->name }}<small class="badge badge-soft-pink ml-1">New</small></td>
                                        <td>{{ $discountVourcher->product->product }}</td>
                                        <td>{{ $discountVourcher->discount }}</td>
                                        {{-- <td class="row">
                                            <a href="{{ route('discountVoucher.edit', $discountVourcher->_id) }}" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                            <form action="{{ route('discountVoucher.destroy', $discountVourcher->_id) }}" method="post">
                                                {{ csrf_field() }}
                                                @method('DELETE')
                                                    <button type="submit" class="fas fa-trash-alt text-danger font-16"></button>
                                            </form>
                                        </td> --}}
                                        @endforeach
                                    </tr><!--end tr-->                             
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
