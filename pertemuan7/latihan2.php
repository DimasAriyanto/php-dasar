<?php

if (!isset($_GET["nama"]) || !isset($_GET["nim"]) || !isset($_GET["kelas"])) {
    header("Location:latihan1.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Informasi Mahasiswa</title>
</head>

<body>
    <h1>Informasi Mahasiswa</h1>

    <ul>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["nim"]; ?></li>
        <li><?= $_GET["kelas"]; ?></li>
    </ul>
    <a href="latihan1.php">kembali ke latihan1</a>
</body>

</html>