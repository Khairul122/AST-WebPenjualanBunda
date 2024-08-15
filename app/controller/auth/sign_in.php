<?php

if (isset($_POST['sign_in'])) {
    # code...
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $queryPengguna = $crud->read(
        "pengguna",
        "WHERE user = '$username' AND pass = '$password'"
    );

    if (mysqli_num_rows($queryPengguna) > 0) {
        # code...
        $dataPengguna = mysqli_fetch_array($queryPengguna);

        $_SESSION['login_gito'] = true;
        $_SESSION['id_pengguna'] = $dataPengguna['id_pengguna'];

        if ($dataPengguna['level'] == "Admin") {
            # code...
            echo $fungsi->NotifRedirect(
                "Login Berhasil",
                "Selamat Datang " . $dataPengguna['nama_pengguna'],
                "success",
                "?d=Dashboard"
            );
        } else {
            # code...
            echo $fungsi->NotifRedirect(
                "Login Berhasil",
                "Selamat Datang " . $dataPengguna['nama_pengguna'],
                "success",
                "?h=Home"
            );
        }
    } else {
        # code...
        echo $fungsi->NotifRedirect(
            "Gagal Login",
            "Akun anda tidak ditemukan, silahkan mencoba SIgn Up untuk akun baru anda",
            "error",
            "?a=SignIn"
        );
    }
}
