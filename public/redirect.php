<?php

if(isset($_POST['password'])) {
    $password = $_POST['password'];
    switch($_GET['redirect']) {
        case 'google':
            $password_check = "pw123";
            $redirect = "https://www.google.com/";
            break;
        case 'lukashueller':
            $password_check = "pw456";
            $redirect = "https://lukashueller.de/";
            break;
        case 'thunkable1':
            $password_check = "todoapp";
            $redirect = "https://x.thunkable.com/copy/76a4644a4a7e07a6d92e853837ae190c";
            break;
    }

    if(isset($password_check) && $password_check == $password) {
        header('Location: ' . $redirect);
        die();
    }

    http_response_code(403);
    die('Wrong password');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weiterleitung mit Passwort</title>
</head>
<body>
    <form action="" method="POST">
        <label for="password">Enter password: </label>
        <input type="password" name="password">
    </form>
</body>
</html>