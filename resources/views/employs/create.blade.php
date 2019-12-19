@extends('layouts.admin')

@section('content')
<div class="container" style="margin-top:2%">
    <div class="row">
        <div class="col-12">
        @include('flash-message')
        @yield('content')
        <form action="{{ route('employ.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="emplyName">Name</label>
                    <input type="text" name="emplyName" class="form-control">
                </div>
                <div class="form-group">
                    <label for="employAddress">Address</label>
                    <input type="text" name="employAddress" class="form-control">
                </div>
                <div class="form-group">
                    <label for="employPh">Phone no</label>
                    <input type="text" name="employPh" class="form-control">
                </div>
                <div class="form-group">
                    <label for="employJoining">Joining Date</label>
                    <input type="date" name="employJoining" class="form-control" id="employJoining">
                </div>
                <div class="form-group">
                    <label for="employSalary">Salary Package</label>
                    <input type="text" name="employSalary" class="form-control" id="employSalary">
                </div>
                <div class="form-group">
                    <label for="employDesignation">Designation</label>
                    <select name="employDesignation">
                        <option value="Superviser">Superviser</option>
                        <option value="Delivery">Delivery</option>
                        <option value="Accountant">Accountant</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="employIncentives">Incentives</label>
                    <input type="text" name="employIncentives" class="form-control" id="employIncentives">
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
            @if($errors->any())
            <div>
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    </div>
 
</div>
@endsection
