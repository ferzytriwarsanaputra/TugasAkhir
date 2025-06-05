<aside id="sidebar" class="sidebar-toggle">
  <div class="sidebar-logo">
      <a href="/">LightLensEdu</a>
  </div>

  <ul class="sidebar-nav p-0">
      <li class="sidebar-header">Menu</li>

      <li class="sidebar-item">
          <a href="/dashboard-siswa" class="sidebar-link {{ request()->is('dashboard-siswa') ? 'active' : '' }}">
              <i class="bi bi-speedometer2"></i>
              <span>Dashboard</span>
          </a>
      </li>

      <li class="sidebar-item">
          <a href="/hasilSiswa" class="sidebar-link {{ request()->is('hasilSiswa') ? 'active' : '' }}">
              <i class="bi bi-card-checklist"></i>
              <span>Nilai Saya</span>
          </a>
      </li>

      <li class="sidebar-header">Daftar Materi</li>

      {{-- Materi 1 --}}
      <li class="sidebar-item">
        <a href="#" class="sidebar-link has-dropdown {{ request()->is('materi1/*') || request()->is('petunjuk/1') ? 'active-parent' : 'collapsed' }}" 
             data-bs-toggle="collapse" data-bs-target="#auth1" 
             aria-expanded="{{ request()->is('materi1/*') || request()->is('petunjuk/1') ? 'true' : 'false' }}"
             aria-controls="auth1">
              <i class="bi bi-brightness-high"></i>
              <span>Sifat Cahaya dan Proses Pembentukan Bayangan</span>
          </a>
          <ul id="auth1" class="sidebar-dropdown list-unstyled collapse {{ request()->is('materi1/*') || request()->is('petunjuk/1') ? 'show' : '' }}" data-bs-parent="#sidebar">
              <li class="sidebar-item">
                  <a href="/materi1/sifat-cahaya" class="sidebar-link {{ request()->is('materi1/sifat-cahaya') ? 'active' : '' }}">Sifat-sifat Cahaya</a>
              </li>
              <li class="sidebar-item">
                  <a href="/materi1/bayangan-cermin" class="sidebar-link {{ request()->is('materi1/bayangan-cermin') ? 'active' : '' }}">Pembentukan Bayangan Pada Cermin</a>
              </li>
              <li class="sidebar-item">
                  <a href="/materi1/lensa" class="sidebar-link {{ request()->is('materi1/lensa') ? 'active' : '' }}">Lensa</a>
              </li>
              <li class="sidebar-item">
                  <a href="/petunjuk/1" class="sidebar-link {{ request()->is('petunjuk/1') ? 'active' : '' }}">Kuis 1</a>
              </li>
          </ul>
      </li>

      {{-- Materi 2 --}}
      <li class="sidebar-item">
          <a href="#" class="sidebar-link has-dropdown {{ request()->is('materi2/*') || request()->is('petunjuk/2') ? 'active-parent' : 'collapsed' }}" 
             data-bs-toggle="collapse" data-bs-target="#auth2"
             aria-expanded="{{ request()->is('materi2/*') || request()->is('petunjuk/2') ? 'true' : 'false' }}"
             aria-controls="auth2">
              <i class="bi bi-eye"></i>
              <span>Indra Penglihatan Manusia dan Hewan</span>
          </a>
          <ul id="auth2" class="sidebar-dropdown list-unstyled collapse {{ request()->is('materi2/*') || request()->is('petunjuk/2') ? 'show' : '' }}" data-bs-parent="#sidebar">
              <li class="sidebar-item">
                  <a href="/materi2/penglihatan-manusia" class="sidebar-link {{ request()->is('materi2/penglihatan-manusia') ? 'active' : '' }}">Indra Penglihatan Manusia</a>
              </li>
              <li class="sidebar-item">
                  <a href="/materi2/penglihatan-serangga" class="sidebar-link {{ request()->is('materi2/penglihatan-serangga') ? 'active' : '' }}">Indra Penglihatan Serangga</a>
              </li>
              <li class="sidebar-item">
                  <a href="/petunjuk/2" class="sidebar-link {{ request()->is('petunjuk/2') ? 'active' : '' }}">Kuis 2</a>
              </li>
          </ul>
      </li>

      {{-- Materi 3 --}}
      <li class="sidebar-item">
          <a href="#" class="sidebar-link has-dropdown {{ request()->is('materi3/*') || request()->is('petunjuk/3') ? 'active-parent' : 'collapsed' }}" 
             data-bs-toggle="collapse" data-bs-target="#auth3"
             aria-expanded="{{ request()->is('materi3/*') || request()->is('petunjuk/3') ? 'true' : 'false' }}"
             aria-controls="auth3">
              <i class="bi bi-camera"></i>
              <span>Alat Optik dalam Kehidupan Sehari-hari</span>
          </a>
          <ul id="auth3" class="sidebar-dropdown list-unstyled collapse {{ request()->is('materi3/*') || request()->is('petunjuk/3') ? 'show' : '' }}" data-bs-parent="#sidebar">
              <li class="sidebar-item">
                  <a href="/materi3/kamera" class="sidebar-link {{ request()->is('materi3/kamera') ? 'active' : '' }}">Kamera</a>
              </li>
              <li class="sidebar-item">
                  <a href="/materi3/lup" class="sidebar-link {{ request()->is('materi3/lup') ? 'active' : '' }}">Kaca Pembesar (Lup)</a>
              </li>
              <li class="sidebar-item">
                  <a href="/materi3/mikroskop" class="sidebar-link {{ request()->is('materi3/mikroskop') ? 'active' : '' }}">Mikroskop</a>
              </li>
              <li class="sidebar-item">
                  <a href="/materi3/teleskop" class="sidebar-link {{ request()->is('materi3/teleskop') ? 'active' : '' }}">Teleskop</a>
              </li>
              <li class="sidebar-item">
                  <a href="/petunjuk/3" class="sidebar-link {{ request()->is('petunjuk/3') ? 'active' : '' }}">Kuis 3</a>
              </li>
          </ul>
      </li>

      <li class="sidebar-item">
          <a href="/petunjuk-evaluasi/4" class="sidebar-link {{ request()->is('petunjuk-evaluasi/4') ? 'active' : '' }}">
              <i class="bi bi-clipboard"></i>
              <span>Evaluasi</span>
          </a>
      </li>
  </ul>
</aside>