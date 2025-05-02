{{-- <!-- Sidebar -->
<aside id="sidebar" class="sidebar-toggle" style="overflow-y: auto; max-height: 100vh;">
  <div class="sidebar-logo">
      <a href="/">LightLensEdu</a>
  </div>
  <!-- Sidebar Navigation -->
  <ul class="sidebar-nav p-0 small">
      <!-- Materi 1 -->
      <li class="sidebar-item">
        <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
            data-bs-target="#materi1" aria-expanded="false" aria-controls="materi1">
            <i class="lni lni-protection"></i>
            <span>Sifat Cahaya dan Proses Pembentukan Bayangan</span>
        </a>
        <ul id="materi1" class="sidebar-dropdown list-unstyled collapse {{ Request::is('materi1/*') ? 'show' : '' }}">
            <li class="sidebar-item">
              <a href="/materi1/tujuan" class="sidebar-link {{ Request::is('materi1/tujuan') ? 'active' : '' }}">Tujuan Pembelajaran</a>
            </li>
            <li class="sidebar-item">
              <a href="/materi1/sifat-cahaya" class="sidebar-link {{ Request::is('materi1/sifat-cahaya') ? 'active' : '' }}">Sifat-sifat Cahaya</a>
            </li>
            <li class="sidebar-item">
              <a href="/materi1/bayangan-cermin" class="sidebar-link {{ Request::is('materi1/bayangan-cermin') ? 'active' : '' }}">Pembentukan Bayangan pada Cermin</a>
            </li>
            <li class="sidebar-item">
              <a href="/materi1/lensa" class="sidebar-link {{ Request::is('materi1/lensa') ? 'active' : '' }}">Lensa</a>
            </li>
            <li class="sidebar-item">
              <a href="/materi1/kuis" class="sidebar-link {{ Request::is('materi1/kuis') ? 'active' : '' }}">Kuis 1</a>
            </li>
        </ul>
      </li>
      
      <!-- Materi 2 -->
      <li class="sidebar-item">
        <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
            data-bs-target="#materi2" aria-expanded="false" aria-controls="materi2">
            <i class="lni lni-protection"></i>
            <span>Indra Penglihatan Manusia dan Hewan</span>
        </a>
        <ul id="materi2" class="sidebar-dropdown list-unstyled collapse {{ Request::is('materi2/*') ? 'show' : '' }}">
            <li class="sidebar-item">
              <a href="/materi2/tujuan" class="sidebar-link {{ Request::is('materi2/tujuan') ? 'active' : '' }}">Tujuan Pembelajaran</a>
            </li>
            <li class="sidebar-item">
              <a href="/materi2/penglihatan-manusia" class="sidebar-link {{ Request::is('materi2/penglihatan-manusia') ? 'active' : '' }}">Indra Penglihatan Manusia</a>
            </li>
            <li class="sidebar-item">
              <a href="/materi2/penglihatan-serangga" class="sidebar-link {{ Request::is('materi2/penglihatan-serangga') ? 'active' : '' }}">Indra Penglihatan Hewan</a>
            </li>
            <li class="sidebar-item">
              <a href="/materi2/kuis" class="sidebar-link {{ Request::is('materi2/kuis') ? 'active' : '' }}">Kuis 2</a>
            </li>
        </ul>
      </li>
      
      <!-- Materi 3 -->
      <li class="sidebar-item">
        <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
            data-bs-target="#materi3" aria-expanded="false" aria-controls="materi3">
            <i class="lni lni-protection"></i>
            <span>Alat Optik dalam Kehidupan Sehari-hari</span>
        </a>
        <ul id="materi3" class="sidebar-dropdown list-unstyled collapse {{ Request::is('materi3/*') ? 'show' : '' }}">
            <li class="sidebar-item">
              <a href="/materi3/tujuan" class="sidebar-link {{ Request::is('materi3/tujuan') ? 'active' : '' }}">Tujuan Pembelajaran</a>
            </li>
            <li class="sidebar-item">
              <a href="/materi3/kamera" class="sidebar-link {{ Request::is('materi3/kamera') ? 'active' : '' }}">Kamera</a>
            </li>
            <li class="sidebar-item">
              <a href="/materi3/lup" class="sidebar-link {{ Request::is('materi3/lup') ? 'active' : '' }}">Kaca Pembesar (Lup)</a>
            </li>
            <li class="sidebar-item">
              <a href="/materi3/mikroskop" class="sidebar-link {{ Request::is('materi3/mikroskop') ? 'active' : '' }}">Mikroskop</a>
            </li>
            <li class="sidebar-item">
              <a href="/materi3/teleskop" class="sidebar-link {{ Request::is('materi3/teleskop') ? 'active' : '' }}">Teleskop</a>
            </li>
            <li class="sidebar-item">
              <a href="/materi3/kuis" class="sidebar-link {{ Request::is('materi3/kuis') ? 'active' : '' }}">Kuis 3</a>
            </li>
        </ul>
      </li>
      <li class="sidebar-item">
        <a href="/dashboard-siswa/evaluasi" class="sidebar-link {{ Request::is('dashboard-siswa/evaluasi') ? 'active' : '' }}">
            <i class="lni lni-user"></i>
            <span>Evaluasi</span>
        </a>
    </li>
  </ul>
  <!-- Sidebar Navigation Ends -->
</aside> --}}
<!-- Sidebar Ends -->

<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse" style="height: 100vh; overflow-y: auto;">
  <div class="position-sticky pt-3">
      <ul class="nav flex-column">
          <li class="nav-item">
              <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#materi1Dropdown" role="button" 
                 aria-expanded="{{ Request::is('materi1/*') ? 'true' : 'false' }}" aria-controls="materi1Dropdown">
                  <span><span data-feather="sun"></span> Sifat Cahaya dan Proses Pembentukan Bayangan</span>
                  <span data-feather="chevron-down"></span>
              </a>
              <ul class="collapse list-unstyled ms-3 {{ Request::is('materi1/*') ? 'show' : '' }}" id="materi1Dropdown">
                  <li class="nav-item">
                    <a class="nav-link {{ Request::is('materi1/sifat-cahaya') ? 'active' : '' }}" href="/materi1/sifat-cahaya">Sifat-sifat Cahaya</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ Request::is('materi1/bayangan-cermin') ? 'active' : '' }}" href="/materi1/bayangan-cermin">Pembentukan Bayangan pada Cermin</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ Request::is('materi1/lensa') ? 'active' : '' }}" href="/materi1/lensa">Lensa</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ Request::is('kuis/1') ? 'active' : '' }}" href="/petunjuk/1">Kuis 1</a>
                  </li>
              </ul>
          </li>
          <li class="nav-item">
              <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#materi2Dropdown" role="button" 
                 aria-expanded="{{ Request::is('materi2/*') ? 'true' : 'false' }}" aria-controls="materi2Dropdown">
                  <span><span data-feather="eye"></span> Indra Penglihatan Manusia dan Hewan</span>
                  <span data-feather="chevron-down"></span>
              </a>
              <ul class="collapse list-unstyled ms-3 {{ Request::is('materi2/*') ? 'show' : '' }}" id="materi2Dropdown">
                  <li class="nav-item">
                    <a class="nav-link {{ Request::is('materi2/penglihatan-manusia') ? 'active' : '' }}" href="/materi2/penglihatan-manusia">Indra Penglihatan Manusia</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ Request::is('materi2/penglihatan-serangga') ? 'active' : '' }}" href="/materi2/penglihatan-serangga">Indra Penglihatan Serangga</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ Request::is('materi2/kuis') ? 'active' : '' }}" href="/materi2/kuis">Kuis 2</a>
                  </li>
              </ul>
          </li>
          <li class="nav-item">
              <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#materi3Dropdown" role="button" 
                 aria-expanded="{{ Request::is('materi3/*') ? 'true' : 'false' }}" aria-controls="materi3Dropdown">
                  <span><span data-feather="camera"></span> Alat Optik dalam Kehidupan Sehari-hari</span>
                  <span data-feather="chevron-down"></span>
              </a>
              <ul class="collapse list-unstyled ms-3 {{ Request::is('materi3/*') ? 'show' : '' }}" id="materi3Dropdown">
                  <li class="nav-item">
                    <a class="nav-link {{ Request::is('materi3/kamera') ? 'active' : '' }}" href="/materi3/kamera">Kamera</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ Request::is('materi3/lup') ? 'active' : '' }}" href="/materi3/lup">Kaca Pembesar (Lup)</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ Request::is('materi3/mikroskop') ? 'active' : '' }}" href="/materi3/mikroskop">Mikroskop</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ Request::is('materi3/teleskop') ? 'active' : '' }}" href="/materi3/teleskop">Teleskop</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ Request::is('materi3/kuis') ? 'active' : '' }}" href="/materi3/kuis">Kuis 3</a>
                  </li>
              </ul>
          </li>
          <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard-siswa/evaluasi') ? 'active' : '' }}" href="/dashboard-siswa/evaluasi">
                  <span data-feather="clipboard"></span> Evaluasi
              </a>
          </li>
      </ul>
  </div>
</nav>