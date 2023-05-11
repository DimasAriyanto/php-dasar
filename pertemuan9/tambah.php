<?php

require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST['submit'])) {

    // cek apakah data berhasil ditambahkan atau tidak 
    if (add($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil ditambahkan');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal ditambahkan');
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
    <title>Tambah Data Mahasiswa</title>
</head>

<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form">
        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="nim">NIM :</label>
                <input type="text" name="nim" id="nim" required>
            </li>
            <li>
                <label for="kelas">Kelas :</label>
                <input type="text" name="kelas" id="kelas" required>
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email" required>
            </li>
            <li>
                <label for="alamat">Alamat :</label>
                <input type="text" name="alamat" id="alamat" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>

</body>

</html>