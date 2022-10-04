<?php

// global variable $_SERVER = array yang diberisikan informasi seperti HTTP, lokasi file, path dll.
// var_dump($_SERVER);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$Server</title>
</head>

<body>
    <h1>Variable Global $_SERVER</h1>
    <table border="1" cellspacing="0" cellpadding="0">
        <?php foreach ($_SERVER as $key => $value) : ?>
            <tr>
                <td><?= $key ?></td>
                <td><?= $value ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>