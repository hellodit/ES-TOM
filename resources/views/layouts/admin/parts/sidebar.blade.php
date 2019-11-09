<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">TUGASAKHIR</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">TA</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Halaman</li>
            <li><a class="nav-link" href="{{url('dashboard')}}"><i class="fas fa-pencil-ruler"></i>
                    <span>Dashboard</span></a></li>
            <li><a class="nav-link" href="{{route('dashboard.users')}}"><i class="fas fa-user"></i>
                    <span>Daftar Pengguna</span></a></li>
            <li><a class="nav-link" href="{{route('dashboard.consul')}}"><i class="fas fa-history"></i>
                        <span>Konsultasi</span></a></li>
            <li><a class="nav-link" href="{{route('dashboard.history')}}"><i class="fas fa-history"></i>
                    <span>Riwayat Konsultasi</span></a></li>

            <li class="menu-header">Sistem</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-ellipsis-h"></i> <span>Manajemen Data</span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('dashboard.games')}}">Manajemen Permainan</a></li>
                    <li><a href="{{route('dashboard.parameters')}}">Manajemen Parameter</a></li>
                    {{-- <li><a href="{{route('dashboard.gameparam')}}">Basis Pengetahuan</a></li> --}}
                    <li><a href="{{route('dashboard.rules')}}">Manajemen Aturan</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-ellipsis-h"></i> <span>Pengaturan</span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('dashboard.setting')}}">Pengaturan Akun</a></li>
                </ul>
            </li>
            </li>
        </ul>
    </aside>
</div>
