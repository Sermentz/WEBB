<?php


$conn = mysqli_connect("localhost", "root", "", "jwd");

if (isset($_POST['ajukan'])) {


    // $fname = $_FILES['file']['name'];
    // $dirname = "upload/";

    // if (!move_uploaded_file($_FILES['file']['tmp_name'], $dirname . $fname)) {
    //     return;
    // }

    // $fname = $_FILES['formFile']['name'];
    // $dirname = "uploads/";

    // if (!move_uploaded_file($_FILES['formFile']['tmp_name'], $dirname . $fname)) {
    //     return;
    // }


    // $kueri = "INSERT INTO daftar (nama, email, nohp, semester, ipk, pilihanbeasiswa, file) VALUES ('$_POST[nama]','$_POST[email]','$_POST[nohp]','$_POST[semester]','$_POST[ipk]','$_POST[pilihanbeasiswa]','$fname');";

    // $simpan = mysqli_query($conn, $kueri);

    // //jika simpan sukses
    // if ($simpan) {
    //     echo "<script>
    //             alert('Simpan data sukses');
    //             document.location = 'index.php?page=paket';
    //           </script>";
    // } else {
    //     echo "<script>
    //             alert('Simpan data gagal');
    //             document.location = 'index.php?page=paket';
    //           </script>";
    // }

    // $nama = $_POST['nama'];
    // $email = $_POST['email'];
    // $nohp = $_POST['nohp'];
    // $semester = $_POST['semester'];
    // $ipk = $_POST['ipk'];
    // $pilihanbeasiswa = $_POST['pilihanbeasiswa'];

    // if ($ipk >= 3) {

    //     $addtotable = mysqli_query($conn, "insert into daftar (nama, email, nohp, semester, ipk, pilihanbeasiswa, file) values ('$nama','$email','$nohp','$semester','$ipk','$pilihanbeasiswa','$fname')");
    //     // $addtotable  array($name, $fname);

    //     if ($addtotable) {
    //         echo "<script> 
    //     alert('Berhasil Diajukan');
    //     document.location = 'hasil.php';
    //     </script>";
    //     } else {
    //         echo "<script> 
    //     alert('Pengajuan Gagal');
    //     document.location = 'daftar.php';
    //     </script>";
    //     }
    // } else {
    //     echo "<script> 
    //     alert('Pengajuan Gagal');
    //     document.location = 'daftar.php';
    //     </script>";
    // }


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
