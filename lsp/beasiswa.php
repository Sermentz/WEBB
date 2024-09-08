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
                            <a href="beasiswa.php" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Pilihan Beasiswa</a>
                        </li>
                        <li>
                            <a href="daftar.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Daftar Beasiswa</a>
                        </li>
                        <li>
                            <a href="hasil.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Hasil Beasiswa</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="">
        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white text-center">Beasiswa Akademik dan Beasiswa Prestasi Non Akademik</h1>
        <p class="mb-6 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400 text-center">Program ini dibuat untuk mempertahankan semangat belajar siswa/siswi agar mereka dapat menyelesaikan studi/pendidikan tepat waktunya.
            <br>
            Serta mendorong untuk meningkatkan prestasi akademik sehingga memacu peningkatan kualitas pendidikan
        </p>
        <br>
        <br>
        <br>
        <p class="mb-6 text-lg font-bold text-gray-900 lg:text-xl sm:px-16 xl:px-48 dark:text-white text-center">Beasiswa Akademik </p>
        <p class="mb-6 text-lg font-normal text-gray-700 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400 text-center"> Persyaratan : </p>
        <ul class="mb-6 text-lg font-normal text-gray-700 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400 text-center">
            <li>
                Syarat IPK 3,0
            </li>
            <li>
                Bersedia menandatangani kontrak beasiswa didampingi orang tua/wali
            </li>
            <li>
                Bersedia mengikuti seleksi teknis yang diselenggarakan
            </li>
        </ul>
        <br>
        <br>
        <br>
        <p class="mb-6 text-lg font-bold text-gray-900 lg:text-xl sm:px-16 xl:px-48 dark:text-white text-center">Beasiswa Prestasi Non Akademik </p>
        <p class="mb-6 text-lg font-normal text-gray-700 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400 text-center"> Persyaratan :</p>
        <ul class="mb-6 text-lg font-normal text-gray-700 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400 text-center">
            <li>
                Juara minimal tingkat provinsi/regional 2 tahun terakhir
            </li>
            <li>
                Bersedia menandatangani kontrak beasiswa didampingi orang tua/wali
            </li>
            <li>
                Bersedia mengikuti seleksi teknis yang diselenggarakan
            </li>
        </ul>
    </div>
    <div class="flex flex-col items-center">
        <a href="daftar.php" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Daftar Beasiswa
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
        </a>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
</body>

</html>