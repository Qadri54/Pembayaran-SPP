<?php
require '../database.php';

$user_id = $_GET["user_id"]; 
var_dump($user_id);
if((hapus($user_id) >= 0)){
    header('location:pembayaran.php');
}

