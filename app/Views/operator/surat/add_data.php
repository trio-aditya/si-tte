<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>

<body>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <div class="header bg-primary pb-6">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <!-- <h6 class="h2 text-white d-inline-block mb-0">Default</h6> -->
                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                    <li class="breadcrumb-item"><a href="<?= base_url('/home'); ?>"><i class="fas fa-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="<?= base_url('/upload_surat'); ?>">Upload Surat</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
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
                <div class="col-xl-12 order-xl-1">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">Form Upload Dokumen</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="<?= base_url('/upload_surat'); ?>" class="btn btn-sm btn-primary"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Kembali</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('/upload_surat/proses_tambah_data') ?>" method="post" enctype="multipart/form-data">
                                <!-- Untuk menjaga agar form diakses hanya di form ini
                        Untuk keamanan form -->
                                <?= csrf_field() ?>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Judul Dokumen</label>
                                                <input type="text" class="form-control" id="judul_dokumen" name="judul_dokumen" placeholder="Masukkan Judul Dokumen" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Tanggal Dokumen</label>
                                                <input type="date" class="form-control" name="tanggal_dokumen" placeholder="Masukkan Tanggal Dokumen" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Nomor Dokumen</label>
                                                <input type="text" class="form-control" name="nomor_dokumen" placeholder="Masukkan Nomor Dokumen" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Posisi TTE</label>
                                                <select class="form-control" name="posisi_tte">
                                                    <option value="1">Atas</option>
                                                    <option value="2">Bawah</option>
                                                    <option value="3">Tengah</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Input Posisi X dan Y</label>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="nilai_x" placeholder="Masukkan Nilai X" required>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="nilai_y" placeholder="Masukkan Nilai Y" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Upload Dokumen</label>
                                                <div class="custom-file">
                                                    <input type="file" id="surat" class="custom-file-input <?= ($validation->hasError('surat')) ? 'is-invalid' : ''; ?>" name="surat" lang="en">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('surat'); ?>
                                                    </div>
                                                    <label class="custom-file-label">Pilih Dokumen</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input type="radio" id="customRadio1" name="tampil" value="1" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio1">Tampil Publik</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1">
                                                    <label class="form-control-label">/</label>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio2" name="tampil" value="0" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio2">Jangan Publik</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="text-right">
                                                    <button type="submit" class="btn btn-primary mt-4">Upload Dokumen</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?= $this->endSection(); ?>