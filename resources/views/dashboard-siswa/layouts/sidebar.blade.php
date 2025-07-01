@php
    $akses = $aksesMateri ?? [];
    $role = Auth::user()->role ?? null;
    $aksesSemua = $role === 'guru'; // guru bisa akses semua
@endphp

<aside id="sidebar" class="sidebar-toggle">
  <div class="sidebar-logo">
      <a href="/">LightLensEdu</a>
  </div>

  <ul class="sidebar-nav p-0">

      @if($role === 'siswa')
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
      @endif

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

            @php $materi = 'materi1.sifat-cahaya'; @endphp
            <li class="sidebar-item">
                <a href="/materi1/sifat-cahaya"
                   class="sidebar-link d-flex justify-content-between align-items-center {{ request()->is('materi1/sifat-cahaya') ? 'active' : '' }} {{ !($aksesSemua || ($akses[$materi] ?? false)) ? 'disabled' : '' }}"
                   onclick="return {{ !($aksesSemua || ($akses[$materi] ?? false)) ? 'false' : 'true' }}">
                    <span>Sifat-sifat Cahaya</span>
                    @if (!($aksesSemua || ($akses[$materi] ?? false))) <i class="bi bi-lock-fill text-muted ms-2"></i> @endif
                </a>
            </li>

            @php $materi = 'materi1.bayangan-cermin'; @endphp
            <li class="sidebar-item">
                <a href="/materi1/bayangan-cermin"
                   class="sidebar-link d-flex justify-content-between align-items-center {{ request()->is('materi1/bayangan-cermin') ? 'active' : '' }} {{ !($aksesSemua || ($akses[$materi] ?? false)) ? 'disabled' : '' }}"
                   onclick="return {{ !($aksesSemua || ($akses[$materi] ?? false)) ? 'false' : 'true' }}">
                    <span>Pembentukan Bayangan Pada Cermin</span>
                    @if (!($aksesSemua || ($akses[$materi] ?? false))) <i class="bi bi-lock-fill text-muted ms-2"></i> @endif
                </a>
            </li>

            @php $materi = 'materi1.lensa'; @endphp
            <li class="sidebar-item">
                <a href="/materi1/lensa"
                   class="sidebar-link d-flex justify-content-between align-items-center {{ request()->is('materi1/lensa') ? 'active' : '' }} {{ !($aksesSemua || ($akses[$materi] ?? false)) ? 'disabled' : '' }}"
                   onclick="return {{ !($aksesSemua || ($akses[$materi] ?? false)) ? 'false' : 'true' }}">
                    <span>Lensa</span>
                    @if (!($aksesSemua || ($akses[$materi] ?? false))) <i class="bi bi-lock-fill text-muted ms-2"></i> @endif
                </a>
            </li>

            @php $kuis = 'kuis.1'; @endphp
            <li class="sidebar-item">
                <a href="/petunjuk/1"
                   class="sidebar-link d-flex justify-content-between align-items-center {{ request()->is('petunjuk/1') ? 'active' : '' }} {{ !($aksesSemua || ($akses[$kuis] ?? false)) ? 'disabled' : '' }}"
                   onclick="return {{ !($aksesSemua || ($akses[$kuis] ?? false)) ? 'false' : 'true' }}">
                    <span>Kuis 1</span>
                    @if (!($aksesSemua || ($akses[$kuis] ?? false))) <i class="bi bi-lock-fill text-muted ms-2"></i> @endif
                </a>
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

            @php $materi = 'materi2.penglihatan-manusia'; @endphp
            <li class="sidebar-item">
                <a href="/materi2/penglihatan-manusia"
                   class="sidebar-link d-flex justify-content-between align-items-center {{ request()->is('materi2/penglihatan-manusia') ? 'active' : '' }} {{ !($aksesSemua || ($akses[$materi] ?? false)) ? 'disabled' : '' }}"
                   onclick="return {{ !($aksesSemua || ($akses[$materi] ?? false)) ? 'false' : 'true' }}">
                    <span>Indra Penglihatan Manusia</span>
                    @if (!($aksesSemua || ($akses[$materi] ?? false))) <i class="bi bi-lock-fill text-muted ms-2"></i> @endif
                </a>
            </li>

            @php $materi = 'materi2.penglihatan-serangga'; @endphp
            <li class="sidebar-item">
                <a href="/materi2/penglihatan-serangga"
                   class="sidebar-link d-flex justify-content-between align-items-center {{ request()->is('materi2/penglihatan-serangga') ? 'active' : '' }} {{ !($aksesSemua || ($akses[$materi] ?? false)) ? 'disabled' : '' }}"
                   onclick="return {{ !($aksesSemua || ($akses[$materi] ?? false)) ? 'false' : 'true' }}">
                    <span>Indra Penglihatan Serangga</span>
                    @if (!($aksesSemua || ($akses[$materi] ?? false))) <i class="bi bi-lock-fill text-muted ms-2"></i> @endif
                </a>
            </li>

            @php $kuis = 'kuis.2'; @endphp
            <li class="sidebar-item">
                <a href="/petunjuk/2"
                   class="sidebar-link d-flex justify-content-between align-items-center {{ request()->is('petunjuk/2') ? 'active' : '' }} {{ !($aksesSemua || ($akses[$kuis] ?? false)) ? 'disabled' : '' }}"
                   onclick="return {{ !($aksesSemua || ($akses[$kuis] ?? false)) ? 'false' : 'true' }}">
                    <span>Kuis 2</span>
                    @if (!($aksesSemua || ($akses[$kuis] ?? false))) <i class="bi bi-lock-fill text-muted ms-2"></i> @endif
                </a>
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

            @foreach (['kamera', 'lup', 'mikroskop', 'teleskop'] as $item)
              @php $materi = "materi3.$item"; @endphp
              <li class="sidebar-item">
                  <a href="/materi3/{{ $item }}"
                     class="sidebar-link d-flex justify-content-between align-items-center {{ request()->is("materi3/$item") ? 'active' : '' }} {{ !($aksesSemua || ($akses[$materi] ?? false)) ? 'disabled' : '' }}"
                     onclick="return {{ !($aksesSemua || ($akses[$materi] ?? false)) ? 'false' : 'true' }}">
                      <span>{{ ucfirst($item) }}</span>
                      @if (!($aksesSemua || ($akses[$materi] ?? false))) <i class="bi bi-lock-fill text-muted ms-2"></i> @endif
                  </a>
              </li>
            @endforeach

            @php $kuis = 'kuis.3'; @endphp
            <li class="sidebar-item">
                <a href="/petunjuk/3"
                   class="sidebar-link d-flex justify-content-between align-items-center {{ request()->is('petunjuk/3') ? 'active' : '' }} {{ !($aksesSemua || ($akses[$kuis] ?? false)) ? 'disabled' : '' }}"
                   onclick="return {{ !($aksesSemua || ($akses[$kuis] ?? false)) ? 'false' : 'true' }}">
                    <span>Kuis 3</span>
                    @if (!($aksesSemua || ($akses[$kuis] ?? false))) <i class="bi bi-lock-fill text-muted ms-2"></i> @endif
                </a>
            </li>

          </ul>
      </li>

      @php $evaluasi = 'evaluasi'; @endphp
      <li class="sidebar-item">
        <a href="/petunjuk-evaluasi/4"
           class="sidebar-link d-flex justify-content-between align-items-center {{ request()->is('petunjuk-evaluasi/4') ? 'active' : '' }} {{ !($aksesSemua || ($akses[$evaluasi] ?? false)) ? 'disabled' : '' }}"
           onclick="return {{ !($aksesSemua || ($akses[$evaluasi] ?? false)) ? 'false' : 'true' }}">
            <span><i class="bi bi-clipboard me-2"></i>Evaluasi</span>
            @if (!($aksesSemua || ($akses[$evaluasi] ?? false))) <i class="bi bi-lock-fill text-muted ms-2"></i> @endif
        </a>
      </li>

  </ul>
</aside>