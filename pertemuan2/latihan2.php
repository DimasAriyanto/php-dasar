<?php

$nama = "Dimas Ariyanto";
$npm = "21.11.4408";
$kelas = "21 IF 09"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP</title>
</head>
<body>
    <h1><?php echo "Latihan PHP dan HTML" ?></h1>
    <table border="1" style="width: 50%">
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Kelas</th>
        </tr>
        <tr>
            <td><?php echo $nama ?></td>
            <td><?php echo $npm ?></td>
            <td><?php echo $kelas ?></td>
        </tr>
    </table>
</body>
</html>