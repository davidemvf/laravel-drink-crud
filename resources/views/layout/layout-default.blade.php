<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('elem.head')
    </head>
    <body>
      <header>
        <h1>Bevande</h1>
      </header>
      @yield('content')
    </body>
</html>
