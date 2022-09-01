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
        ul{
            list-style: none;
        }
        ul>li{
            color: #e1e6ed;
            font-size: 1.3rem;
        }
        .links{
            display: flex;
            justify-content: space-around;
        }
        .btnl{
            border-radius: 10px;
            background-color: #1ea832;
            text-decoration: none;
            min-height: 30px;
            padding: 10px;
            color: #ffffff;
            font-size: 1.5rem;
            margin: 10px;
        }
        .add{
            padding: 3px;
        }
        .statusDiv{
            padding: 5px;
            background-color: #28beed;
            width: 300px;
            margin: 5px;
            min-height: 100px;
        }
        .upd{
            background-color: #c74fed;
        }
    </style>
</head>
    <body>
        <h2 style="color: #ffffff"> Список авторизованных MAC/UUID устройств</h2>
        <?php if (isset($message)):?>
            <h2 style="color: #c74fed"><?=$message?></h2>
        <?php endif;?>
        <?php if (isset($allUsersDevice)):?>

        <ul>
            <?php foreach ($allUsersDevice as $el => $value):?>
                <h2 style="color: #ffffff">Устройство: <?=++$el?></h2>
                <?php foreach ($value as $key=>$item):?>
                    <li style="color: #33ed97"><?=$key?> : <?=$item?></li>
                <?php endforeach;?>
            <?php endforeach;?>
        </ul>
        <?php endif;?>
        <div class="links">
            <a href="/allUsers.php" class="btnl">Назад</a>
        </div>
    </body>
</html>
