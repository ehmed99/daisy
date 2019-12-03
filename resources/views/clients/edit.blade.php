@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="{{ route('client.update', $client->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $client->name }}">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea name="address" id="" cols="30" rows="10" class="form-control">{{ $client->address }}</textarea>
                </div>
                <button type="submit" class="btn btn-danger">Update</button>
            </form>
        </div>
    </div>
 
</div>
@endsection
