<nav class="nav-bar">
    <div class="container d-flex">
      <div class="col-4">
        <img src="/img/dc-logo.png" alt="logo.png" />
      </div>
      <div class="d-flex col">
          @foreach ($webpages as $webpage) 
        <span
          {{-- :class="item.active ? 'active' : ''" --}}
          class="text-uppercase"
          
          href="#"
          >

          {{ $webpage }}
          </span
        >
        @endforeach
      </div>
    </div>
  </nav>