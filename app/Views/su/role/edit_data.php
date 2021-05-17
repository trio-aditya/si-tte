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
                                    <li class="breadcrumb-item"><a href="#">Data Master</a></li>
                                    <li class="breadcrumb-item"><a href="<?= base_url('/role'); ?>">Role</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
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
                                    <h3 class="mb-0">Form Edit Data Role</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="<?= base_url('/role'); ?>" class="btn btn-sm btn-primary"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Kembali</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('/role/proses_edit_data/' . $role['id_role']) ?>" method="post">
                                <!-- Untuk menjaga agar form diakses hanya di form ini
                        Untuk keamanan form -->
                                <?= csrf_field() ?>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <input type="hidden" class="form-control" name="id_role" placeholder="Masukkan Role" value="<?= $role['id_role']; ?>">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label">Role</label>
                                                <input type="text" class="form-control" name="role" placeholder="Masukkan Role" value="<?= $role['role']; ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <div class="text-right">
                                                    <button type="submit" class="btn btn-primary mt-4">Edit Data</button>
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