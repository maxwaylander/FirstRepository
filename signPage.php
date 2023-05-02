<?php
$error = null;
$username = null;
$password = null;
$userArray = ["Max" => md5("123")];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['login'];
    $password = $_POST['psw'];
}

if (user_exists($username, $password, $userArray)) {
    session_start();
    $_SESSION['login'] = $username;
    $_SESSION['status'] = "LOGGED";
    header('Location: homwrk.php');
    exit;
}
function user_exists($username, $password, $userArray){
    if (array_key_exists($username,$userArray) && $userArray[$username] == md5($password)){
        return true;
    }else{
        $_SESSION['error'] = 'Пользователь не найден';
        return false;
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация на сайте</title>
</head>
<body>
<?php

if ($_SESSION['error'] != null){
    echo  $_SESSION['error'];
}
?>
<form method="post" action="signPage.php">
<hr>
<label for="email"><b>Введите логин/email:</b></label>
<input type="text" placeholder="Введите логин/email" name="login" required>

<label for="psw"><b>Введите пароль:</b></label>
<input type="password" placeholder="Введите пароль" name="psw" required>

<button type="submit" class="signInbtn">Войти</button>

<hr>
</form>
</body>
</html>
</body>
</html>
