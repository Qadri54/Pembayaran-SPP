<?php 
session_start();
if(!isset($_SESSION["user"])){
    header("location:../login.php");
}
$nama = $_GET["nama"];
$kelas= $_GET["kelas"];
$nis  = $_GET["nis"]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profil siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
</head>
<body>

<div class="container-full flex flex-col relative">

<!-- navigation -->
    <div>
        <a href="./logout.php"><img src="logout_icon.png" alt="" class="w-[35px] h-[35px] absolute top-5 right-7"></a>
    </div>
<!-- navigation end -->

<!-- content -->
    <div class="bg-slate-200 md:w-[25rem] md:h-[25rem] w-[20rem] mx-auto xl:mt-[10rem] mt-[15rem] flex flex-col justify-center items-center p-5 gap-3 rounded-md">
        <h1 class="text-slate-700 font-semibold"><?php echo $nama?></h1>
        <!-- IMAGE -->
        <div style="background: url('alex.jpg') no-repeat; background-size:cover;" class="rounded-full w-[5rem] h-[5rem] "></div>

        <!-- DATA -->
        <div class="w-[10rem] h-[2rem] bg-[#757575] rounded-lg p-1"><p class="text-slate-200 font-semibold text-center"><?php echo $kelas?></p></div>
        <div class="w-[10rem] h-[2rem] bg-[#757575] rounded-lg p-1"><p class="text-slate-200 font-semibold text-center"><?php echo $nis?></p></div>

        <!-- Action -->
        <a href=""></a><button class="w-[10rem] h-[2rem] bg-[#757575] rounded-lg pointer"><p class="text-slate-200 font-semibold text-center">Bayar SPP</p></button>
    </div>
<!-- content end -->
</div>


<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
</body>
</html>