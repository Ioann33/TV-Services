<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            background-color: #0F1C26;
        }
        .btnl{
            border-radius: 10px;
            background-color: #1ea832;
            text-decoration: none;
            min-height: 30px;
            padding: 10px;
            color: #ffffff;
            font-size: 1.5rem;
        }
        .links{
            display: flex;
            justify-content: space-around;
            margin-bottom: 20px;
            margin-top: 50px;
        }
        .btnc{
            padding-top: 10px;
            padding-bottom: 10px;
            background-color: #1571ff;
            color: #0F1C26;
            width: 200px;
            min-height: 70px;
            text-align: center;
            border-radius: 10px;
            margin: 100px auto;
        }
    </style>
</head>
<body>
<h2 style="color: #ffffff">Админ панель</h2>
<?php if (isset($message)):?>
    <div class="btnc">
        <h2><?=$message?></h2>
    </div>
<?php endif;?>
<div class="links">
    <a href="/vendor/route.php?action=getReport" class="btnl">Отчет за прошлый месяц</a>
    <a href="/vendor/route.php?action=allUsers" class="btnl">Все пользователи</a>
    <a href="/index.php" class="btnl">Выйти</a>
</div>
</body>
</html>
