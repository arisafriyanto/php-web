<?php

/*
    Secara default method di form adalah get, sehingga ketika kita submit akan di kirim dalam bentuk  query parameter menggunakan $_GET

    Jadi untuk penginputan dgn form itu tidak menggunakan global variable $_GET = HTTP GET karena dia akan muncul di parameter urlnya.

    kita akan gunakan variable global $_POST, dia adalah HTTP POST sehingga pengiriman data ke servernya itu tidak lagi diparameter, tetapi di dalam body = HTTP BODY datanya akan ditangkap oleh $_POST.
    
    $_POST ini array sama seperti $_GET, yang berbeda dipengiriman datanya

    Jadi jika kita membuat form di html kita harus menggunakan $_POST untuk mengirim data yang diinputkan.
*/

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <form action="post.php" method="post">
        <label for="">First Name :<br>
            <input type="text" name="first_name" id="first_name">
        </label><br>

        <label for="">Last Name :<br>
            <input type="text" name="last_name" id="last_name">
        </label><br>

        <label for="">Age :<br>
            <input type="date" name="age" id="age">
        </label><br>

        <label for=""><br>
            <button type="submit">Submit</button>
        </label><br>
    </form>
</body>

</html>