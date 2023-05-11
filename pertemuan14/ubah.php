<?php

// menjalankan session
session_start();

// jika tidak ada session login maka akan berpindah ke halaman login
if( !isset($_SESSION["login"]) ) {
    header("Location:login.php");
    exit;
}

// menghungungkan ke halaman functions.php
require 'functions.php';

// ambil data di URL 
$id = $_GET['id'];

// query data berdasarkan id 
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST['submit'])){
   
    // cek apakah data berhasil diubah atau tidak 
    if( edit($_POST)>0 ) {
        echo "
        <script>
            alert('data berhasil diubah');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal diubah');
            document.location.href = 'index.php';
        </script>
        ";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
</head>
<body>
    <h1>Edit Data Mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form">
        <ul>
            <input type="hidden" name="id" value="<?= $mhs["id"] ?>" />
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]?>" >
            </li>
            <li>
                <label for="nim">NIM :</label>
                <input type="text" name="nim" id="nim" required value="<?= $mhs["nim"]?>" >
            </li>
            <li>
                <label for="kelas">Kelas :</label>
                <input type="text" name="kelas" id="kelas" required value="<?= $mhs["kelas"]?>" >
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email" required value="<?= $mhs["email"]?>" >
            </li>
            <li>
                <label for="alamat">Alamat :</label>
                <input type="text" name="alamat" id="alamat" required value="<?= $mhs["alamat"]?>" >
            </li>
            <li>
                <button type="submit" name="submit">Edit Data</button>
            </li>
        </ul>
    </form>
    
</body>
</html>