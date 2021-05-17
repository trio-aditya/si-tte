<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  d-flex  align-items-center">
            <a class="navbar-brand" href="#">
                <img src="<?= base_url(); ?>/assets/img/brand/dark.svg" height="40" class="navbar-brand-img" alt="...">
            </a>
            <div class=" ml-auto ">
                <!-- Sidenav toggler -->
                <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <!-- <li class="nav-item">
                            <a class="nav-link active" href="#navbar-dashboards" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-dashboards">
                                <i class="ni ni-shop text-primary"></i>
                                <span class="nav-link-text">Dashboards</span>
                            </a>
                            <div class="collapse show" id="navbar-dashboards">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <span class="sidenav-mini-icon"> D </span>
                                            <span class="sidenav-normal"> Dashboard </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li> -->
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url('/home'); ?>" role="button" aria-expanded="true">
                            <i class="fa fa-home text-primary"></i>
                            <span class="nav-link-text">Beranda</span>
                        </a>
                    </li>

                    <?php if (session()->get('role_id') == 1) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                                <i class="fa fa-database text-orange"></i>
                                <span class="nav-link-text">Data Master</span>
                            </a>
                            <div class="collapse" id="navbar-examples">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="<?= base_url('/role') ?>" class="nav-link">
                                            <span class="sidenav-mini-icon"> R </span>
                                            <span class="sidenav-normal"> Role </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/users'); ?>">
                                <i class="fa fa-users text-info"></i>
                                <span class="nav-link-text">Users</span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if (session()->get('role_id') == 2) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/upload_surat'); ?>">
                                <i class="fa fa-upload text-info"></i>
                                <span class="nav-link-text">Upload Surat</span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if (session()->get('role_id') == 3) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/surat'); ?>">
                                <i class="fa fa-file text-info"></i>
                                <span class="nav-link-text">Surat</span>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</nav>