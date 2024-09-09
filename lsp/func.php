<?php


$conn = mysqli_connect("localhost", "root", "", "jwd");

if (isset($_POST['ajukan'])) {

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nohp = $_POST['nohp'];
    $semester = $_POST['semester'];
    $ipk = $_POST['ipk'];
    $pilihanbeasiswa = $_POST['pilihanbeasiswa'];
    $file = $_POST['file'];


    if ($ipk >= 3) {

        $addtotable = mysqli_query($conn, "insert into daftar (nama, email, nohp, semester, ipk, pilihanbeasiswa, file) values ('$nama','$email','$nohp','$semester','$ipk','$pilihanbeasiswa','$file')");
        // $addtotable  array($name, $fname);

        if ($addtotable) {
            echo "<script> 
        alert('Berhasil Diajukan');
        document.location = 'hasil.php';
        </script>";
        } else {
            echo "<script> 
        alert('Pengajuan Gagal');
        document.location = 'daftar.php';
        </script>";
        }
    } else {
        echo "<script> 
        alert('Pengajuan Gagal');
        document.location = 'daftar.php';
        </script>";
    }
}
