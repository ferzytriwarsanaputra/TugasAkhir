<aside id="sidebar" class="sidebar-toggle">
    <div class="sidebar-logo">
        <a href="/">LightLensEdu</a>
    </div>
  
    <ul class="sidebar-nav p-0">
        <li class="sidebar-header">Menu</li>
  
        <li class="sidebar-item">
            <a href="/dashboard-guru" class="sidebar-link {{ request()->is('dashboard-guru') ? 'active' : '' }}">
                <i class="bi bi-speedometer2"></i>
                <span>Dashboard</span>
            </a>
        </li>
  
        <li class="sidebar-item">
            <a href="/dashboard-guru/akunSiswa" class="sidebar-link {{ request()->is('dashboard-guru/akunSiswa') ? 'active' : '' }}">
                <i class="bi bi-person-lines-fill"></i>
                <span>Akun Siswa</span>
            </a>
        </li>

        <li class="sidebar-item">
            <a href="/dashboard-guru/hasil-kuis" class="sidebar-link {{ request()->is('dashboard-guru/hasil-kuis') ? 'active' : '' }}">
                <i class="bi bi-card-checklist"></i>
                <span>Hasil Kuis</span>
            </a>
        </li>

        <li class="sidebar-item">
            <a href="/dashboard-guru/progres" class="sidebar-link {{ request()->is('dashboard-guru/progres') ? 'active' : '' }}">
                <i class="bi bi-bar-chart"></i>
                <span>Progress Belajar Siswa</span>
            </a>
        </li>

        <li class="sidebar-item">
            <a href="/dashboard-guru/kkm" class="sidebar-link {{ request()->is('dashboard-guru/kkm') ? 'active' : '' }}">
                <i class="bi bi-gear"></i>
                <span>Atur KKM</span>
            </a>
        </li>
    </ul>
  </aside>  