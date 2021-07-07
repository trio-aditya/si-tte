<!-- Topnav -->
<nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar links -->
            <ul class="navbar-nav align-items-center  ml-md-auto ">
                <li class="nav-item d-sm-none">
                    <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                        <i class="ni ni-zoom-split-in"></i>
                    </a>
                </li>
                <?php if (session()->get('role_id') != 3) : ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ni ni-bell-55"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                            <!-- Dropdown header -->
                            <div class="px-3 py-3">
                                <h6 class="text-sm text-muted m-0">Anda memiliki <strong class="text-primary">1</strong> notifikasi.</h6>
                            </div>
                            <!-- List group -->
                            <div class="list-group list-group-flush">
                                <a href="#!" class="list-group-item list-group-item-action">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <img alt="Image placeholder" src="<?= base_url(); ?>/assets/img/theme/team-1.jpg" class="avatar rounded-circle">
                                        </div>
                                        <div class="col ml--2">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h4 class="mb-0 text-sm">John Snow</h4>
                                                </div>
                                                <div class="text-right text-muted">
                                                    <small>2 hrs ago</small>
                                                </div>
                                            </div>
                                            <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- View all -->
                            <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if (session()->get('role_id') == 3) : ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ni ni-bell-55">
                                <span class="badge badge-warning text-wrap" id="tot-dok"><?= $count_surat_belum_ttd; ?></span>
                            </i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                            <!-- Dropdown header -->
                            <div class="px-3 py-3">
                                <h6 class="text-sm text-muted m-0">Anda memiliki <strong class="text-primary"><?= $count_surat_belum_ttd; ?></strong> notifikasi.</h6>
                            </div>
                            <!-- List group -->
                            <div class="list-group list-group-flush">
                                <!-- <a href="#" class="list-group-item list-group-item-action"> -->
                                <div class="row align-items-center">
                                    <!-- <div class="col-auto">
                                            <img alt="Image placeholder" src="<?= base_url(); ?>/assets/img/theme/team-1.jpg" class="avatar rounded-circle">
                                        </div> -->
                                    <div class="col ml--2">
                                        <?php foreach ($surat as $value) : ?>
                                            <a href="<?= base_url('/surat/download/' . $value['id_surat']); ?>" class="list-group-item">
                                                <?php
                                                $awal = date_create($value['tanggal_dokumen']);
                                                $akhir = date_create(); // waktu sekarang
                                                $diff = date_diff($awal, $akhir);

                                                // echo 'Selisih waktu: ';
                                                // echo $diff->y . ' tahun, ';
                                                // echo $diff->m . ' bulan, ';
                                                // echo $diff->d . ' hari, ';
                                                // echo $diff->h . ' jam, ';
                                                // echo $diff->i . ' menit, ';
                                                // echo $diff->s . ' detik, ';
                                                // Output: Selisih waktu: 28 tahun, 5 bulan, 9 hari, 13 jam, 7 menit, 7 detik

                                                //echo 'Total selisih hari : ' . $diff->days;
                                                ?>
                                                <?php if ($value['status'] == 1) : ?>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <h4 class="mb-0 text-sm"><?= $value['judul_dokumen']; ?></h4>
                                                        </div>
                                                        <div class="text-right text-muted">
                                                            <small><?= $diff->days ?> hari lalu</small>
                                                        </div>
                                                    </div>
                                                    <p class="text-sm mb-0"><?= $value['nomor_dokumen']; ?></p>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                            </a>
                                    </div>
                                </div>
                                <!-- </a> -->
                            </div>
                            <!-- View all -->
                            <!-- <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a> -->
                        </div>
                    </li>
                <?php endif; ?>
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="ni ni-ungroup"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
                        <div class="row shortcuts px-4">
                            <a href="#!" class="col-4 shortcut-item">
                                <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                                    <i class="ni ni-calendar-grid-58"></i>
                                </span>
                                <small>Calendar</small>
                            </a>
                        </div>
                    </div>
                </li> -->
            </ul>
            <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                <li class="nav-item dropdown">
                    <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media align-items-center">
                            <span class="avatar avatar-sm rounded-circle">
                                <img alt="Image placeholder" src="<?= base_url(); ?>/assets/img/user.svg">
                            </span>
                            <div class="media-body  ml-2  d-none d-lg-block">
                                <span class="mb-0 text-sm  font-weight-bold"><?= session()->get('username'); ?></span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu  dropdown-menu-right ">
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Selamat Datang!</h6>
                        </div>
                        <a href="#!" class="dropdown-item">
                            <i class="ni ni-single-02"></i>
                            <span>Profil Saya</span>
                        </a>
                        <!-- <a href="#!" class="dropdown-item">
                                    <i class="ni ni-settings-gear-65"></i>
                                    <span>Settings</span>
                                </a>
                                <a href="#!" class="dropdown-item">
                                    <i class="ni ni-calendar-grid-58"></i>
                                    <span>Activity</span>
                                </a>
                                <a href="#!" class="dropdown-item">
                                    <i class="ni ni-support-16"></i>
                                    <span>Support</span>
                                </a> -->
                        <div class="dropdown-divider"></div>
                        <a href="<?= base_url('auth/logout'); ?>" class="dropdown-item">
                            <i class="ni ni-user-run"></i>
                            <span>Logout</span>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>