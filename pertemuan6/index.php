<?php

// array assosiative
$mahasiswa = [
    [
        "nama" => "dimas ariyanto",
        "nim" => "21.11.4408",
        "kelas" => "Informatika"
    ],
    [
        "nama" => "adit sopojarwo",
        "nim" => "21.11.4456",
        "kelas" => "teknik informatika"
    ],
    [
        "nama" => "irfan jaya",
        "nim" => "21.10.3342",
        "kelas" => "sistem informasi"
    ]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs["nama"] ?></li>
            <li>Nama : <?= $mhs["nim"] ?></li>
            <li>Nama : <?= $mhs["kelas"] ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>