@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-11"></div>
        <div class="col-1">
            <a href="/employ/create" class="btn btn-primary">
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
            <th scope="col">Joining</th>
            <th scope="col">Salary</th>
            <th scope="col">Designation</th>
            <th scope="col">Incentives</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            {{$no=1}}
            @foreach ($employs ?? '' as $employ)
            <tr>
              <th scope="row">{{ $no }}</th>
              <td>{{ $employ->emplyName }}</td>
              <td>{{ $employ->employAddress }}</td>
              <td>{{ $employ->employPh }}</td>
              <td>{{ $employ->employJoining }}</td>
              <td>{{ $employ->employSalary }}</td>
              <td>{{ $employ->employDesignation }}</td>
              <td>{{ $employ->employIncentives }}</td>
              <td class="row">
                <a href="employ/{{ $employ->id }}/edit" class="btn btn-warning">Edit</a>
                <form action="{{ route('employ.destroy',$employ->id) }}" method="POST" style="margin-left: auto">
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
