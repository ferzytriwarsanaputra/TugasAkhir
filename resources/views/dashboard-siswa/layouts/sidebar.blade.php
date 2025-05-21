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
                    <a class="nav-link {{ Request::is('kuis/2') ? 'active' : '' }}" href="/petunjuk/2">Kuis 2</a>
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
                    <a class="nav-link {{ Request::is('kuis/3') ? 'active' : '' }}" href="/petunjuk/3">Kuis 3</a>
                  </li>
              </ul>
          </li>
          <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard-siswa/evaluasi') ? 'active' : '' }}" href="/petunjuk-evaluasi/4">
                  <span data-feather="clipboard"></span> Evaluasi
              </a>
          </li>
      </ul>
  </div>
</nav>