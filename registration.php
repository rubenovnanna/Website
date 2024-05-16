<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Mikhailova A.R.</title>
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
<div class="header"> 
        <div class="title">Регистрация</div>
            <form method='POST' action='registration.php'>
            <div class="forma">
                <div class="row form__reg"><input class="input" type="email" name="email" placeholder="Email"></div>
                <div class="row form__reg"><input class="input" type="text" name="login" placeholder="Login"></div>
                <div class="row form__reg"><input class="input" type="password" name="password" placeholder="Password"></div>
                <button type="submit" class="myButton" name="submit"> Next </button>
            </form>
</body>
</html>

<?php

require_once('bd.php');


$link = mysqli_connect('127.0.0.1', 'root', '6118', 'first');
if (isset($_COOKIE['User'])) {
    header("Location: login.php");
}
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $pass = $_POST['pass'];

    if (!$email || !$username || !$pass) die ('Пожалуйста введите все значения!');

    $sql = "INSERT INTO users (email, username, pass) VALUES ('$email', '$username', '$pass')";

    if(!mysqli_query($link, $sql)) {
        echo "Не удалось добавить пользователя";
      }
  }
    
?>