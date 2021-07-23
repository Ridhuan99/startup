<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <div class=" navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav mx-auto">
      @if (Auth::user()->role == "buyer")
        <a class="nav-item nav-link active" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
      @endif
      <a class="nav-item nav-link" href="#">Features</a>
      <a class="nav-item nav-link" href="#">Pricing</a>
    </div>
  </div>
</nav>
