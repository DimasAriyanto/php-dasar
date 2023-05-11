<?php

// penggulangan
// 1. for
//  for( $i = 0; $i < 5; i++ ) {
//    echo "Hello world";
//  }


// 2. while
// $i = 0;
// while( $i < 5 ) {
//     echo "Hello world";
//     $ii++;
// }


// 3. do...while
// $i = 0;
// do {
//     echo "Hello world";
//     $i++;
// } while( $i < 5 );

// 4. foreach -> khusus array

// pengkodisian / percabangan
// 1. if..else..
// $x = 10;
// if($x < 20){
//     echo "benar";
// } else{
//     echo "salah";
// }


// 2. if..else if..else..
// $x = 10;
// if($x < 20){
//     echo "benar";
// } elseif($x == 20){
//     echo "bingo";
// } else{
//     echo "salah";
// }


// 3. ternary
// 4. switch

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>

<body>

    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($baris = 1; $baris <= 5; $baris++) : ?>
            <?php if ($baris % 2 == 1) : ?>
                <tr class="warna-baris">
                <?php else : ?>
                <tr>
                <?php endif; ?>
                <?php for ($kolom = 1; $kolom <= 5; $kolom++) : ?>
                    <td> <?= "$baris,$kolom"; ?> </td>
                <?php endfor; ?>
                </tr>
            <?php endfor; ?>
    </table>

</body>

</html>