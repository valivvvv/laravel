<div class="navbar navbar-inverse bg-inverse">
  <div class="container d-flex justify-content-between">
    <a href="#" class="navbar-brand">Album</a>
    
    @if ( Auth::check() )
      <a class="nav-link ml-auto" href="">{{ Auth::user()->name }}</a>
    @endif

  </div>
</div>
<br>