<h1>this will be the landing page</h1>
@guest
<a href="/login">Login</a>
@endguest
@auth
    @if(Auth::user()->user_type == "admin")
        <a href="/admin">Admin Panel</a>
    @else
        <a href="/emp">Emp Panel </a>
    @endif    
@endauth