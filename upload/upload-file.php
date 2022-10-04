<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $file_name      = $_FILES['upload_file']['name'];
    $file_type      = $_FILES['upload_file']['type'];
    $file_size      = $_FILES['upload_file']['size'];
    $file_tmp_name  = $_FILES['upload_file']['tmp_name'];
    $file_error     = $_FILES['upload_file']['error'];


    /*
        Dan kita tahu lokasi temporary-nya dan ketika kita cek filenya tidak ada, kenapa? karena php jika upload sukses dia akan langsung hapus file temporary-nya, nah makanya kalo kita mau dapetin filenya, kita bisa akses filenya, kita langsung pindahkan filenya sebelum requestnya selesai

        nah untuk melakukan manipulasi file dan folder di php banyak functionnya

        kita bisa gunakan function move_uploaded_file() ini digunakan untuk memindahkan file dari temporary ke folder yang kita mau

        move_uploaded_file(string $from, string $to) : bool
    */

    move_uploaded_file($file_tmp_name, __DIR__ . "/file/" . $file_name);


    // tidak disarankan pake nama direktory yang seperti ini karena bisa saja ketika kita hosting direktori berubah disarankan pake __DIR__ karena dia constant yang bisa mendeteksi file ini ada dimana akan baca direktory saat ini
    //! tidak disarankan
    // move_uploaded_file($file_tmp_name, '/C://file/' . $file_name);
    // move_uploaded_file($file_tmp_name, '/file/user/dll' . $file_name);

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>

<body>

    <?php if ($_SERVER['REQUEST_METHOD'] == "POST") : ?>
        <h1>Upload File</h1>
        <table>
            <tr>
                <td>File Name</td>
                <td><?= $file_name ?></td>
            </tr>
            <tr>
                <td>File Type</td>
                <td><?= $file_type ?></td>
            </tr>
            <tr>
                <td>File Size</td>
                <td><?= $file_size ?></td>
            </tr>
            <tr>
                <td>File Tmp Name</td>
                <td><?= $file_tmp_name ?></td>
            </tr>
            <tr>
                <td>File Error</td>
                <td><?= $file_error ?></td>
            </tr>
        </table>
    <?php endif; ?>

    <h1>Form Upload</h1>

    <form action="upload-file.php" method="post" enctype="multipart/form-data">
        <label for="">File :
            <input type="file" name="upload_file" id="">
        </label>

        <label for="">
            <button type="submit">Upload</button>
        </label>
    </form>
</body>

</html>