<?php

/*
    HTTP Redirect
    Utk melakukan redirect, kita hanya butuh menggunakan http response dari server, yaitu response 
    header location: berisi lokasi redirectnya. contoh di ikuti nama domain atau halaman web lainnya
    contoh
    header(location: index.php);
*/

header("location: /5-global-variabel-server.php", true, 303);
header("Application: php-web");
exit(); // pastikan tidak ada content yang dikirim ke browsernya
