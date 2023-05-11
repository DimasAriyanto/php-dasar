<?php
// array
// variable yang memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda

// membuat array
// cara lama
// $hari = array("senin", "selasa", "rabu");
// cara baru
// $bulan = ["januari", "februari", "maret"];
// $arr1 = [123, "tulisan", false];

// menampilkan array
// foreach
// var_dump() / print_r() -> debugging
// var_dump($hari);
// echo "<br>";
// print_r($bulan);

// menampilkan 1 elemen pada array
// echo $arr1[0];

// menambahkan elemen baru pada array
// var_dump($hari);
// $hari[] = "kamis";
// $hari[] = "jum'at";
// echo "<br>";
// var_dump($hari);

// array multidimensi
$numbers = [
    [1, 2, 3,],
    [4, 5, 6,],
    [7, 8, 9]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
    </style>
</head>

<body>
    <?php foreach ($numbers as $number) : ?>
        <?php foreach ($number as $angka) : ?>
            <div><?= $angka ?></div>
        <?php endforeach; ?>
    <?php endforeach; ?>
</body>

</html>