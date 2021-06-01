<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
  <div class="navbar-header">
    <ul class="nav navbar-nav flex-row">
      <li class="nav-item mr-auto"><a class="navbar-brand" href="index.php">
          <div class="brand-logo"></div>
          <h2 class="brand-text mb-0">E-Clinic</h2>
        </a></li>
      <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
    </ul>
  </div>
  <div class="shadow-bottom"></div>
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

      <li class="<?php echo is_active('wilayah'); ?> nav-item"><a href="?page=wilayah"><i class="feather icon-map-pin"></i><span class="menu-title" data-i18n="Wilayah">Wilayah</span></a>
      </li>

      <li class="<?php echo is_active('user'); ?> nav-item"><a href="?page=user"><i class="feather icon-user"></i><span class="menu-title" data-i18n="User">User</span></a>
      </li>

      <li class="<?php echo is_active('pegawai'); ?> nav-item"><a href="?page=pegawai"><i class="feather icon-user"></i><span class="menu-title" data-i18n="Pegawai">Pegawai</span></a>
      </li>

      <li class="<?php echo is_active('pasien'); ?> nav-item"><a href="?page=pasien"><i class="feather icon-user"></i><span class="menu-title" data-i18n="Pasien">Pasien</span></a>
      </li>

      <li class="<?php echo is_active('obat'); ?> nav-item"><a href="?page=obat"><i class="feather icon-stop-circle"></i><span class="menu-title" data-i18n="Obat">Obat</span></a>
      </li>

      <li class="<?php echo is_active('tindakan'); ?> nav-item"><a href="?page=tindakan"><i class="feather icon-activity"></i><span class="menu-title" data-i18n="Tindakan">Tindakan</span></a>

      <li class="<?php echo is_active('tagihan'); ?> nav-item"><a href="?page=tagihan"><i class="feather icon-dollar-sign"></i><span class="menu-title" data-i18n="Tagihan">Tagihan</span></a>

      <li class="nav-item"><a href="javascript:;"><i class="feather icon-pie-chart"></i><span class="menu-title" data-i18n="Laporan">Laporan</span></a>
        <ul class="menu-content">
          <li class="<?php echo is_active('lap-tindakan'); ?>"><a href="?page=lap-tindakan"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Rekam Medis">Tindakan</span></a>
          </li>
        </ul>
      </li>

    </ul>
  </div>
</div>
<!-- END: Main Menu-->