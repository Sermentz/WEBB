<?php
require '../func.php';
require '../cek.php';

if (isset($_SESSION["role"])) {

    $role = $_SESSION["role"];

    if ($role == "Admin") {
    } else if ($role == "Pegawai") {
        header("location:../pegawai/notifikasi.php");
    } else {
        header("location:../pemasok/notifikasi.php");
    }
} else {
    http_response_code(404);
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Barang</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sidebar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
</head>

<body>
    <div class="flex min-h-screen flex-row bg-gray-100 text-gray-800 overflow-y-auto">
        <aside class="sidebar fixed top-0 bottom-0 lg:left-0 w-[250px] -translate-x-full transform text-center bg-red-900 p-4 transition-transform duration-150 ease-in md:translate-x-0 md:shadow-md overflow-y-auto">
            <div class="text-gray-100 text-xl">
                <div class="p-2.5 mt-1 flex items-center rounded-md">
                    <i class="bi bi-box-seam px-2 py-1 bg-red-500 rounded-md"></i>
                    <h1 class="text-[15px] ml-3 text-xl text-gray-200 font-bold">
                        Inventory
                    </h1>
                </div>
                <hr class="my-2 text-gray-600" />

                <div>
                    <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-red-600">
                        <i class="bi bi-boxes"></i>
                        <div class="flex justify-between w-full items-center" onclick="dropDown()">
                            <span class="text-[15px] ml-4 text-gray-200">Stok</span>
                            <span class="text-sm rotate-180" id="arrow">
                                <i class="bi bi-chevron-down"></i>
                            </span>
                        </div>
                    </div>
                    <div class="leading-7 text-left text-sm font-thin mt-2 w-4/5 mx-auto" id="submenu">
                        <a class="flex cursor-pointer p-2 hover:bg-red-700 rounded-md mt-1" href="index.php">
                            Data Barang
                        </a>
                        <a class="flex cursor-pointer p-2 hover:bg-red-700 rounded-md mt-1" href="bmasuk.php">
                            Barang Masuk
                        </a>
                        <a class="flex cursor-pointer p-2 hover:bg-red-700 rounded-md mt-1" href="bkeluar.php">
                            Barang Keluar
                        </a>
                    </div>
                    <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-red-600">
                        <i class="bi bi-bell-fill"></i>
                        <a class="text-[15px] ml-4 text-gray-200" href="notifikasi.php">Notifikasi</a>
                    </div>
                    <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-red-600">
                        <i class="bi bi-person-fill"></i>
                        <a class="text-[15px] ml-4 text-gray-200" href="datapengguna.php">Data Pengguna</a>
                    </div>
                    <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-red-600">
                        <i class="bi bi-box-arrow-in-right"></i>
                        <a class="text-[15px] ml-4 text-gray-200" href="logout.php">Logout</a>
                    </div>
                </div>
            </div>
            <div class="my-4"></div>
        </aside>
        <main class="fixed lg:left-[250px] mb-6 max-h-screen overflow-y-auto">
            <div class="p-8 ml-10 mt-6 mr-10 mb-10 rounded shadow bg-white">
                <p class="mb-2 text-[32px] font-bold ">Notifikasi</p>

                <div>
                    <?php
                    $ambilsisastok = mysqli_query($conn, "select * from stok where stok <= 10");

                    while ($fetch = mysqli_fetch_array($ambilsisastok)) {
                        $barang = $fetch['nbarang'];
                        $letak = $fetch['letak'];
                        $stok = $fetch['stok'];


                    ?>
                        <div class="flex items-center p-4 mb-4 text-sm text-blue-800 border border-blue-300 rounded-lg dark:text-blue-600 dark:border-blue-800" role="alert">
                            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                            </svg>
                            <span class="sr-only">Info</span>
                            <div>
                                <span class="font-medium">Pemberitahuan! </span> Stok Produk <?php echo $barang ?> Hanya Tersisa " <?php echo $stok ?> " Buah, Lokasi Produk Berada Di Lemari " <?php echo $letak ?> "
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>



        </main>
    </div>

    <script>
        function dropDown() {
            document.querySelector("#submenu").classList.toggle("hidden");
            document.querySelector("#arrow").classList.toggle("rotate-0");
        }
        dropDown();
    </script>
</body>


</html>