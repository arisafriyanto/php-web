<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Post</title>
</head>

<body>
    <table>
        <tr>
            <td>First Name</td>
            <td><?= htmlspecialchars($_POST['first_name']) ?></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><?= htmlspecialchars($_POST['last_name']) ?></td>
        </tr>
        <tr>
            <td>Age</td>
            <td><?= htmlspecialchars($_POST['age']) ?></td>
        </tr>
    </table>
</body>

</html>