    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-volleyball-ball"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Sportal</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Administrator
      </div>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('performa'); ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Performa</span></a>
      </li>

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-volleyball-ball"></i>
          <span>Lapangan</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?=base_url('admin/managefutsal')?>">Futsall</a>
            <a class="collapse-item" href="<?=base_url('admin/managebadminton')?>">Badminton</a>
            <a class="collapse-item" href="<?=base_url('admin/managevoli')?>">Voli</a>
            <a class="collapse-item" href="<?=base_url('admin/managebasket')?>">Basket</a>
          </div>
        </div>
      </li>

            <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Daftar User</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url('user/member'); ?>">Member</a>
            <a class="collapse-item" href="<?= base_url('user/admin'); ?>">Admin</a>
            <a class="collapse-item" href="<?= base_url('user/pemilik'); ?>">Pemilik</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('laporan'); ?>">
          <i class="fas fa-fw fa-file-archive"></i>
          <span>Laporan</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

     <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Memberarea/admin')?>">
          <i class="fas fa-fw fa-user"></i>
          <span>Profile Saya</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Admin/editprofile')?>">
          <i class="fas fa-fw fa-user-cog"></i>
          <span>Edit Profil</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout/'); ?>">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->