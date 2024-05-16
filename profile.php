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
        <div class="nav">
            <a class="nav-item" href="#">Главная</a>
            <a class="nav-item" href="#">вы уверены что за вами никто не наблюдает?</a>
            <a class="nav-item" href="#">Новости</a>
            <a class="nav-item" href="#">обернитесь</a>
            <div class="col-1 nav_logo"> </div>

        </div>

        <div class="main">
            <div class="title1">В последнее время вам кажется что вы не одни и за вами наблюдают?</div> </div>
            <div class="subtitle">Мы c радостью поможем вам, <?php echo $_COOKIE['User']; ?>!</div>
            <div class="forma"> 
                <form class="form_align" method="POST" action="profile.php" enctype="multipart/form-data" name="upload">
                    <input type="text" class="input1" name="title" placeholder="Заголовок истории">
            </div>
            <div class="forma1">
                    <textarea name="text" class="input1" placeholder="Рассказывай что тебя беспокоит..."></textarea>
            <div class="forma1">
                    <input type="file" name="file" /><br>
            <div class="button">
                    <button type="submit" class="myButton1" name="submit">Опубликовать!</button>
                </form>
            <div class="button">
                <button id="myButton"> Нажми на меня, мы уже рядом</button>
                <p id="demo"></p>
            </div>
    </div>
<script type="text/javascript" src="js/button.js"></script>
</body>
</html>

<?php

require_once('bd.php');
$link = mysqli_connect('127.0.0.1', 'root', '6118', 'first');
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $main_text = $_POST['text'];
    if (!$title || !$main_text) die ("Заполните все поля");
    $sql = "INSERT INTO posts (title, main_text) VALUES ('$title', '$main_text')";
    if (!mysqli_query($link, $sql)) die ("Не удалось добавить пост");

}
if(!empty($_FILES["file"]))
    {
        if (((@$_FILES["file"]["type"] == "image/gif") || (@$_FILES["file"]["type"] == "image/jpeg")
        || (@$_FILES["file"]["type"] == "image/jpg") || (@$_FILES["file"]["type"] == "image/pjpeg")
        || (@$_FILES["file"]["type"] == "image/x-png") || (@$_FILES["file"]["type"] == "image/png"))
        && (@$_FILES["file"]["size"] < 102400))
        {
            move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
            echo "Load in:  " . "upload/" . $_FILES["file"]["name"];
        }
        else
        {
            echo "upload failed!";
        }
    }
?>