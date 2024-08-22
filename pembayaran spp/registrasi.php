<?php
require 'database.php'; 

$chek_name = "";
if(isset($_POST["submit"])){
    $result = registrasi($_POST);

    if($result === 1){
        header("location:login.php");
    }else if($result === 2){
        $chek_name = ":nama sudah ada";
    }else if(!$result){
        
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registrasi</title>
        <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    
    <body class="bg-[#4e7dec]">
        <div class="container-full h-screen flex justify-center items-center">
            <div
            class="2xl:w-[90rem] xl:w-[80rem] lg:w-[50rem] md:w-[40rem] w-[19rem] sm:w-[25rem] lg:h-[35rem] xl:h-[45rem] bg-white lg:rounded-[1rem] xl:rounded-[1rem] md:rounded rounded flex md:flex-row flex-col items-center sm:gap-3 relative drop-shadow-2xl">

            <button data-collapse-toggle="navbar-hamburger" type="button" id="button-navbar"
            class="md:hidden absolute z-10 top-1 right-1 inline-flex items-center justify-center p-2 w-10 h-10 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none ring-2 ring-gray-200 "
            aria-controls="navbar-hamburger" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M1 1h15M1 7h15M1 13h15" />
        </svg>
            </button>
            <div class="hidden w-[50%] absolute right-4 top-8" id="content-nav">
                <ul class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                    <li>
                        <a href="#" class="block py-2 px-3 text-white rounded"
                        aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Portofolio</a>
                    </li>
                    <li>
                        <a href="#"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white">Demo</a>
                    </li>
                    <li>
                        <a href="#"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Harga</a>
                    </li>
                    <li>
                        <a href="login.php"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Login</a>
                    </li>
                </ul>
            </div>
            <div class="w-[50%] h-[100%] flex items-center">
                
                <form method="post" action=""
                class="xl:w-[25rem] lg:w-[25rem] lg:ml-[1rem] md:ml-[2rem] md:w-[15rem] w-[19rem] -ml-[1.5rem] gap-3 flex flex-col xl:gap-10 lg:gap-10 md:gap-5 mt-5 md:p-10 lg:mr-20 lg:mt-3 xl:mt-0 ">
                <h1 class="font-bold lg:text-2xl xl:text-4xl ml-2 md:ml-0 xl:ml-0 sm:ml-[4rem] ml-[4.5rem]">Sign Up</h1>
                <p class="text-red-600 absolute top-[11.8rem] ml-1 font-semibold" ><?php echo $chek_name ?></p>
                <input type="text" placeholder="masukkan nama" class="border-none bg-[#f4f4fa] font-bold" name="username" autocomplete="off" required>
                <input type="text" placeholder="masukkan nis" class="border-none bg-[#f4f4fa] font-bold" name="nis" autocomplete="off" required>
                <input type="text" placeholder="masukkan kelas" class="border-none bg-[#f4f4fa] font-bold" name="kelas" autocomplete="off" required>
                <input type="password" placeholder="masukkan password" class="border-none bg-[#f4f4fa] font-bold" name="password" autocomplete="off" required>
                <button type="submit" name="submit"
                class="ml-[2.5rem] sm:ml-[3rem] w-[7rem] text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">buat
                akun</button>
            </form>
        </div>
        <div class="w-[50%] h-[100%] ">
            <ul
            class="md:h-10 md:flex md:justify-end md:items-center md:font-semibold text-[#888888] lg:text-md xl:text-xl md:text-sm lg:gap-10 xl:gap-10 md:gap-3 xl:mr-32 xl:mt-7 lg:mt-2 lg:mr-44 md:mr-10 hidden">
            <a href="" class="hover:text-sky-700">
                <li>Home</li>
            </a>
            <a href="" class="hover:text-sky-700">
                <li>Portofolio</li>
            </a>
            <a href="" class="hover:text-sky-700">
                <li>Demo</li>
            </a>
            <a href="" class="hover:text-sky-700">
                <li>Harga</li>
            </a>
            <a href="login.php" class="hover:text-sky-700">
                <li>Login</li>
            </a>
        </ul>
        
        
        <img src="./public/content_image.png" alt="" class="xl:-mt-5 lg:mt-5 md:mt-5 sm:mt-5  mt-6">
    </div>
</div>
</div>


<script src="test.js"></script>
</body>

</html>