@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-11"></div>
        <div class="col-1">
            <a href="/client/create" class="btn btn-primary">
                Create
            </a>
        </div>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Phone No</th>
            <th scope="col">Rate</th>
            <th scope="col">Qty</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            {{$no=1}}
            @foreach ($clients ?? '' as $client)
            <tr>
              <th scope="row">{{ $no }}</th>
              <td>{{ $client->name }}</td>
              <td>{{ $client->address }}</td>
              <td>{{ $client->clientPh }}</td>
              <td>{{ $client->rate }}</td>
              <td>{{ $client->qty }}</td>
              <td class="row">
                <a href="client/{{ $client->id }}/edit" class="btn btn-success"> Edit</a>
                <form action="{{ route('client.destroy',$client->id) }}" method="POST" style="margin-left: auto">
                    @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                </form>
              </td>
            </tr>
            {{$no++}}    
            @endforeach
        </tbody>
      </table>
</div>
@endsection
