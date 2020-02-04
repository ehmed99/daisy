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
                                    <button onclick="window.open('employ/create')" class="btn btn-primary px-4 float-right mt-0 mb-3"><i class="mdi mdi-plus-circle-outline mr-2"></i>Add New Employe</button>
                                    <h4 class="header-title mt-0">Employes Details</h4> 
                                    @include('flash-message')
                                    @yield('content')
                                    <div class="table-responsive dash-social">
                                        <table id="datatable" class="table">
                                            <thead class="thead-light">
                                            <tr>
                                                <th>#</th>
                                                <th>Employe Name</th>
                                                <th>Address</th>
                                                <th>Phone No</th>                                                    
                                                <th>Joining Date</th>
                                                <th>Salary</th>
                                                <th>Email</th>
                                                <th>Incentives</th>
                                                <th>Designation</th>
                                                <th>Action</th>
                                            </tr><!--end tr-->
                                            </thead>
        
                                            <tbody>
                                            
                                            @foreach ($employs ?? '' as $employ)
                                            <tr>
                                                <td scope="row">{{ $loop->iteration }}</td>
                                                <td>{{ $employ->name }}</td>
                                                <td>{{ $employ->address }}</td>
                                                <td>{{ $employ->phone }}</td>
                                                <td>{{ $employ->joining }}</td>
                                                <td>{{ $employ->salary }}</td>
                                                <td>{{ $employ->email }}</td>
                                                <td>{{ $employ->incentives }}</td>
                                                <td>{{ $employ->designation }}</td>
                                                <td class="row">
                                                    {{--  <a href="employ/{{ $employ->id }}/edit" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>  --}}
                                                    <a href="{{ route('employ.edit', $employ->_id) }}" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <form action="{{ route('employ.destroy', $employ->_id) }}" method="post">
                                                        {{ csrf_field() }}
                                                        @method('DELETE')
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
