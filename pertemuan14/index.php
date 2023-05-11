<?php

// menjalankan session
session_start();

// jika tidak ada session login maka akan berpindah ke halaman login
if( !isset($_SESSION["login"]) ) {
    header("Location:login.php");
    exit;
}

// menghubungkan ke function.php
require 'functions.php';

// query data
$mahasiswa = query("SELECT * FROM mahasiswa");

// tombol cari ditekan
if( isset($_POST["cari"]) ) {
    $mahasiswa = search($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman administration</title>
</head>
<body>
    <a href="logout.php">logout</a>
    <br>

    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>

    <form action="" method="post">
        <input type="text" name="keyword" size="40" placeholder="Masukkan Keyword Pencarian" autofocus autocomplete="off">
        <button type="submit" name="cari">cari</button>
    </form>
    <br>

    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Kelas</th>
            <th>Email</th>
            <th>Alamat</th>
        </tr>

        <?php $i=1 ?>
        <?php foreach($mahasiswa as $mhs): ?>
        <tr>
            <td><?= $i?></td>
            <td><a href="hapus.php?id= <?= $mhs["id"] ?>" onclick="return confirm('Are you sure')">delete</a> 
                | <a href="ubah.php?id= <?= $mhs["id"] ?>">edit</a>
            </td>
            <td><?= $mhs["nama"]?></td>
            <td><?= $mhs["nim"]?></td>
            <td><?= $mhs["kelas"]?></td>
            <td><?= $mhs["email"]?></td>
            <td><?= $mhs["alamat"]?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>