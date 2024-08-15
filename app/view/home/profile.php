<!-- Header -->
<?php include 'app/view/home/layout/header.php' ?>
<!-- \Header -->

<body>

    <!-- Controller -->
    <?php include 'app/controller/home/profile.php' ?>
    <!-- \Controller -->

    <!-- Nav -->
    <?php include 'app/view/home/layout/nav.php' ?>
    <!-- \Nav -->

    <!-- Content -->
    <section class="contact-section padding_top">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Profile Pengguna</h2>
                </div>
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <form method="post">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-check-label">Username</label>
                                        <input type="text" class="form-control" name="user" value="<?= $dataPelanggan['user'] ?>" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-check-label">Password</label>
                                        <input type="password" class="form-control" name="pass" value="<?= $dataPelanggan['pass'] ?>" required>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label class="form-check-label">Nama</label>
                                        <input type="text" class="form-control" name="nama_pengguna" value="<?= $dataPelanggan['nama_pengguna'] ?>" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-check-label">No Handphone</label>
                                        <input type="number" class="form-control" name="nohp" value="<?= $dataPelanggan['nohp'] ?>" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-check-label">Jenis Kelamin</label>
                                        <select class="form-control" name="jk">
                                            <option value="" disabled selected>Pilih</option>
                                            <?php if ($dataPelanggan['jk'] == "Laki-laki") : ?>
                                                <option value="Laki-laki" selected>Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            <?php else : ?>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan" selected>Perempuan</option>
                                            <?php endif ?>
                                        </select>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <label class="form-check-label">Alamat</label>
                                        <textarea class="form-control" name="alamat" required><?= $dataPelanggan['alamat'] ?></textarea>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <button type="submit" name="edit_profile" class="btn_3">Edit Profile</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- \Content -->

    <!-- Footer -->
    <?php include 'app/view/home/layout/footer.php' ?>
    <!-- \Footer -->

    <!-- Script -->
    <?php include 'app/view/home/layout/script.php' ?>
    <!-- \Script -->
</body>

</html>