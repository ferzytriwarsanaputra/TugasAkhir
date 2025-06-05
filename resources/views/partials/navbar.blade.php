<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="/">LightLensEdu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto align-items-center">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('materi') ? 'active' : '' }}" href="/materi">Materi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('tentang') ? 'active' : '' }}" href="/tentang">Tentang</a>
        </li>

        @if(Auth::check())
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ Auth::user()->nama ?? 'User' }}
            </a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/">Beranda</a></li>
              <li>
                <a href="#" id="logout-btn" class="dropdown-item text-danger">
                  <i class="bi bi-box-arrow-right"></i> Logout
                </a>
                
                <form id="logout-form" action="{{ route('login.logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>                
              </li>
            </ul>
          </li>
        @else
          <li class="nav-item">
            <a href="{{ route('login') }}" class="nav-link">
              <button class="btn btn-primary">
                <i class="bi bi-box-arrow-in-right"></i> Login
              </button>
            </a>
          </li>
        @endif
      </ul>
    </div>
  </div>
</nav>
