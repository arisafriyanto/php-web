<?php

/*
    Query parameter secara default adalah pasangan antara key dan value, jadi PHP bisa ngirim query parameter lebih dari satu dan akan dikonversi otomatis, kita bisa gunakan array untuk mengisikan data lebih dari satu dari key yang sama.

    Caranya kita gunakan [] diakhir key nya
    contoh
    name[]=Aris&name[]=Budi     sehingga kita bisa mengirim banyak data dari satu key

    contoh
    http://localhost:8080/7-query-parameter-array.php?numbers[]=100&numbers[]=29&numbers[]=11

    hasilnya
    Total : 140
*/

$numbers = $_GET['numbers'];
$total = 0;

foreach ($numbers as $number) {
    $total += $number;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Query parameter array</title>
</head>

<body>
    <h1>Total : <?= $total; ?></h1>
</body>

</html>