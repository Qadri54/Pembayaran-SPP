<!-- admin login:
    username = test
    password = password123
-->
<?php
session_start();
require 'database.php';

$chek_name = "";
$chek_pass = "";

if (isset($_SESSION["login"])) {
    header("location:./public/pembayaran.php");
}

if (isset($_POST["submit"])) {
    $login_result = login($_POST);

    if ($login_result === 0) {
        $chek_name = "nama kamu salah";
    }

    if ($login_result === 1) {
        $chek_pass = "password kamu salah";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="w-full h-screen flex flex-col justify-center items-center bg-[#4e7dec] gap-5">
        <div class="container md:w-[20rem] bg-slate-200 p-8 mx-auto w-[16rem] rounded-lg ">
            <h1 class="text-slate-900 text-3xl font-semibold text-center mb-6 -mt-1">Login Page</h1>
            <form class="max-w-sm flex flex-col justify-center items-center" method="post" action="">
                <div class="mb-5">
                    <label for="username"
                        class="block mb-2 text-sm font-medium text-blue-500 dark:text-red-400"><?php echo $chek_name ?></label>
                    <input type="text" name="username" id="username" size="30"
                        class="shadow-sm bg-slate-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        placeholder="masukkan nama kamu" autocomplete="off" required />
                </div>
                <div class="mb-5">
                    <label for="password"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-red-400"><?php echo $chek_pass ?></label>
                    <input type="password" id="password" size="30" name="password"
                        class="shadow-sm bg-slate-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        placeholder="masukkan password" autocomplete="off" required />
                </div>

                <div class="flex items-start mb-5">
                    <div class="flex items-center h-5">
                        <input id="terms" type="checkbox" value="" class="w-4 h-4 rounded cursor-pointer"
                            name="remember me" />
                    </div>
                    <label for="terms" class="ms-2 text-sm font-medium dark:text-gray-900 cursor-pointer">Remember
                        me?</label>
                </div>
                <button type="submit" name="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-1">Login
                    Now</button>
            </form>
        </div>
        <span class="text-gray-300 mt-4 font-semibold">dont have account? <a href="registrasi.php"
                class="text-orange-300 underline">create account now!</a></span>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
</body>

</html>