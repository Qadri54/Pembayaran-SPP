<?php
session_start();
require '../database.php';
$result = select("SELECT p.user_id, s.nama, s.kelas, p.januari, p.febuari, p.maret, p.april, p.mei, p.juni, p.juli, p.agustus, p.septembar, p.oktober, p.november, p.desembar
 FROM siswa AS s JOIN pembayaran_bulanan AS p ON(s.id = p.user_id) LIMIT 3 OFFSET 0");

if (!isset($_SESSION["admin"])) {
    header("location:../login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pembayaran spp</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="container flex gap-3">

        <aside class="h-screen bg-gray-200 flex flex-col items-center p-10">
            <ul class="w-[5rem] flex flex-col items-center gap-6 font-semibold text-gray-700">
                <a href="">
                    <li class="cursor-pointer hover:text-gray-500">Home</li>
                </a>
                <a href="">
                    <li class="cursor-pointer hover:text-gray-500">About</li>
                </a>
                <a href="add_siswa.php">
                    <li class="cursor-pointer hover:text-gray-500">Create</li>
                </a>
                <a href="logout.php" data-modal-target="popup-modal" data-modal-toggle="popup-modal" id="logout">
                    <li class="cursor-pointer hover:text-gray-500 logout">Logout</li>
                </a>
            </ul>
        </aside>

        <content>

            <form action="" >
                <input type="text" placeholder="cari mahasiswa" id="keyword"
                    class="relative top-[1rem] bg-slate-300 rounded-lg border-none">
            </form>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-[2rem]" id="container">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-lg text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nama
                            </th>
                            <th scope="col" class="px-6 py-3">
                                kelas
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                            <th scope="col" class="px-6 py-3">
                                januari
                            </th>
                            <th scope="col" class="px-6 py-3">
                                febuari
                            </th>
                            <th scope="col" class="px-6 py-3">
                                maret
                            </th>
                            <th scope="col" class="px-6 py-3">
                                april
                            </th>
                            <th scope="col" class="px-6 py-3">
                                mei
                            </th>
                            <th scope="col" class="px-6 py-3">
                                juni
                            </th>
                            <th scope="col" class="px-6 py-3">
                                juli
                            </th>
                            <th scope="col" class="px-6 py-3">
                                agustus
                            </th>
                            <th scope="col" class="px-6 py-3">
                                september
                            </th>
                            <th scope="col" class="px-6 py-3">
                                oktober
                            </th>
                            <th scope="col" class="px-6 py-3">
                                november
                            </th>
                            <th scope="col" class="px-6 py-3">
                                desember
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-lg">
                        <?php foreach ($result as $data): ?>
                            <tr class=" dark:border-gray-100">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrapt dark:ext-dark">
                                    <?php echo $data["nama"] ?>
                                </th>
                                <td class="px-6 py-4">
                                    <?php echo $data["kelas"] ?>
                                </td>
                                <td class="py-4">
                                    <a href="delete.php?user_id=<?php echo $data["user_id"] ?>"
                                        data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline hapus">hapus</a>
                                    |
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">edit</a>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo ($data["januari"] != 0) ? "sudah bayar" : "belum bayar" ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo ($data["febuari"] != 0) ? "sudah bayar" : "belum bayar" ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo ($data["maret"] != 0) ? "sudah bayar" : "belum bayar" ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo ($data["april"] != 0) ? "sudah bayar" : "belum bayar" ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo ($data["mei"] != 0) ? "sudah bayar" : "belum bayar" ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo ($data["juni"] != 0) ? "sudah bayar" : "belum bayar" ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo ($data["juli"] != 0) ? "sudah bayar" : "belum bayar" ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo ($data["agustus"] != 0) ? "sudah bayar" : "belum bayar" ?>
                                </td>
                                <td class="px-7 py-4">
                                    <?php echo ($data["septembar"] != 0) ? "sudah bayar" : "belum bayar" ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo ($data["oktober"] != 0) ? "sudah bayar" : "belum bayar" ?>
                                </td>
                                <td class="px-7 py-4">
                                    <?php echo ($data["november"] != 0) ? "sudah bayar" : "belum bayar" ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo ($data["desembar"] != 0) ? "sudah bayar" : "belum bayar" ?>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>


        </content>
    </div>

    <div id="popup-modal" tabindex="-1"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full top-0 left-0 modal-content">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="popup-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 md:p-5 text-center">
                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400" id="message"></h3>
                    <button data-modal-hide="popup-modal" type="button"
                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center"
                        id="yesbutton">
                        Yes
                    </button>
                    <button data-modal-hide="popup-modal" type="button"
                        class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <script src="data.js"></script>
</body>
</body>

</html>