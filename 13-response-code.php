<?php

/*
    HTTP RESPONSE CODE

    default response code ketika kita buat website di php adalah 200 = OK
    kita kadang" ingin mengubah response code nya
    ini jarang kita lakukan merubah response code ketika buat website tetapi jika kita belajar back-end ada yang namanya Api,
    Nah ketika kita membuat API di php kita sangat perlu mengirimkan response code karena api itu interaksi antara mesin dengan mesin (aplikasi kita dengan aplikasi yang akan mengonsumsi api kita), sehingga mereka menggunakan bahasa mesin dan kita harus ngasih tau response code nya supaya mereka tahu


    sebenarnya secara tidak langsung ketika kita buat header(location: url), dia akan mengembalikan response code 302 artinya redirect gthu, kita bisa juga set response code yang kita inginkan dengan cara

    cara membuat HTTP_RESPONSE_CODE di php kita bisa gunakan function http_response_code(kode)
    inget http response code ini ada diawal HTTP jadi buat sebelum membuat contentnnya
*/

if (!isset($_GET['name']) || $_GET['name'] == "") {
    http_response_code(400);
    echo "Name is required!";
    exit();
}

$say = htmlspecialchars($_GET['name']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Response Code</title>
</head>

<body>
    <h1><?= $say; ?></h1>
</body>

</html>