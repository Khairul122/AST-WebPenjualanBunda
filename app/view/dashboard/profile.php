<!-- Header -->
<?php include 'app/view/dashboard/layout/header.php' ?>
<!-- \Header -->

<body>

    <!-- Controller -->
    <?php include 'app/controller/dashboard/profile.php' ?>
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
                                <h5>Profile Admin</h5>
                            </div>
                            <div class="card-body">
                                <form method="post" class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-check-label">Username</label>
                                        <input type="text" class="form-control" name="user" value="<?= $dataPengguna['user'] ?>" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-check-label">Password</label>
                                        <input type="text" class="form-control" name="pass" value="<?= $dataPengguna['pass'] ?>" required>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label class="form-check-label">Nama Pengguna</label>
                                        <input type="text" class="form-control" name="nama_pengguna" value="<?= $dataPengguna['nama_pengguna'] ?>" required>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label class="form-check-label">Jenis Kelamin</label>
                                        <select class="form-control" name="jk">
                                            <option value="" disabled selected>Pilih</option>
                                            <?php if ($dataPengguna['jk'] == "Laki-laki") : ?>
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
                                        <input type="text" class="form-control" name="nohp" value="<?= $dataPengguna['nohp'] ?>" required>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <label class="form-check-label">Alamat</label>
                                        <textarea class="form-control" name="alamat" required><?= $dataPengguna['alamat'] ?></textarea>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <button type="submit" class="btn btn-success" name="edit_profile">Submit</button>
                                    </div>
                                </form>
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