<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
            <a href="<?= base_url('home') ?>" class="nav-link <?= $menu == 'dashboard' ? 'active' : '' ?>">
                <i class="nav-icon fas fa-home"></i>
                <p>
                    Dashboard
                </p>
            </a>
        </li>
        <li class="nav-item menu-open">
            <a href="" class="nav-link <?= $menu == 'masterdata' ? 'active' : '' ?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Master Data
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="<?= base_url('Universitas/mahasiswa') ?>" class="nav-link <?= $submenu == 'mahasiswa' ? 'active' : '' ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Mahasiswa</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('Universitas/dosen') ?>" class="nav-link <?= $submenu == 'dosen' ? 'active' : '' ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Dosen</p>
                    </a>
                </li>

            </ul>
        </li>
        <li class="nav-item menu-open">
            <a href="" class="nav-link <?= $menu == 'prodi' ? 'active' : '' ?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Program Studi
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="<?= base_url('/Prodi/informasi') ?>" class="nav-link <?= $submenu == 'informasi' ? 'active' : '' ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Sistem Infomasi</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('Prodi/informatika') ?>" class="nav-link <?= $submenu == 'informatika' ? 'active' : '' ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Teknik Informatika</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('Prodi/komputer') ?>" class="nav-link <?= $submenu == 'komputer' ? 'active' : '' ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Ilmu Komputer</p>
                    </a>
                </li>
            </ul>
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
    <div class="content-header">
        <div class="container-fluid">

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->