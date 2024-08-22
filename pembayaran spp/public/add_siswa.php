<?php 
    require '../database.php';
    $status = "";

    if(isset($_POST["submit"])){
        $result = insertsiswa($_POST["id_user"]);

        if($result < 0){
            $status = "gagal menambahkan mahasiswa";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <title>add_siswa</title>
</head>
<body>
<div class="w-full h-screen flex flex-col justify-center items-center bg-[#4e7dec] gap-5">
        <div class="container md:w-[20rem] bg-slate-200 p-8 mx-auto w-[16rem] rounded-lg ">
            <h1 class="text-slate-900 text-3xl font-semibold text-center mb-6 -mt-1">Add siswa</h1>
            <form class="max-w-sm flex flex-col justify-center items-center" method="post" action="">
                <div class="mb-5">
                    <label for="id"
                        class="block mb-2 text-sm font-medium text-blue-500 dark:text-red-400"><?php echo $status ?></label>
                    <input type="text" name="id_user" id="id" size="30"
                        class="shadow-sm bg-slate-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        placeholder="masukkan id siswa" autocomplete="off" required />
                </div>

                <button type="submit" name="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-1">Add siswa</button>
            </form>
        </div>
        <a href="pembayaran.php" class="text-slate-100 mt-4 font-semibold underline">kembali ke halaman utama</a>
    </div>

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>
</html>