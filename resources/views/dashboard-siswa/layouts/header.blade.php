@php
  $noSidebar = 
    Request::is('petunjuk/*') ||
    Request::is('kuis/*') ||
    Request::is('dashboard-siswa/nilai') ||
    Request::is('petunjuk-evaluasi/*') ||
    Request::is('evaluasi/mulai/*');
@endphp
<nav class="navbar navbar-expand fixed-top bg-white shadow-sm {{ $noSidebar ? 'no-sidebar' : '' }}">

    @if (
        Request::is('petunjuk/*') ||
        Request::is('kuis/*') ||
        Request::is('dashboard-siswa/nilai') ||
        Request::is('petunjuk-evaluasi/*') ||
        Request::is('evaluasi/mulai/*')
    )
        <div class="navbar-logo ms-3 {{ $noSidebar ? 'non-interactive' : '' }}">
          <a href="/" class="fw-bold text-decoration-none text-primary fs-4">LightLensEdu</a>
        </div>        
    @else
        <button class="toggler-btn" type="button">
            <i class="bi bi-justify fs-4"></i>
        </button>
    @endif
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
  
        @guest
          <li class="nav-item">
            <a href="{{ route('login') }}" class="nav-link {{ Request::is('login') ? 'active' : '' }}">
              <button class="btn btn-primary">
                <i class="bi bi-box-arrow-in-right"></i> Login
              </button>
            </a>
          </li>
        @endguest
  
        @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fw-bold d-flex align-items-center gap-2 {{ $noSidebar ? 'non-interactive' : '' }}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-person-circle fs-6"></i>
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
        @endauth
  
      </ul>
    </div>
  </nav>
  
  <!-- Tambahkan script ini di bawah halaman atau layout -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const logoutBtn = document.getElementById("logout-btn");
      const logoutForm = document.getElementById("logout-form");
  
      if (logoutBtn) {
        logoutBtn.addEventListener("click", function (e) {
          e.preventDefault();
          Swal.fire({
            title: 'Yakin ingin logout?',
            text: "Sesi kamu akan diakhiri.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, logout'
          }).then((result) => {
            if (result.isConfirmed) {
              logoutForm.submit();
            }
          });
        });
      }
    });
  </script>
  