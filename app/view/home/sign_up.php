<!-- Header -->
<?php include 'app/view/home/layout/header.php' ?>
<!-- \Header -->

<body>

    <!-- Controller -->
    <?php include 'app/controller/auth/sign_up.php' ?>
    <!-- \Controller -->

    <!-- Content -->
    <section class="login_part mt-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                            <h2>Anda sudah memiliki akun ?</h2>
                            <p>
                                Sign In akun anda dan kembali memulai menjelajahi produk
                                menarik lainnya
                            </p>
                            <a href="?a=SignIn" class="btn_3">Sign In</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h2>Selamat Datang !</h2>
                            <h5>Masukan Data Anda Pada Formulir Dibawah Ini</h5>
                            <br />
                            <br />
                            <form class="row contact_form" method="post">
                                <div class="col-md-6 form-group p_star mb-4">
                                    <input type="text" class="form-control" id="user" name="user" placeholder="Username" required />
                                </div>
                                <div class="col-md-6 form-group p_star mb-4">
                                    <input type="password" class="form-control" id="pass" name="pass" placeholder="Password" required />
                                </div>
                                <div class="col-md-12 form-group p_star mb-4">
                                    <input type="text" class="form-control" id="nama_pengguna" name="nama_pengguna" placeholder="Nama Anda" required />
                                </div>
                                <div class="col-md-12 form-group p_star mb-4">
                                    <select name="jk" class="form-control" id="jk">
                                        <option value="" selected disabled>Pilih Gender</option>
                                        <option value="Laki-laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="col-md-12 form-group p_star mb-4">
                                    <input type="number" class="form-control" id="nohp" name="nohp" placeholder="Nomor Handphone" required />
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <textarea class="form-control" name="alamat" placeholder="Alamat"></textarea>
                                </div>
                                <div class="col-md-12 form-group p_star mb-4">
                                    <select name="level" class="form-control" id="jk">
                                        <option value="" selected disabled>Tipe Akun</option>
                                        <option value="Personal">Personal</option>
                                        <option value="Perusahaan">Perusahaan</option>
                                    </select>
                                </div>
                                <div class="col-md-12 form-group">
                                    <button type="submit" name="sign_up" class="btn_3">
                                        Sign Up
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- \Content -->

    <!-- Script -->
    <?php include 'app/view/home/layout/script.php' ?>
    <!-- \Script -->
</body>

</html>