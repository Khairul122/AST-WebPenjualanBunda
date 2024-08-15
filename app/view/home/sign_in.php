<!-- Header -->
<?php include 'app/view/home/layout/header.php' ?>
<!-- \Header -->

<body>

    <!-- Controller -->
    <?php include 'app/controller/auth/sign_in.php' ?>
    <!-- \Controller -->

    <!-- Content -->
    <section class="login_part mt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                            <h2>Baru di Toko kami ?</h2>
                            <p>
                                Mari berlangganan dan daftarkan akun anda untuk mendapatkan
                                produk menarik lainnya
                            </p>
                            <a href="?a=SignUp" class="btn_3">Sign Up</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h2>Selamat Datang Kembali !</h2>
                            <h4>Masukan Username dan Password anda</h4>
                            <br />
                            <br />
                            <form class="row contact_form" method="post" novalidate="novalidate">
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="user" name="user" placeholder="Username" />
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="pass" name="pass" placeholder="Password" />
                                </div>
                                <div class="col-md-12 form-group">
                                    <button type="submit" name="sign_in" class="btn_3">
                                        Sign In
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