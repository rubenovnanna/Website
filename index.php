<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Mikhailova A.R.</title>
    <link rel="stylesheet" href="st.css">
    
</head>


<body>
<div class="header"> 
            <div class="main">
            <div class="title">НЕОПОЗНАНННЫЙ ОБЪЕКТ срочно авторизируйтесь!</div>
        <?php
        if (!isset($_COOKIE['User'])) {
            ?>
            <div class="subtitle1">
                <a href="/registration.php">Зарегистрируйтесь</a> или <a href="/login.php">войдите</a>, чтобы просматривать контент!
            

            <?php
            } else {
                // подключение к БД
            }
            ?>
        </div>
    </div>
</body>
</html>