<?php
require '../func.php';
require '../cek.php';

if (isset($_SESSION["role"])) {

    $role = $_SESSION["role"];

    if ($role == "Admin") {
    } else {
        http_response_code(404);
        die();
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
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
    <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel=" stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <style>
        .dataTables_wrapper select,
        .dataTables_wrapper .dataTables_filter input {
            color: #4a5568;
            /*text-gray-700*/
            padding-left: 1rem;
            /*pl-4*/
            padding-right: 1rem;
            /*pl-4*/
            padding-top: 0.5rem;
            /*pl-2*/
            padding-bottom: 0.5rem;
            /*pl-2*/
            line-height: 1.25;
            /*leading-tight*/
            border-width: 2px;
            /*border-2*/
            border-radius: 0.25rem;
            border-color: #edf2f7;
            /*border-gray-200*/
            background-color: #edf2f7;
            /*bg-gray-200*/
        }

        /*Row Hover*/
        table.dataTable.hover tbody tr:hover,
        table.dataTable.display tbody tr:hover {
            background-color: #ebf4ff;
            /*bg-indigo-100*/
        }

        /*Pagination Buttons*/
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            font-weight: 700;
            /*font-bold*/
            border-radius: 0.25rem;
            /*rounded*/
            border: 1px solid transparent;
            /*border border-transparent*/
        }

        /*Pagination Buttons - Current selected */
        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            color: #fff !important;
            /*text-white*/
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
            /*shadow*/
            font-weight: 700;
            /*font-bold*/
            border-radius: 0.25rem;
            /*rounded*/
            background: #667eea !important;
            /*bg-indigo-500*/
            border: 1px solid transparent;
            /*border border-transparent*/
        }

        /*Pagination Buttons - Hover */
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            color: #fff !important;
            /*text-white*/
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
            /*shadow*/
            font-weight: 700;
            /*font-bold*/
            border-radius: 0.25rem;
            /*rounded*/
            background: #667eea !important;
            /*bg-indigo-500*/
            border: 1px solid transparent;
            /*border border-transparent*/
        }

        /*Add padding to bottom border */
        table.dataTable.no-footer {
            border-bottom: 1px solid #e2e8f0;
            /*border-b-1 border-gray-300*/
            margin-top: 0.75em;
            margin-bottom: 0.75em;
        }

        /*Change colour of responsive icon*/
        table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before,
        table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
            background-color: #667eea !important;
            /*bg-indigo-500*/
        }
    </style>
</head>

<body class="">
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
                <div>
                    <p class="mb-2 text-[32px] font-bold ">Data Pengguna</p>
                </div>
                <div id='recipients' class="">


                    <table id="example" class="stripe hover table-fixed" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                        <thead>
                            <tr>
                                <th data-priority="1">E-Mail</th>
                                <th data-priority="3" class="max-w-[85px]">Role</th>
                                <!-- <th data-priority="5" class="max-w-[100px]">Aksi</th> -->
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $ambilsemuadatapengguna = mysqli_query($conn, "select * from user");
                            while ($data = mysqli_fetch_array($ambilsemuadatapengguna)) {
                                $email = $data['email'];
                                $role = $data['role'];
                            ?>
                                <tr>
                                    <td class="text-center"><?= $email ?></td>
                                    <td class="text-center"><?= $role ?></td>
                                    <!-- <td class="text-center">
                                        <button class="bg-blue-600 hover:bg-blue-300 text-white font-semibold hover:text-blue-800 py-2 px-4 mr-2 border border-blue-600 hover:border-transparent rounded ">Edit</button>
                                        <button class="bg-red-600 hover:bg-red-300 text-white font-semibold hover:text-red-800 py-2 px-4 mr-2 border border-red-600 hover:border-transparent rounded ">Hapus</button>
                                    </td> -->
                                </tr>
                            <?php
                            };
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="">
                    <button data-modal-target="tambahmodal" data-modal-toggle="tambahmodal" class="bg-blue-600 hover:bg-blue-300 text-white font-semibold hover:text-blue-800 py-2 px-4 mr-2 border border-blue-600 hover:border-transparent rounded " type="button">Tambah Pengguna</button>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!--Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script>
        $(document).ready(function() {

            var table = $('#example').DataTable({
                    responsive: true
                })
                .columns.adjust()
                .responsive.recalc();
        });
    </script>
</body>
<div id="tambahmodal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Tambah Pengguna
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="tambahmodal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="p-4 md:p-5" method="post">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">E-Mail</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Ketik E-Mail" required="">
                    </div>
                    <div class="col-span-2">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Ketik Password" required="">
                    </div>
                    <div class="col-span-2">
                        <label for="role" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role</label>
                        <select id="role" name="role" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="Admin">Admin</option>
                            <option value="Pegawai">Pegawai</option>
                            <option value="Pemasok">Pemasok</option>
                        </select>
                    </div>
                </div>
                <button type="submit" name="tambahpengguna" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Tambah Pengguna
                </button>
            </form>
        </div>
    </div>
</div>


</html>