@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
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
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($clients ?? '' as $client)
            <tr>
              <th scope="row">{{ $client->id }}</th>
              <td>{{ $client->name }}</td>
              <td>{{ $client->address }}</td>
              <td>
                    <a href="client/{{ $client->id }}/edit">edit</a>
                    <form action="{{ route('client.destroy',$client->id) }}" method="POST">
                        @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
              </td>
            </tr>
                
            @endforeach
        </tbody>
      </table>
</div>
@endsection
