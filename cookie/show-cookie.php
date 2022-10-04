<?php

$learnCookie = htmlspecialchars($_COOKIE['X-LEARN-COOKIE']);

echo $learnCookie;

/*
    Untuk membuktikan bahwa cookie selalu dibawa setelah kita set lihat di inspect->network->file sekarang->lihat HTTP Request ada cookie

    jadi setiap kita set cookie request selanjutnya walaupun kita tidak setcookie lagi dia akan disimpan dibrowser dan dikirim sama request



    HATI - HATI dengan cookie

    jangan terlalu banyak menyimpan data di cookie, kan cookie disimpan dibrowser, jadi jika data cookie itu banyak dia akan selalu dikirim + request jadi aplikasinya akan lambat, berat loadnya lama karena akan load dulu semua cookie yang sudah kita set + requestnya.

    Cookie bisa diubah oleh user jadi jangan mudah percaya sama cookie, jangan menyimpan informasi hak akses dicookie
    cara ubahnya kita ke inspect network dan kita bisa ganti value dari cookienya 

    Cookie digunakan untuk data yang tidak terlalu sensitif, jangan kasih username/password dicookie
*/