@include('layouts.header')
      <div id="app">
          
          @include('layouts.nav')
          
        <main class="py-4">

                    @yield('content')
              
        </main>
        @include('layouts.footer')
    </div>
</body>
</html>
