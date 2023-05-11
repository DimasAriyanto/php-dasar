<?php
// pertemuan 2
// sintaks php

// standar output
// echo, print
// print_r, var_dump(debugging) -> khusus array
// contoh :
// echo "Dimas Ariyanto";
// echo "<br>";
// print "Farel Daniswara";
// echo "<br>";
// print_r ("Akmal Gusti Jawsund");
// echo "<br>";
// var_dump("Ihsan Irfandi");

// penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP ( tidak disarankan )

// variabel dan tipe data
// 1. Variabel
// note : tidak boleh diawali dengan angka, tapi boleh mengandung angka
// contoh :
$nama = "Dimas Ariyanto";

// Operator
// 1. Aritmatka
// contoh :
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// 2. penggabungan string / concatenation / concat
// .
// contoh : 
// $nama_depan = "Dimas";
// $nama_belakang = "Ariyanto";
// echo $nama_depan . " " . $nama_belakang;

// 3. Assignment
// =, +=, -=, *=, /=, %=, .=
// contoh
// $nama = "Dimas";
// $nama .= " ";
// $nama .= "Ariyanto";
// echo $nama;

// 4. perbandingan
// <, >, <=, >=, ==, !=
// contoh:
// var_dump(1 == "1");

// 5. identitas
// ===, !==
// contoh :
// var_dump(1 === "1");


// 6. logika
// &&, ||, !
// $x = 30;
// var_dump($x <20 || $x %2 == 0);

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
    <!-- Contoh PHP di dalam HTML -->
    <h1>Halo, Selamat Datang <?= $nama ?></h1>

</body>

</html>