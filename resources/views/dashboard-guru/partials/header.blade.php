<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
      <a class="navbar-brand text-white" href="/">LightLensEdu</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
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
                      <a class="nav-link dropdown-toggle text-white fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
  </div>
</nav>
