<header>
  <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('home') }}" target="_blank">Vedi il sito</a>
      <div class="d-flex">
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

        <form class="py-2" action="{{ route('logout') }}" method="POST">
          @csrf
          <button type="submit" class="ms-3 btn btn-danger">
            Logout
            <i class="fa-solid fa-right-from-bracket"></i>
          </button>
        </form>

        <p class="mx-3 pt-3">
          {{ Auth::user()->name }}
        </p>
      </div>
    </div>
  </nav>
</header>