<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('elem.head')
    </head>
    <body>
      @yield('content')
    </body>
</html>
