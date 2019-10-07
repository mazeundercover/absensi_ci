<?php
  $data['header'] = $header;
  $this->load->view('templates/header',$data);
?>
  <!-- Page Wrapper -->
  <div id="wrapper" class="container">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=base_url();?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <!-- <i class="fas fa-laugh-wink"></i> -->
        </div>
        <div class="sidebar-brand-text mx-3">Aplikasi Absensi</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <?php
        
        $urisegment = $this->uri->segment(0);
        if ($urisegment=='') {
          $urlpage = 'home';
        } else {
          $urlpage = $urisegment;
        }
        echo $urisegment;
      ?>

      <!-- Nav Item - Dashboard -->
      <li class="nav-item <?=$urlpage=='home' ? 'active' : '';?>">
        <a class="nav-link" href="<?=base_url();?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <?php
      if(($_SESSION['level'] == 'ADMIN' || $_SESSION['level'] == 'BK')) {
      ?>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu
      </div>

      <!-- Nav Item - Absensi -->
      <li class="nav-item <?=$urlpage=='absensi' ? 'active' : '';?>">
        <a class="nav-link" href="<?=base_url('/absensi/data_kelas');?>">
          <i class="fas fa-fw fa-bell"></i>
          <span>Absensi</span></a>
      </li>

      <?php
      if($_SESSION['level'] == 'ADMIN') {
      ?>
      <!-- Nav Item - Siswa -->
      <li class="nav-item <?=$urlpage=='siswa' ? 'active' : '';?>">
        <a class="nav-link" href="<?=base_url('/siswa');?>">
          <i class="fas fa-fw fa-child"></i>
          <span>Siswa</span></a>
      </li>

      <!-- Nav Item - Kelas -->
      <li class="nav-item <?=$urlpage=='kelas' ? 'active' : '';?>">
        <a class="nav-link" href="<?=base_url('/kelas');?>">
          <i class="fas fa-fw fa-list"></i>
          <span>Kelas</span></a>
      </li>
      
      <!-- Nav Item - Guru -->
      <li class="nav-item <?=$urlpage=='guru' ? 'active' : '';?>">
        <a class="nav-link" href="<?=base_url('/guru');?>">
          <i class="fas fa-fw fa-chalkboard-teacher"></i>
          <span>Guru / Wali Kelas</span></a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-folder"></i>
          <span>Master</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item  <?=$urlpage=='semester' ? 'active' : '';?>" href="<?=base_url('/semester');?>">Semester</a>
            <a class="collapse-item  <?=$urlpage=='tahunajar' ? 'active' : '';?>" href="<?=base_url('/tahunajar');?>">Tahun Ajaran</a>
            <a class="collapse-item  <?=$urlpage=='jurusan' ? 'active' : '';?>" href="<?=base_url('/jurusan');?>">Jurusan</a>
            <a class="collapse-item  <?=$urlpage=='config' ? 'active' : '';?>" href="<?=base_url('/config');?>">Config</a>
          </div>
        </div>
      </li>
      <!-- Nav Item - Absensi -->
      <li class="nav-item <?=$urlpage=='user' ? 'active' : '';?>">
        <a class="nav-link" href="<?=base_url('/user');?>">
          <i class="fas fa-fw fa-id-badge"></i>
          <span>User</span></a>
      </li>

    <?php }} ?>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Laporan
      </div>

      <!-- Nav Item - Bulanan -->
      <li class="nav-item <?=$urlpage=='lap_bulanan' ? 'active' : '';?>">
        <a class="nav-link" href="<?=base_url('/lap_bulanan');?>">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Laporan Bulanan</span></a>
      </li>

      <!-- Nav Item - Semester -->
      <li class="nav-item <?=$urlpage=='lap_semester' ? 'active' : '';?>">
        <a class="nav-link" href="<?=base_url('/lap_semester');?>">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Laporan Semester</span></a>
      </li>

      <!-- Nav Item - Tahunan -->
      <li class="nav-item <?=$urlpage=='lap_tahunan' ? 'active' : '';?>">
        <a class="nav-link" href="<?=base_url('/lap_tahunan');?>">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Laporan Tahunan</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Grafik
      </div>

      <!-- Nav Item - Bulanan -->
      <li class="nav-item <?=$urlpage=='grafik' ? 'active' : '';?>">
        <a class="nav-link" href="<?=base_url('/grafik');?>">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Grafik Per Bulan</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-info topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline small"><?=(isset($_SESSION) && isset($_SESSION['auth']) ? $_SESSION['auth']['NAMA_USER'] : ''); ?> | <strong><?=(isset($_SESSION) && isset($_SESSION['auth']) ? $_SESSION['auth']['LEVEL_USER'] : '')?></strong></span>
                <img class="img-profile rounded-circle" src="<?=base_url('/images/user.jpg');?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?=base_url('/profil/index');?>">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid pr-0">