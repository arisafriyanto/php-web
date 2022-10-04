<?php

if (isset($_GET['key']) && $_GET['key'] == "rahasia") {
    header('Content-Disposition: attachment; filename="aris.pdf"');
    header('Content-Type: image/pdf'); // jika tidak tau content type nya tidak usah tidak apa"
    readfile(__DIR__ . '/file/aris.pdf');
    exit(); // tambah exit supaya enter" atau kode dibawah tidak ter render





    echo "Success key";
} else {
    echo "Invalid key";
}
