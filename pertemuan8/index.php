<?php

// ambil data dari tabel mahasiswa/query data


// ambil data(fetch) mahasiswa dari object result
// 1. mysqli_fetch_row() // mengembalikan nilai numerik
// 2. mysqli_fetch_assoc() // mengembalikan array associative
// 3. mysqli_fetch_array() // mengembalikan array keduanya
// 4. mysqli_fetch_object()

// $mhs = mysqli_fetch_row($result);
// var_dump($mhs);

// $mhs = mysqli_fetch_assoc($result);
// var_dump($mhs);

// $mhs = mysqli_fetch_assoc($result);
// var_dump($mhs);
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

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
    <h1>Daftar Mahasiswa</h1>
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

        <?php $i = 1 ?>
        <?php foreach ($mahasiswa as $row) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><a href="">delete</a> | <a href="">insert</a></td>
                <td><?= $row["nama"] ?></td>
                <td><?= $row["nim"] ?></td>
                <td><?= $row["kelas"] ?></td>
                <td><?= $row["email"] ?></td>
                <td><?= $row["alamat"] ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>

</html>