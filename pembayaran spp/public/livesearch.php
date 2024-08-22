<?php
require '../database.php';

$nama = $_GET["keyword"];

$result = select("SELECT p.user_id, s.nama, s.kelas, p.januari, p.febuari, p.maret, p.april, p.mei, p.juni, p.juli, p.agustus, p.septembar, p.oktober, p.november, p.desembar
FROM siswa AS s JOIN pembayaran_bulanan AS p ON(s.id = p.user_id) WHERE nama LIKE '%$nama%'");

?>
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
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrapt dark:ext-dark">
                        <?php echo $data["nama"] ?>
                    </th>
                    <td class="px-6 py-4">
                        <?php echo $data["kelas"] ?>
                    </td>
                    <td class="py-4">
                        <a href="delete.php?user_id=<?php echo $data["user_id"] ?>" data-modal-target="popup-modal"
                            data-modal-toggle="popup-modal"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline hapus">hapus</a>
                        |
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">edit</a>
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