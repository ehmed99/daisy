<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>DasiyWater</title>
        @include('layouts.header')
        @stack('css')

      <div id="app">
          @auth
                @include('layouts.nav')
          @endauth
          
        <main class="py-4">

                    @yield('content')
              
        </main>
        @include('layouts.footer')
        @stack('js')
    </div>
</body>
</html>
