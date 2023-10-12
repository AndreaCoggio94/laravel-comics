<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')

  <title>Laravel</title>

  
</head>

<body>
    @yield('saluto')
  
</body>

</html>