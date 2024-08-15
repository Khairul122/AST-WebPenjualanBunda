<!-- Header -->
<?php include 'app/view/dashboard/layout/header.php' ?>
<!-- \Header -->

<body>

    <!-- Controller -->
    <?php include 'app/controller/dashboard/kategori.php' ?>
    <!-- \Controller -->

    <!-- Sidebar -->
    <?php include 'app/view/dashboard/layout/sidebar.php' ?>
    <!-- \Sidebar -->

    <div id="right-panel" class="right-panel">
        <!-- Nav -->
        <?php include 'app/view/dashboard/layout/nav.php' ?>
        <!-- \Nav -->

        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="font-weight-bold"><?= $page ?></h4>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambahModal">
                                    Tambah Data
                                </button>

                                <!-- Form Tambah Data -->
                                <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <form method="post">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body row">
                                                    <div class="col-md-12 mb-3">
                                                        <label class="form-check-label">Nama Kategori</label>
                                                        <input type="text" class="form-control" name="nama_kategori" required>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" name="tambah" class="btn btn-success">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover text-center">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Kategori</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($viewData as $row) : $no++ ?>
                                                <tr>
                                                    <td><?= $no ?></td>
                                                    <td><?= $row['nama_kategori'] ?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal<?= $no ?>">
                                                            Edit
                                                        </button>
                                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusModal<?= $no ?>">
                                                            Hapus
                                                        </button>
                                                    </td>
                                                </tr>

                                                <!-- Form Edit Data -->
                                                <div class="modal fade" id="editModal<?= $no ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <form method="post">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body row">
                                                                    <input type="hidden" name="id_kategori" value="<?= $row['id_kategori'] ?>">
                                                                    <div class="col-md-12 mb-3">
                                                                        <label class="form-check-label">Nama Kategori</label>
                                                                        <input type="text" class="form-control" name="nama_kategori" value="<?= $row['nama_kategori'] ?>" required>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="submit" name="edit" class="btn btn-success">Submit</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Form Hapus Data -->
                                                <div class="modal fade" id="hapusModal<?= $no ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <form method="post">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Yakin ingin hapus data dengan nama <b><?= $row['nama_kategori'] ?></b> ?</p>
                                                                    <input type="hidden" name="id_kategori" value="<?= $row['id_kategori'] ?>">
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                                                    <button type="submit" name="hapus" class="btn btn-danger">Yakin</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>

        <!-- Footer -->
        <?php include 'app/view/dashboard/layout/footer.php' ?>
        <!-- \Footer -->
    </div>

    <!-- Script -->
    <?php include 'app/view/dashboard/layout/script.php' ?>
    <!-- \Script -->

</body>

</html>