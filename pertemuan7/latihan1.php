<?php

$mahasiswa = [
    [
        "nama" => "Dimas Ariyanto",
        "nim" => "21.11.4408",
        "kelas" => "Informatika"
    ],
    [
        "nama" => "Hafis Faza",
        "nim" => "21.11.4456",
        "kelas" => "Teknik Informatika"
    ],
    [
        "nama" => "Stefani Nugrahaning Tyas",
        "nim" => "21.10.3342",
        "kelas" => "Sistem Informasi"
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
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?> &nim= <?= $mhs["nim"]; ?> &kelas= <?= $mhs["kelas"]; ?>"><?= $mhs["nama"] ?></a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>