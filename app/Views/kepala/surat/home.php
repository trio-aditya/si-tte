<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>

<body>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Header -->
        <div class="header bg-primary pb-6">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                    <li class="breadcrumb-item"><a href="<?= base_url('/home'); ?>"><i class="fas fa-home"></i></a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Surat</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--6">
            <div class="row">
                <!-- Light table -->
                <div class="col">
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header border-0">
                            <h3 class="mb-0">Surat</h3>
                            <br>
                            <?php if (session()->getFlashdata('pesan')) : ?>
                                <div class="alert alert-success alert-dismissible alert-sm fade show" role="alert">
                                    <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                                    <span class="alert-text"><?= session()->getFlashdata('pesan'); ?></span>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php endif; ?>
                        </div>
                        <!-- Light table -->
                        <div class="table-responsive">
                            <table id="table_id" class="table align-items-center table-flush">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Surat</th>
                                        <th>Waktu Upload</th>
                                        <th>Download</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($surat as $value) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $value['surat']; ?></td>
                                            <td><?= $value['waktu_upload']; ?></td>
                                            <td>
                                                <a class="btn btn-primary btn-sm" href="<?= base_url('/surat/download/' . $value['id_surat']); ?>" role="button"><i class="fa fa-download" aria-hidden="true"></i></a>
                                            </td>

                                            <?php if ($value['status'] == 1) : ?>
                                                <td>
                                                    <a class="btn btn-primary btn-sm" href="<?= base_url('/surat/tanda_tangan/' . $value['id_surat']); ?>" role="button"><i class="fa fa-check-circle" aria-hidden="true"></i> Tanda Tangan</a>
                                                </td>
                                            <?php endif; ?>
                                            <?php if ($value['status'] != 1) : ?>
                                                <td><span class="badge badge-pill badge-success badge-lg">Selesai</span></td>
                                            <?php endif; ?>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Surat</th>
                                        <th>Waktu Upload</th>
                                        <th>Download</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection(); ?>