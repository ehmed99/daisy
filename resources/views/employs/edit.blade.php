@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="{{ route('employ.update', $employ->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="emplyName">Name</label>
                    <input type="text" name="emplyName" class="form-control" value="{{ $employ->emplyName }}">
                </div>
                <div class="form-group">
                    <label for="employAddress">Address</label>
                    <input type="text" name="employAddress" class="form-control" value="{{ $employ->employAddress }}">
                </div>
                <div class="form-group">
                    <label for="employPh">Phone no</label>
                    <input type="number" name="employPh" class="form-control" value="{{ $employ->employPh }}">
                </div>
                <div class="form-group">
                    <label for="employJoining">Joining Date</label>
                    <input type="date" name="employJoining" class="form-control" id="employJoining" value="{{ $employ->employJoining }}">
                </div>
                <div class="form-group">
                    <label for="employSalary">Salary Package</label>
                    <input type="text" name="employSalary" class="form-control" id="employSalary" value="{{ $employ->employSalary }}">
                </div>
                <div class="form-group">
                    <label for="employDesignation">Designation</label>
                    <select name="employDesignation">
                        <option value="{{ $employ->employDesignation }}">{{ $employ->employDesignation }}</option>
                        <option value="Superviser">Superviser</option>
                        <option value="Delivery">Delivery</option>
                        <option value="Accountant">Accountant</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="employIncentives">Incentives</label>
                    <input type="text" name="employIncentives" class="form-control" id="employIncentives" value="{{ $employ->employIncentives }}">
                </div>
                <button type="submit" class="btn btn-success">Update</button>
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
