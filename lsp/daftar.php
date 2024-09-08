<?php
require 'func.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <title>Document</title>
</head>

<body class="bg-indigo-50">

    <div>
        <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
            <div class="flex flex-wrap items-center justify-between mx-auto p-4">
                <span class="items-center text-2xl font-semibold whitespace-nowrap dark:text-white">Beasiswa</span>
                </a>
                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="beasiswa.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">Pilihan Beasiswa</a>
                        </li>
                        <li>
                            <a href="daftar.php" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500">Daftar Beasiswa</a>
                        </li>
                        <li>
                            <a href="hasil.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Hasil Beasiswa</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div>
        <br>
        <br>
        <br>
        <br>
        <div class="">
            <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white text-center">Daftar Beasiswa</h1>

        </div>
    </div>
    <br>
    <div>
        <form name="form" class="max-w-sm mx-auto" method="POST">
            <div class="mb-3">
                <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                <input name="nama" type="text" id="base-input" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-3">
                <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">E-Mail</label>
                <input name="email" type="email" id="base-input" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-3">
                <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No. HP</label>
                <input name="nohp" type="number" id="base-input" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-3">
                <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Semester</label>
                <select name="semester" id="idSelectElement" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="1">Semester 1</option>
                    <option value="2">Semester 2</option>
                    <option value="3">Semester 3</option>
                    <option value="4">Semester 4</option>
                    <option value="5">Semester 5</option>
                    <option value="6">Semester 6</option>
                    <option value="7">Semester 7</option>
                    <option value="8">Semester 8</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">IPK</label>
                <input type="text" name="ipk" value="0" id="idIpkElement" readonly required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-3">
                <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilihan Beasiswa</label>
                <select name="pilihanbeasiswa" id="pilihanbeasiswa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="Akademik">Akademik</option>
                    <option value="Prestasi Non Akademik">Prestasi Non Akademik</option>
                </select>
            </div>
            <div class="mb-5">
                <label for="file" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Unggah File</label>
                <input name="file" id="file" type="file" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" required>

                <!-- <div class="">
                    <label for="formFile" class="form-label"></label>
                    <input class="form-control" type="file" id="formFile" name="formFile" required>
                </div> -->

            </div>


    </div>

    <div class="flex flex-col items-center ">
        <button name="ajukan" id="ajukan" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Ajukan Beasiswa
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
        </button>
    </div>

    </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <script>
        const semesterselect = document.getElementById('idSelectElement');
        const ipkinput = document.getElementById('idIpkElement');
        const ipkData = {
            1: 2.0,
            2: 2.5,
            3: 3.2,
            4: 3.3,
            5: 3.4,
            6: 3.5,
            7: 3.6,
            8: 3.7
        };

        semesterselect.onchange = function() {
            const selectedSemester = semesterselect.value;
            ipkinput.value = ipkData[selectedSemester] || "Data tidak tersedia";
        };

        // Nilai default dari select pertama x
        ipkinput.value = ipkData[semesterselect.value];


        // const btnajukan = document.getElementById('ajukan');

        // ipkinput.addEventListener("keyup", () => {
        //     if (ipkinput.value.length = 3) {
        //         btnajukan.disabled = false;
        //     } else {
        //         btnajukan.disabled = true;
        //     }
        // })
    </script>
</body>

</html>