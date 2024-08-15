<?php

if (isset($_SESSION['login_gito']) == true) {
    # code...
    $id_pengguna = $_SESSION['id_pengguna'];
    $dataPengguna = mysqli_fetch_array(
        $crud->read(
            "pengguna",
            "WHERE id_pengguna = '$id_pengguna'"
        )
    );

    if (isset($_GET['h'])) {
        # code...
        include_once 'app/routes/home.php';
    } elseif (isset($_GET['d'])) {
        # code...
        if ($dataPengguna['level'] != "Admin") {
            # code...
            echo $fungsi->NotifRedirect(
                "404 Not Found",
                "Maaf yang anda kunjungi tidak ditemukan",
                "warning",
                "?h=Home"
            );
        } else {
            # code...
            include_once 'app/routes/dashboard.php';
        }
    } else {
        # code...
        echo $fungsi->Redirect("?h=Home");
    }
} else {
    # code...
    if (isset($_GET['h'])) {
        # code...
        include_once 'app/routes/home.php';
    } elseif (isset($_GET['a'])) {
        # code...
        include_once 'app/routes/auth.php';
    } else {
        # code...
        echo $fungsi->Redirect("?h=Home");
    }
}
