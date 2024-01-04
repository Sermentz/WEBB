<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "dbaka");


//tambah barang
if (isset($_POST['tambahproduk'])) {
    $barcode = $_POST['barcode'];
    $namaproduk = $_POST['namaproduk'];
    $jenis = $_POST['jenisproduk'];
    $letak = $_POST['lokasiproduk'];
    $stok = $_POST['stok'];

    $addtotable = mysqli_query($conn, "insert into stok (barcode, nbarang, jenis, letak, stok) values ('$barcode','$namaproduk','$jenis','$letak','$stok')");
    if ($addtotable) {
        header('location:index.php');
    } else {
        echo 'Gagal';
        header('location:index.php');
    }
};


//tambah barang masuk
if (isset($_POST['barangmasuk'])) {
    $barangnya = $_POST['barangnya'];
    $tambahstok = $_POST['tambahstok'];

    $cekstoksekarang = mysqli_query($conn, "select * from stok where idbarang='$barangnya'");
    $ambildatanya = mysqli_fetch_array($cekstoksekarang);

    $stoksekarang = $ambildatanya['stok'];
    $tambahkanstok = $stoksekarang + $tambahstok;

    $addtomasuk = mysqli_query($conn, "insert into tmasuk (idbarang, mjumlah) values('$barangnya','$tambahstok')");
    $updatestokmasuk = mysqli_query($conn, "update stok set stok='$tambahkanstok' where idbarang='$barangnya' ");
    if ($addtomasuk && $updatestokmasuk) {
        header('location:bmasuk.php');
    } else {
        echo 'Gagal';
        header('location:bmasuk.php');
    }
}

//tambah barang keluar
if (isset($_POST['produkkeluar'])) {
    $barangnya = $_POST['barangnya'];
    $keluarstok = $_POST['keluarstok'];

    $cekstoksekarang = mysqli_query($conn, "select * from stok where idbarang='$barangnya'");
    $ambildatanya = mysqli_fetch_array($cekstoksekarang);

    $stoksekarang = $ambildatanya['stok'];
    $keluarkanstok = $stoksekarang - $keluarstok;

    $addtokeluar = mysqli_query($conn, "insert into tkeluar (idbarang, kjumlah) values('$barangnya','$keluarstok')");
    $updatestokkeluar = mysqli_query($conn, "update stok set stok='$keluarkanstok' where idbarang='$barangnya' ");
    if ($addtokeluar && $updatestokkeluar) {
        header('location:bkeluar.php');
    } else {
        echo 'Gagal';
        header('location:bkeluar.php');
    }
}

//tambah pengguna
if (isset($_POST['tambahpengguna'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $addtouser = mysqli_query($conn, "insert into user (email, password, role) values ('$email','$password','$role')");
    if ($addtouser) {
        header('location:datapengguna.php');
    } else {
        echo 'Gagal';
        header('location:datapengguna.php');
    }
};

//update info barang index

if (isset($_POST['updatebarang'])) {
    $idbarangupdateindex = $_POST['idbarangedit'];
    $barcodeedit = $_POST['barcodeedit'];
    $namaprodukedit = $_POST['namaprodukedit'];
    $jenisedit = $_POST['jenisprodukedit'];
    $letakedit = $_POST['lokasiprodukedit'];
    $stokedit = $_POST['stokedit'];

    $updateindex = mysqli_query($conn, "update stok set nbarang='$namaprodukedit', jenis='$jenisedit', letak='$letakedit', barcode='$barcodeedit', stok='$stokedit' where idbarang='$idbarangupdateindex'");
    if ($updateindex) {
        header('location:index.php');
    } else {
        echo 'Gagal';
        header('location:index.php');
    }
}


//hapus barang index
if (isset($_POST['hapusbarang'])) {
    $idbaranghapusindex = $_POST['idbaranghapus'];

    $hapusindex = mysqli_query($conn, "delete from stok where idbarang='$idbaranghapusindex'");
    if ($hapusindex) {
        header('location:index.php');
    } else {
        echo 'Gagal';
        header('location:index.php');
    }
}

//hapus barang masuk
if (isset($_POST['hapusbarangmasuk'])) {
    $idbaranghapusmasuk = $_POST['idbaranghapusmasuk'];
    $jumlahbaranghapusmasuk = $_POST['jumlahbaranghapusmasuk'];
    $idmasukhapus = $_POST['idmasukhapus'];

    $ambildatahapusmasuk = mysqli_query($conn, "select * from stok where idbarang='$idbaranghapusmasuk'");
    $datahapusmasuk = mysqli_fetch_array($ambildatahapusmasuk);
    $stokdata =  $datahapusmasuk['stok'];

    $selisihhapusmasuk = $stokdata - $jumlahbaranghapusmasuk;

    $hapusmasuk = mysqli_query($conn, "update stok set stok='$selisihhapusmasuk' where idbarang='$idbaranghapusmasuk'");
    $hapusdatamasuk = mysqli_query($conn, "delete from tmasuk where idmasuk='$idmasukhapus'");

    if ($hapusmasuk && $hapusdatamasuk) {
        header('location:bmasuk.php');
    } else {
        echo 'Gagal';
        header('location:bmasuk.php');
    }
}

//hapus barang keluar
if (isset($_POST['hapusbarangkeluar'])) {
    $idbaranghapuskeluar = $_POST['idbaranghapuskeluar'];
    $jumlahbaranghapuskeluar = $_POST['jumlahbaranghapuskeluar'];
    $idkeluarhapus = $_POST['idkeluarhapus'];

    $ambildatahapuskeluar = mysqli_query($conn, "select * from stok where idbarang='$idbaranghapuskeluar'");
    $datahapuskeluar = mysqli_fetch_array($ambildatahapuskeluar);
    $stokdatakeluar =  $datahapuskeluar['stok'];

    $selisihhapuskeluar = $stokdatakeluar + $jumlahbaranghapuskeluar;

    $hapuskeluar = mysqli_query($conn, "update stok set stok='$selisihhapuskeluar' where idbarang='$idbaranghapuskeluar'");
    $hapusdatakeluar = mysqli_query($conn, "delete from tkeluar where idkeluar='$idkeluarhapus'");

    if ($hapuskeluar && $hapusdatakeluar) {
        header('location:bkeluar.php');
    } else {
        echo 'Gagal';
        header('location:bkeluar.php');
    }
}
