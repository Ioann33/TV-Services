<?php
//include_once '../functions.php';
$allUsers = allUsers();
?>
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
        .li{
            margin-bottom: 10px;
            margin-top: 10px;
        }
        table{
            border: 1px solid #000000;
            border-collapse: collapse;
        }
        tr, th, td {
            border: 1px solid #000000;
        }
        th{
            background-color: #a4c5ed;
        }
        td{
            background-color: #edbfe9;
        }
    </style>
</head>
    <body>
        <h2 style="color: #ffffff">Все пользователи</h2>
        <div class="links">
            <a href="/admin.php" class="btnl">Назад</a>
        </div>
        <?php if (isset($allUsers)):?>
            <table>
                <thead>
                    <tr>
                        <th>user ID</th>
                        <th>subscrid</th>
                        <th>subscrprice</th>
                        <th>subscrstatusid</th>
                        <th>contracttrinity</th>
                        <th>devicescount</th>
                        <th>contractdate</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($allUsers as $key=>$value):?>
                    <tr>
                        <td><?=$key?></td>
                        <?php foreach ($value as $val=>$item):?>
                            <td><?=$item?></td>
                        <?php endforeach;?>
                        <td>

                                <a href="/vendor/route.php?action=serviceSwitch&userID=<?=$key?>&operation=suspend" class="btnl add" style="background-color: #ede84f; color: #ed000f ">Приостановить</a>
                                <a href="/vendor/route.php?action=serviceSwitch&userID=<?=$key?>&operation=resume" class="btnl add">Продлить</a>
                                <a href="/vendor/route.php?action=updateUser&userID=<?=$key?>" class="btnl add upd">Редактировать</a>

                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        <?php endif;?>
    </body>
</html>
