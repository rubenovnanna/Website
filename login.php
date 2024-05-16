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
      <div class="title">Вход</div>      
          <form method='POST' action='login.php'>
          <div class="forma">
            <div class="row form__reg"><input class="input" type="text" name="username" placeholder="Login"></div>
            <div class="row form__reg"><input class="input" type="password" name="pass" placeholder="Password"></div>
            <button type="submit" class="myButton" name="submit"> Next </button>
          </form>     
       
</body>
</html>

<?php

require_once('bd.php');

$link = mysqli_connect('127.0.0.1', 'root', '6118', 'first');
if (isset($_COOKIE['User'])) {
  header("Location: profile.php");
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $pass = $_POST['pass'];

    if (!$username || !$pass) die ('Пожалуйста введите все значения!');

    $sql = "SELECT * FROM users WHERE username='$username' AND pass='$pass'";

    $result = mysqli_query($link, $sql);

    if (mysqli_num_rows($result) == 1) {
        setcookie("User", $username, time()+7200);
        header('Location: profile.php');
      } else {
        echo "не правильное имя или пароль";
      }
    }     
?>
