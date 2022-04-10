<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" src="<?= base_url('assets/img/logo-rs.jpeg') ?>" style="width: 15%; height:50%" class="rounded-circle" /><span class="logo-name ml-2 " style="font-size: medium;">Griya Husada</span> </a>

        </div>
        <ul class="sidebar-menu">
            <li class="dropdown ">
                <a href="<?= base_url('Home') ?>" class="nav-link "><i data-feather="home"></i><span>Home</span></a>


            </li>
            <li class="dropdown ">
                <a href="<?= base_url('DataPasien') ?>" class="nav-link "><i data-feather="user"></i><span>Data Pasien</span></a>

            </li>
            <li class="dropdown ">
                <a href="<?= base_url('DataKunjungan') ?>" class="nav-link "><i data-feather="calendar"></i><span>Data Kunjungan</span></a>
                <!-- <a href="<?= base_url('Admin/Registrasi') ?>" class="nav-link "><i data-feather="monitor"></i><span>Registrasi Siswa</span></a> -->
            </li>
            <?php if ($this->session->userdata('level') == 2) { ?>
                <li class="dropdown ">
                    <a href="<?= base_url('DataPegawai') ?>" class="nav-link "><i data-feather="users"></i><span>Data pegawai</span></a>
                    <!-- <a href="<?= base_url('Admin/Registrasi') ?>" class="nav-link "><i data-feather="monitor"></i><span>Registrasi Siswa</span></a> -->
                </li>
            <?php } ?>

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="file"></i><span>Laporan Retensi</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?= base_url('LaporanRetensi') ?>">Aktif</a></li>
                    <li><a class="nav-link" href="<?= base_url('LaporanRetensi/TidakAktif') ?>">Non-Aktif</a></li>
                </ul>
            </li>


            <li class="dropdown ">
                <a href="<?= base_url('Home/Keluar') ?>" class="nav-link "><i data-feather="log-out" style="color: red;"></i><span style="color: red;">Keluar</span></a>
                <!-- <a href="<?= base_url('Admin/Registrasi') ?>" class="nav-link "><i data-feather="monitor"></i><span>Registrasi Siswa</span></a> -->
            </li>



        </ul>
    </aside>
</div>