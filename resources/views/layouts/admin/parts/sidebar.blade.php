<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">SALINGBANTU</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">SB</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Halaman</li>
            <li><a class="nav-link" href="{{url('dashboard')}}"><i class="fas fa-pencil-ruler"></i>
                    <span>Dashboard</span></a></li>
            <li><a class="nav-link" href="{{route('dashboard.users')}}"><i class="fas fa-user"></i>
                        <span>Daftar Pengguna</span></a></li>
            <li><a class="nav-link" href="{{url('dashboard')}}"><i class="fas fa-history"></i>
                        <span>Riwayat Konsultasi</span></a></li>

            <li class="menu-header">Sistem</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-ellipsis-h"></i> <span>Master Data</span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('dashboard.ages')}}">Master Rentang Usia</a></li>
                    <li><a href="{{route('dashboard.games')}}">Master Permainan</a></li>
                    <li><a href="{{route('dashboard.behaviors')}}">Master Perilaku Anak</a></li>
                    <li><a href="#">Master Aturan</a></li>
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
