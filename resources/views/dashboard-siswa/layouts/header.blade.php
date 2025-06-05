<nav class="navbar navbar-expand">
  <button class="toggler-btn" type="button">
      <i class="bi bi-justify"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ms-auto">
        @guest
            <li class="nav-item">
                <a href="/login" class="nav-link {{ Request::is('login') ? 'active' : '' }}">
                    <button class="btn btn-primary">
                        <i class="bi bi-box-arrow-in-right"></i> Login
                    </button>
                </a>
            </li>
        @endguest

        @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-black fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->nama }}
                </a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/">Beranda</a></li>
                    <li>
                        <form action="/logout" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </li>
                </ul>
            </li>
        @endauth
    </ul>
  </div>
</nav>