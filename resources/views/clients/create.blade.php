@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="{{ route('client.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control">
                </div>
                <div class="form-group">
                    <label for="clientPh">Phone no</label>
                    <input type="number" name="clientPh" class="form-control">
                </div>
                <div class="form-group">
                    <label for="rate">Rate</label>
                    <input type="text" name="rate" class="form-control">
                </div>
                <div class="form-group">
                    <label for="qty">Qty</label>
                    <input type="text" name="qty" class="form-control">
                </div>
                <button type="submit" class="btn btn-danger">Submit</button>
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
