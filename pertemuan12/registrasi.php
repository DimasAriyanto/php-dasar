<?php

// menghubungkan ke function.php
require 'functions.php';

// ketika tombol register di tekan
if ( isset( $_POST["register"])) {
    // jika berhasil maka akan menampilkan alert dan menambah user baru di database
    if( registrasi($_POST) > 0 ) {
        echo " <script>
                alert ('user baru berhasil ditambahkan')
                </script>";
    // jika salah maka akan menampilkan pesan error
    } else {
        echo mysqli_error($connection);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
    <h1>Halaman Registrasi</h1>
    <form action="" method="post" enctype="multipart/form">
        <ul>
            <li>
                <label for="username">username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="passowrd">password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <label for="passowrd2">konfirmasi password :</label>
                <input type="password" name="password2" id="password2">
            </li>
            <li>
                <button type="submit" name="register">register</button>
            </li>
        </ul>
    </form>
</body>
</html>