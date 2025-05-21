{{-- <nav class="navbar navbar-expand d-flex justify-content-between align-items-center">
    <button class="toggler-btn" type="button">
        <i class="lni lni-text-align-left"></i>
    </button>
    <div class="sidebar-footer ms-auto">
        <a href="/" class="sidebar-link d-flex align-items-center">
            <i class="lni lni-exit"></i>
            <span class="ms-2">Logout</span>
        </a>
    </div>
</nav> --}}

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap shadow py-2">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/">LightLensEdu</a>
  
    <!-- toggler sidebar (mobile) -->
    <button class="navbar-toggler d-md-none ms-3" type="button"
            data-bs-toggle="collapse" data-bs-target="#sidebarMenu"
            aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation"
            style="z-index: 1050;">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <ul class="navbar-nav ms-auto">
      @auth
        <li class="nav-item d-flex align-items-center">
          {{-- Nama user --}}
          <span class="navbar-text text-white fw-bold me-3">
            {{ Auth::user()->nama }}
          </span>
          {{-- Tombol logout --}}
          <form action="{{ route('login.logout') }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-danger btn-sm me-3">
                <span data-feather="log-out"></span> Logout
            </button>
        </form>        
        </li>
      @endauth
  
      @guest
        <li class="nav-item">
          <a class="nav-link text-white me-3" href="{{ route('login') }}">
            <i class="bi bi-box-arrow-in-right"></i> Login
          </a>
        </li>
      @endguest
    </ul>
  </header>