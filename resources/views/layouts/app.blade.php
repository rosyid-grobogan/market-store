<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width" />
        {{-- Style --}}
        @stack('prepend-style')
        @include('includes.style')
        @stack('addon-style')
  </head>
  <body>
    {{-- Navigation Bar --}}
    @include('includes.navbar')

    {{-- Page Content --}}
    @yield('content')

    {{-- Footer --}}
    @include('includes.footer')

    {{-- Script --}}
    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')
  </body>
</html>
