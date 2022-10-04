<?php

/*
    Kita sudah tau Session dan Cookie, Jadi ketika kita buat Session nanti akan dibuat cookie session id, session id ini akan digunakan untuk load file session di server PHP.
    Ketika web browser mengirim cookie berisi session id tersebut, PHP akan mengecek apakah nama file dari value session id ini ada atau tidak, jika ada maka valid dan otomatis akan ngeload isi file session id nya dan dikirim bareng sama requestnya. Dan ini aman karena disimpan dalam file cookienya gthu, jadi jika kita simpan role hak akses admin dll ini aman karena session id disimpan didalam file dan cookie untuk akses file tersebut. jadi tidak secara bulat bulat disimpan dalam coookie gthu. dan walaupun cookienya bisa diedit dia kan random banget nama file di generate php jadi akan susah untuk kita edit cookienya, sehingga aman.

    Kita bisa buktikan dengan cara buat session dan lihat di cookie akan ada session id dan kita cek filenya ada tidak berdasarkan lokasi penyimpanan file session yang ada di php, cek phpinfo();

    jika kita login dan hapus session di browser maka akan logout keluar aplikasi, dan akan membuat session baru, nah file baru ini akan masuk ke file session lagi jadi jika kita buat 1000 session maka akan masuk file 1000 session ini yang buat lambat, dan nanti jika session expired filenya akan dihapus oleh php dia urusan php lah kita gk perlu pusing wkwkwkwkkwk
*/
