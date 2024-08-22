<?php

$host = "localhost";
$user = "root";
$password = "";
$db_name = "siswa_user";

$conn = mysqli_connect($host, $user, $password, $db_name);

function select($query)
{
    global $conn;

    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function hapus($data)
{
    global $conn;
    $query = "DELETE FROM pembayaran_bulanan WHERE user_id='$data'";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function insertsiswa($data)
{
    global $conn;
    $query = "INSERT INTO pembayaran_bulanan (user_id) VALUES('$data');";

    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

function update_pembayaran($data, $user_id)
{
    global $conn;
    $januari = $data["januari"];
    $febuari = $data[""];
    $maret = $data[""];
    $april = $data[""];
    $mei = $data[""];
    $juni = $data[""];
    $juli = $data[""];
    $agustus = $data[""];
    $september = $data[""];
    $oktober = $data[""];
    $november = $data[""];
    $desembaer = $data[""];


    $query = "UPDATE pembayaran_bulanan 
              SET januari='$januari'";
    mysqli_query($conn, $query);

}


function login($data)
{
    global $conn;

    $username = $data["username"];
    $password = $data["password"];

    $query = "SELECT nama, password_siswa, nis, kelas FROM siswa WHERE nama='$username'";

    $chek = mysqli_query($conn, $query);

    if (mysqli_num_rows($chek) === 1) {
        $row = mysqli_fetch_assoc($chek);

        //if admin 
        if ($row["nama"] === "test") {
            if (password_verify($password, $row["password_siswa"])) {
                $_SESSION["admin"] = true;
                header("location:./public/pembayaran.php");
                exit;
            } else {
                return 1;
            }
        }

        //if user
        if (password_verify($password, $row["password_siswa"])) {
            $_SESSION["user"] = true;

            header("location:./public/siswa_profil.php?nama=" . $row["nama"] . "&nis=" . $row["nis"] . "&kelas=" . $row["kelas"]);
            exit;
        } else {
            return 1;
        }
    } else {
        return 0;
    }
}

function registrasi($data)
{
    global $conn;

    if ($data["username"] === "" || $data["kelas"] === "" || $data["nis"] === "" || $data["password"] === "") {
        return false;
    }


    $nama = htmlspecialchars($data["username"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $nis = htmlspecialchars($data["nis"]);
    $password = htmlspecialchars($data["password"]);
    $hash = password_hash($password, PASSWORD_BCRYPT);

    $rows = "SELECT nama FROM siswa";

    $validasi_nama = select($rows);

    foreach ($validasi_nama as $row) {
        if ($nama === $row["nama"]) {
            return 2;
        }
    }

    $query = "INSERT INTO siswa (nama,nis,password_siswa,kelas) VALUES('$nama','$nis','$hash','$kelas')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}