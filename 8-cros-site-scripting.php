<?php

/*
    xss itu celah keamanan yang biasanya digunakan hacker untuk menyerang melalui parameter
    jika pembuatan kode salah melakukan render halaman web, maka script itu akan dirender ke halaman web, dan penyerang bisa ngirim kode javascript yang berbahaya.
    Jadi javascript itu bisa ambil cookie & ambil session gthu
    contohnya dia bisa ambil session yang sedang login, dan dia akan bisa login dengan session itu

    contoh
    http://localhost:8080/8-cros-site-scripting.php?name=Aris<script>alert('Ups kena hack')</script>

    hasil
    maka dia akan menampilkan allert semau mereka

    Ini sangat berbahaya karena yang kita kirim di parameter dia dirender sebagai kode html, js dll secara bulat bulat
*/


/*
    Kita perlu hati-hati text yang diinputkan oleh user.
    Jika kita tidak tahu sebuah text yang diinput user berisi tag HTML, kita bisa gunakan function htmlspecialchars(value) di php untuk mencegah kode HTML itu dieksekusi
    Untuk mencegah serangan xss kita bisa gunakan function htmlspecialchars(value), dia akan melakukan special character dan merender menjadi text biasa.

    contoh
    http://localhost:8080/8-cros-site-scripting.php?name=Aris<script>alert('Ups kena hack')</script>

    hasil view page source
    Hello Aris&lt;script&gt;alert(' Ups kena hack nich!!!')&lt;/script&gt;
*/


$say = "Hello " . htmlspecialchars($_GET['name']);

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