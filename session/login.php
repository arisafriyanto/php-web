<?php

/* 
    Session harus diawali dengan session start sebelum diambil data sessionnya karena akan diload dulu semua sessionnya, data session jangan terlalu besar karena ini akan diload semua jika data besar aplikasi akan lambat.

    Session disimpan di file sehingga jika ada 2 server itu akan jadi error bermasalah cara mengatasinya dengan Secure Cookie dan JWT(Json web token)
*/

session_start();

if (isset($_SESSION['login']) == true) {
    header("location: /session/member.php");
    exit();
}

$error = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if ($_POST['username'] == "afriyan" && $_POST['password'] == "afriyan") {
        // Sukses
        $_SESSION['login'] = true;
        $_SESSION['username'] = $_POST['username'];
        header("location: /session/member.php");
        exit();
    } else {
        $error = "Login gagal";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>

<body>

    <?php if ($error != "") : ?>
        <h2 style="color: red;"><?= $error ?></h2>
    <?php endif; ?>

    <form action="/session/login.php" method="post">
        <label for="">Username
            <input type="text" name="username" id="">
        </label><br>

        <label for="">Password
            <input type="password" name="password" id="">
        </label><br>

        <label for="">
            <button type="submit">Login</button>
        </label><br>
    </form>
</body>

</html>