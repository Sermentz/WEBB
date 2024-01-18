<?php
require 'func.php';
require 'cek.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> Stok Data Barang Masuk </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css" rel="stylesheet">
    <style>

    </style>
</head>

<body class="p-10 m-10 mb-10 mt-10 mr-10 ml-10">
    <div class="container">
        <table id="example" class="display nowrap" style="width:100%">
            <thead>
                <tr>
                    <th data-priority="1">Tanggal Masuk</th>
                    <th data-priority="2">Barcode</th>
                    <th data-priority="3">Nama Barang</th>
                    <th data-priority="4" class="max-w-[85px]">Jenis</th>
                    <th data-priority="5" class="max-w-[60px]">Lokasi</th>
                    <th data-priority="6" class="max-w-[140px]">Jumlah</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $ambilsemuadatastok = mysqli_query($conn, "select * from tmasuk m, stok s where s.barcode = m.barcode");
                while ($data = mysqli_fetch_array($ambilsemuadatastok)) {
                    $barcode = $data['barcode'];
                    $nbarang = $data['nbarang'];
                    $jenis = $data['jenis'];
                    $letak = $data['letak'];
                    $tanggal = $data['tanggal'];
                    $mjumlah = $data['mjumlah'];
                ?>
                    <tr>
                        <td class="text-center"><?= $tanggal ?></td>
                        <td class="text-center"><?= $barcode ?></td>
                        <td class="text-center"><?= $nbarang ?></td>
                        <td class="text-center"><?= $jenis ?></td>
                        <td class="text-center"><?= $letak ?></td>
                        <td class="text-center"><?= $mjumlah ?></td>
                    </tr>
                <?php
                };
                ?>
            </tbody>
        </table>


    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>

    <script src="js/printstok.js"></script>
</body>

</html>