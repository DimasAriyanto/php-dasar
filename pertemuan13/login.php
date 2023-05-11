<?php

// menghubungkan dangan functions.php
require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["login"]) ) {

    // menangkap username dan password
    $username = $_POST["username"];
    $password = $_POST["password"];

    // cek apakah username ada di database
    $result = mysqli_query($connection, "SELECT * FROM user WHERE username = '$username' ");

    if ( mysqli_num_rows($result) === 1 ) {
        
        // cek password
        $row = mysqli_fetch_assoc($result);
        if ( password_verify($password, $row['password']) ) {
            header("Location: index.php");
            exit;
        }
    }

    // jika username dan password salah
    $error = true;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>
    <h1>halaman login</h1>

    <?php if (isset($error)) : ?>
        <p style="color:red; font-style: italic;">username and password incorrect</p>
    <?php endif; ?>

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
                <button type="submit" name="login">login</button>
            </li>
        </ul>
    </form>
</body>
</html>