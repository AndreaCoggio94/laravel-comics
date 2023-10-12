<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

{{-- @vite(["resources/scss/custom.scss", ]) --}}

<head>
    @include('partials.head')

  <title>Laravel</title>

  
</head>

<body>

    <header>
        @include('partials.header')
    </header>
    <main>

    </main>
    <footer></footer>
    @yield('saluto')
  
</body>

</html>