<?php
// if (isset($_SESSION['log'])) {
// } else {
//     header('location:../login.php');
// }

if (isset($_SESSION["role"])) {

    $role = $_SESSION["role"];

    if ($role == "Admin") {
        header("location:admin");
    } else if ($role == "Pegawai") {
        header("location:pegawai");
    } else {
        header("location:pemasok");
    }
} else {
    header('location:../login.php');
}
