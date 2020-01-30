{{-- <h1>this will be the landing page</h1>
@guest
<a href="/login">Login</a>
@endguest
@auth
    @if(Auth::user()->user_type == "admin")
        <a href="/admin">Admin Panel</a>
    @else
        <a href="/emp">Emp Panel </a>
    @endif    
@endauth --}}

@extends('layouts.admin')

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="row">
                    @guest
                    <div class="col-lg">
                        <a href="/login"><button type="button" class="btn btn-success btn-lg btn-block custom-main-btn">Login</button></a>
                    </div>
                    <div class="col-lg">
                            <button type="button" class="btn btn-danger btn-lg btn-block custom-main-btn">Register</button>
                    </div>
                    @endguest
                    @auth
                    @if(Auth::user()->user_type == "admin")
                    @else
                        {{-- <a href="#">Emp Panel </a> --}}
                    @endif      
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
