<?php

if ($_GET['a'] == "SignIn") {
    # code...
    include 'app/view/home/sign_in.php';
} elseif ($_GET['a'] == "SignUp") {
    # code...
    include 'app/view/home/sign_up.php';
} else {
    # code...
    echo $fungsi->Redirect("?a=SignIn");
}
