<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <?php if ($this->session->userdata('level') != 'Karyawan') { ?>
            <li class="nav-item">
                <a href="<?= base_url('Dashboard'); ?>" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-database"></i>
                    <p>
                        Master
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?= base_url('C_Master'); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Departement</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('C_Master/jabatan'); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Jabatan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('C_Master/company'); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Company</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('C_Master/karyawan'); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Karyawan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('C_Master/jenis_cuti'); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Variable Cuti</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="<?= base_url('C_Master/cuti'); ?>" class="nav-link">
                    <i class="nav-icon fas fa-envelope-open-text"></i>
                    <p>
                        Cuti
                    </p>
                </a>
            </li>
        <?php } ?>
        <li class="nav-item">
            <a href="<?= base_url('C_Master/profile'); ?>" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Profile
                </p>
            </a>
        </li>
        <?php if ($this->session->userdata('level') == 'SuperAdmin' || $this->session->userdata('level') == 'HRD') { ?>
            <li class="nav-item">
                <a href="<?= base_url('C_Master/laporan_cuti') ?>" class="nav-link">
                    <i class="nav-icon fas fa-file"></i>
                    <p>
                        Laporan
                    </p>
                </a>
            </li>
        <?php } ?>

        <li class="nav-item">
            <a href="<?= base_url('C_Auth/logout') ?>" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                    logout
                </p>
            </a>
        </li>
    </ul>
</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <!-- <h1><?= $title ?></h1> -->
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><?= $title ?></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->