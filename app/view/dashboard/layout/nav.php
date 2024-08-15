<header id="header" class="header">
    <div class="top-left">
        <div class="navbar-header">
            <a class="navbar-brand font-weight-bold" href="?h=Home">Admin Panel</a>
            <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo" /></a>
            <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
        </div>
    </div>
    <div class="top-right">
        <div class="header-menu">
            <div class="header-left">
                <h6 class="mt-3"><?= $dataPengguna['nama_pengguna'] ?></h6>
            </div>

            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle" src="public/assets/img/profile/user.png" alt="User Avatar" />
                </a>
                <div class="user-menu dropdown-menu">
                    <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>
                    <a class="nav-link" href="?d=Logout"><i class="fa fa-power -off"></i>Logout</a>
                </div>
            </div>
        </div>
    </div>
</header>