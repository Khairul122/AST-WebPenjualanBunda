<!-- Header -->
<?php include 'app/view/dashboard/layout/header.php' ?>
<!-- \Header -->

<body>

    <!-- Controller -->
    <?php include 'app/controller/dashboard/pelanggan.php' ?>
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

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover text-center">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Jenis Kelamin</th>
                                                <th>No HP</th>
                                                <th>Alamat</th>
                                                <th>Tipe Akun</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($viewData as $row) : $no++ ?>
                                                <tr>
                                                    <td><?= $no ?></td>
                                                    <td><?= $row['nama_pengguna'] ?></td>
                                                    <td><?= $row['user'] ?></td>
                                                    <td><?= $row['pass'] ?></td>
                                                    <td><?= $row['jk'] ?></td>
                                                    <td><?= $row['nohp'] ?></td>
                                                    <td><?= $row['alamat'] ?></td>
                                                    <td><?= $row['level'] ?></td>
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
                                                                    <input type="hidden" name="id_pengguna" value="<?= $row['id_pengguna'] ?>">
                                                                    <div class="col-md-6 mb-3">
                                                                        <label class="form-check-label">Username</label>
                                                                        <input type="text" class="form-control" name="user" value="<?= $row['user'] ?>" required>
                                                                    </div>
                                                                    <div class="col-md-6 mb-3">
                                                                        <label class="form-check-label">Password</label>
                                                                        <input type="text" class="form-control" name="pass" value="<?= $row['pass'] ?>" required>
                                                                    </div>
                                                                    <div class="col-md-12 mb-3">
                                                                        <label class="form-check-label">Nama Pengguna</label>
                                                                        <input type="text" class="form-control" name="nama_pengguna" value="<?= $row['nama_pengguna'] ?>" required>
                                                                    </div>
                                                                    <div class="col-md-12 mb-3">
                                                                        <label class="form-check-label">Jenis Kelamin</label>
                                                                        <select class="form-control" name="jk">
                                                                            <option value="" disabled selected>Pilih</option>
                                                                            <?php if ($row['jk'] == "Laki-laki") : ?>
                                                                                <option value="Laki-laki" selected>Laki-laki</option>
                                                                                <option value="Perempuan">Perempuan</option>
                                                                            <?php else : ?>
                                                                                <option value="Laki-laki">Laki-laki</option>
                                                                                <option value="Perempuan" selected>Perempuan</option>
                                                                            <?php endif ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-12 mb-3">
                                                                        <label class="form-check-label">No Handphone</label>
                                                                        <input type="text" class="form-control" name="nohp" value="<?= $row['nohp'] ?>" required>
                                                                    </div>
                                                                    <div class="col-md-12 mb-4">
                                                                        <label class="form-check-label">Alamat</label>
                                                                        <textarea class="form-control" name="alamat" required><?= $row['alamat'] ?></textarea>
                                                                    </div>
                                                                    <div class="col-md-12 mb-3">
                                                                        <label class="form-check-label">Tipe Akun</label>
                                                                        <select class="form-control" name="level">
                                                                            <option value="" disabled selected>Pilih</option>
                                                                            <?php if ($row['level'] == "Personal") : ?>
                                                                                <option value="Personal" selected>Personal</option>
                                                                                <option value="Perusahaan">Perusahaan</option>
                                                                            <?php else : ?>
                                                                                <option value="Personal">Personal</option>
                                                                                <option value="Perusahaan" selected>Perusahaan</option>
                                                                            <?php endif ?>
                                                                        </select>
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
                                                                    <p>Yakin ingin hapus data dengan nama <b><?= $row['nama_pengguna'] ?></b> ?</p>
                                                                    <input type="hidden" name="id_pengguna" value="<?= $row['id_pengguna'] ?>">
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