
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url("/admin") }}">
          <div class="sidebar-brand-text mx-3">{{ Auth::user()->name }}</div>
        </a>
  
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
  
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="{{ url("/admin") }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>
  
        <!-- Divider -->
        <hr class="sidebar-divider">
  
        <!-- Heading -->
        <div class="sidebar-heading">
          Interface
        </div>
  
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Menu</span>
          </a>
          <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              
              {{-- <h6 class="collapse-header">Custom Components:</h6> --}}
              {{-- {{ dd(Auth::user()->checkIsAdmin(?) == false)}} --}}
              @if (Auth::user()->checkIsAdmin())
                <a class="collapse-item" href="{{ url("/admin/home") }}">Home</a>
                <a class="collapse-item" href="{{ url("/admin/profil") }}">Profil</a>
                <a class="collapse-item" href="{{ url("/admin/article") }}">Informasi</a>
                <a class="collapse-item" href="{{ url("/admin/unit") }}">Unit</a>
                <a class="collapse-item" href="{{ url("/admin/forum-kkm") }}">FORUM KKM</a>
                <a class="collapse-item" href="{{ url("/admin/forum-mgmp") }}">FORUM MGMP</a>
                <a class="collapse-item" href="{{ url("/admin/publikasi") }}">Publikasi</a>
                <a class="collapse-item" href="{{ url("/admin/sekolah") }}">Lembaga</a>
                <a class="collapse-item" href="{{ url("/admin/kerja-sama") }}">Kerja Sama</a>

              @elseif(Auth::user()->checkIsAdminKkm())
              <a class="collapse-item" href="{{ url("/admin/forum-kkm") }}">FORUM KKM</a>

              @elseif(Auth::user()->checkIsAdminMgmp()|| Auth::user()->checkIsAnggotaMgmp())
                <a class="collapse-item" href="{{ url("/admin/forum-mgmp") }}">FORUM MGMP</a>

              @endif
            </div>
          </div>
        </li>
        

        @if (Auth::user()->checkIsAdmin())
  
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
              <i class="fas fa-fw fa-wrench"></i>
              <span>Master</span>
            </a>
            <div id="collapseUtilities" class="collapse show" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ url("/admin/admin-kkm") }}">Admin  KKM</a>
                {{-- <a class="collapse-item" href="{{ url("/admin/anggota-kkm") }}">Anggota  KKM</a> --}}
                <a class="collapse-item" href="{{ url("/admin/admin-mgmp") }}">Admin  MGMP</a>
                <a class="collapse-item" href="{{ url("/admin/anggota-mgmp") }}">Anggota MGMP</a>
                {{-- <a class="collapse-item" href="{{ url("/admin/enroll") }}">Enroll</a> --}}
                <a class="collapse-item" href="{{ url("/siswa") }}">Siswa</a>
                
                <a class="collapse-item" href="{{ url("/admin/category-eprint") }}">Kategori Eprint</a>
                <a class="collapse-item" href="{{ url("/admin/licensi") }}">Licensi</a>
              </div>
            </div>
          </li>
    
        @endif
     
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
  
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
  
      </ul>
      <!-- End of Sidebar -->