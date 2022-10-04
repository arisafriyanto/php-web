<?php

// Query parameter adalah informasi tambahan yang bisa dikirim client ke server secara dinamis
// biasanya query parameter ini ditambahkan di url, dan query nya adalah ? 
// contoh http://localhost/index.php?id=1

// Di PHP, semua query parameter yang kita buat akan otomatis masuk ke global variable $_GET
// $_GET ini adalah array yg berisi key dan value, key nya nama query parameternya dan valuenya, value dari 
// parameter tersebut.
// harus diperhatikan jika query parameter kan dikirim dari client, jadi pastikan sebelum kita gunakan ada 
// atau tidak query parameternya, berarti kita harus mengecek apakah ada data diservernya
// Query parameter bisa multiple dengan tanda &

// Query parameter jika kita kirim dengan nama yang sama akan dieksekusi yang terakhir
// contoh
// http://localhost:8080/6-query-parameter.php?name=Aris&usia=19&name=Budi
// hasil
// Hello Budi Usia 19


$say = "Hello " . $_GET['name'] . " Usia " . $_GET['usia'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Query Parameter</title>
</head>

<body>
    <h1><?= $say ?></h1>
</body>

</html>