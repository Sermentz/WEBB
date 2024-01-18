<?php

require 'func.php';

if (isset($_SESSION['log'], $_SESSION['role'])) {
    header('location:./' . strtolower($_SESSION['role']) . '/index.php');
}


if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $cekuser = mysqli_query($conn, "SELECT * FROM user where email='$email' and password ='$pass'");
    $hitung = mysqli_num_rows($cekuser);



    //     if ($hitung > 0) {
    //         $_SESSION['log'] = 'True';
    //         header('location:index.php');
    //     } else {
    //         echo '<script>alert("Email atau Password salah")</script>';
    //     }
    // }
    // if (!isset($_SESSION['log'])) {
    // } else {
    //     header('location:index.php');
    // }

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $cekuser = mysqli_query($conn, "SELECT * FROM user where email='$email' and password ='$pass'");
        $hitung = mysqli_num_rows($cekuser);

        // if ($hitung > 0) {

        //     $ambilrole = mysqli_fetch_array($cekuser);
        //     $role = $ambilrole['role'];
        //     var_dump($role);

        //     if ($role == 'Admin') {
        //         $_SESSION['log'] = 'True';
        //         $_SESSION['role'] = 'Admin';

        //         header('location:admin/index.php');
        //     } elseif ($role == 'Pegawai') {
        //         $_SESSION['log'] = 'True';
        //         $_SESSION['role'] = 'Pegawai';

        //         header('location:pegawai/index.php');
        //     } elseif ($role == 'Pemasok') {
        //         $_SESSION['log'] = 'True';
        //         $_SESSION['role'] = 'Pemasok';

        //         header('location:pemasok/index.php');
        //     } else {
        //         echo '<script>alert("Email atau Password salah")</script>';
        //     }
        // }
        if ($hitung > 0) {

            $ambilrole = mysqli_fetch_array($cekuser);
            $role = $ambilrole['role'];
            var_dump($role);

            if ($role == 'Admin') {
                $_SESSION['log'] = 'True';
                $_SESSION['role'] = 'Admin';

                header('location:admin/index.php');
            } else if ($role == 'Pegawai') {
                $_SESSION['log'] = 'True';
                $_SESSION['role'] = 'Pegawai';

                header('location:Pegawai/index.php');
            } else {
                $_SESSION['log'] = 'True';
                $_SESSION['role'] = 'Pemasok';

                header('location:Pemasok/index.php');
            }
        }

        if (isset($_SESSION["role"])) {

            $role = $_SESSION["role"];

            if ($role == "Admin") {
                header("location:admin/index.php");
            } else if ($role == "Pegawai") {
                header("location:pegawai/index.php");
            } else {
                header("location:pemasok/index.php");
            }
        } else {
            echo '<script>alert("Email atau Password salah")</script>';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="">
    <div class="w-full min-h-screen bg-gray-50 flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-50 w-auto" src="robots.jpg">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your account</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" method="POST">
                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                    <div class="mt-2">
                        <input id="inputemail" name="email" type="email" autocomplete="email" required class="p-1 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                    </div>
                    <div class="mt-2">
                        <input id="inputpassword" name="password" type="password" autocomplete="current-password" required class="p-1 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <button name="login" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
                </div>



            </form>
        </div>
    </div>
</body>

</html>