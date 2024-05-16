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
        <div class="main">
        <div class="title"> Страница постов!</div>
    <?php
    if (!isset($_COOKIE['User'])) {
    ?>
         <div class="subtitle1">
            <a href="/registration.php">Зарегистрируйтесь</a> или <a href="/login.php">войдите</a>, чтобы просматривать контент!
        </div>
    <?php
    } else {
        // подключение к БД
        $link = mysqli_connect('127.0.0.1', 'root', '6118', 'first');
        $sql = "SELECT * FROM posts";
        $res = mysqli_query($link, $sql);
        if (mysqli_num_rows($res) >  0) {
            while ($post = mysqli_fetch_array($res)) {
                 echo "<a href='/posts.php?id=" . $post["id"] . "'>" . $post['title'] . "</a><br>";
            } 
           } else {
                echo "Записей пока нет";
           }

        
    }
    ?>
            
</body>
</html>