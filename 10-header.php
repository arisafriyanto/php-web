<?php

/*
    HEADER

    Dalam HTTP Request dan HTTP Response itu terdapat data yang bernama header.
    Header adalah tempat menyimpan infomasi yang disimpan diluar URL, METHOD dan BODY.

    Di PHP, bisa mengirim header dari request CLient ke Server dan dari Response server ke client
*/

/*
    Header request CLient ke Server

    Menerima Header Request

    Jadi, header yg dikirim oleh Client akan otomatis diterima dan masuk ke global variabel $_SERVER di php
    Namun, key untuk headernya akan dikonversi otomatis jadi UPPERCASE dan karakter seperti spasi dan - akan dijadikan _ (underscore).
    Dan untuk membedakan request header dan lainnya. Khusus utk request Header akan ditambahkan prefix HTTP didepannya.
    Contoh
    Header  Content-Type        = HTTP_CONTENT_TYPE
    Header  Accept-Language    = HTTP_ACCEPT_LANGUAGE



    Menangkap Header

    Untuk menangkap header yang dikirim oleh request client kita gunakan :
    $_SERVER['nama headernya']

    contoh
    $_SERVER['HTTP_CONTENT_TYPE]
    $_SERVER['HTTP_CLIENT_NAME]
*/


/*  Menangkap Header yang dikirim oleh request Client (HTTP_REQUEST) */

/*
    Ini hanya akan keluar Hello, karena secara default browser kita tidak akan mengirimkan client-name, ini menangkap client-name dari browser dan tidak ada sehingga kita hanya mendapatkan Hello

    Cara supaya HTTP REQUEST mengirimkan client-name ke server kita bisa pake postman utk contoh

    Kirim HTTP REQUEST dengan postman, dibagian header isi:
    key = client-name
    value = berisi value yang ingin kita kirim

    maka dipostman akan muncul Hello dan value dari key client-name


    Dari browser sebenernya jarang mengirimkan header tambahan, biasanya kalo kita query php menggunakan ajax, itu baru digunakan header tambahan

*/

// $client  = $_SERVER['HTTP_CLIENT_NAME'];
// echo "Hello $client <br/>";


/*
    Menambah Header Response


    Kadang kita perlu menambahkan informasi tambahan di HTTP REPSONSE, contoh kaya versi aplikasi kita dll.

    Kita bisa menambahkan header di php dengan menggunakan function header(key: value)

    Nah perlu diingat spesifikasi HTTP, bahwa posisi header ini ada diatas HTTP BODY, sehingga kita harus buat header ada di atas content atau HTTP BODY. 
    Makanya jika kita buat logic, logicnya taruh diatas dan html atau content dibawahnya


    Kita coba jalankan di postman, maka dibagian header akan ada header yang kita kirim
    Application = php-web
    Author = Aris Afriyanto
*/

//! Menambah header response

header('Application: Learn PHP Web');
header('Author: Aris Afriyanto');

$client = $_SERVER['HTTP_CLIENT'];

echo "Hello $client";
