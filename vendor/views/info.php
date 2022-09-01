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
        }
    </style>
</head>
    <body>
        <?php if (isset($userInfo)):?>
        <ul>
            <?php foreach ($userInfo as $key=>$value):?>
                <li><?=$key?> : <?=$value?></li>
            <?php endforeach;?>
        </ul>
        <?php endif;?>
        <div class="links">
            <a href="/process.php" class="btnl">Назад</a>
        </div>
    </body>
</html>
