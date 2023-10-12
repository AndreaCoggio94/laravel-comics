<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

{{-- @vite(["resources/scss/custom.scss", ]) --}}

<head>
    @include('partials.head')

  <title>Laravel</title>

  
</head>

<body class="body">

    <header>
        @include('partials.header')
    </header>
    <main>
        <div class="jumbotron">
            <div class="container">
              <div class="btn-blue">CURRENT SERIES</div>
              <div class="d-flex">
                @yield('cards')
                
              </div>
              <div class="btn btn-blue">LOAD MORE</div>
            </div>
          </div>
        
          <div class="buy">
            <div class="container d-flex">
                @yield('buy')
              
            </div>
          </div>
    </main>
    <footer>
        @include('partials.footer')
    </footer>
    
  
</body>

</html>