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
                <h4 class="page-title">Customers</h4>
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div><!--end row-->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <button onclick="window.open('client/create')"  class="btn btn-primary px-4 float-right mt-0 mb-3"><i class="mdi mdi-plus-circle-outline mr-2"></i>Add New Customer</button>
                    <h4 class="header-title mt-0">Customers Details</h4>
                    @include('flash-message')
                    @yield('content')
                    <div class="table-responsive dash-social">
                        <table id="datatable" class="table">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Address</th>
                                <th scope="col">Phone No</th>
                                <th scope="col">Max Rate</th>
                                <th scope="col">Actions</th>
                            </tr><!--end tr-->
                            </thead>

                            <tbody>

                            @foreach ($clients ?? '' as $client)
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td>{{ $client->name }}</td>
                                <td>{{ $client->address }}</td>
                                <td>{{ $client->clientPh }}</td>
                                <td>{{ $client->rate }}</td>
                                <td class="row">
                                    <a href="client/{{ $client->id }}/edit" class="fas fa-edit text-info font-16"></a>
                                    <form action="{{ route('client.destroy',$client->id) }}" method="POST">
                                        @csrf
                                            @method('delete')
                                            <button type="submit" class="fas fa-trash-alt text-danger font-16"></button>
                                    </form>
                                    <a href="client/{{ $client->id }}" class="fas fa-eye text-info font-16"></a>
                                </td>   
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
