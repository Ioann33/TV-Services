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
        .btnc{
            padding-top: 5px;
            background-color: #1571ff;
            color: #0F1C26;
            width: 200px;
            min-height: 70px;
            text-align: center;
            border-radius: 10px;
            margin: 100px auto;
        }
        .btnc> a{
            text-decoration: none;
            color: #ffffff;

            height: 50px;
        }
        .btnc> a > h2{
            border-radius: 10px;
            background-color: #1ea832;
            height: 50px;
            padding-top: 10px;
        }
        .success-div{
            margin: 80px auto 50px;
            padding-top: 15px;
            padding-bottom: 15px;
            background-color: #1571ff;
            border-radius: 10px;
            width: 400px;
            min-height: 100px;
            text-align: center;
        }
        .success-div >h3{
            color: #ffffff;
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
        }
        .btnn> a{
            text-decoration: none;
            color: #ffffff;
        }
        .btnn{
            padding-top: 5px;
            background-color: #1ea832;
            width: 170px;
            height: 70px;
            text-align: center;
            border-radius: 10px;
            margin: 200px auto ;
        }
    </style>
</head>
    <body>

    <?php if (isset($devAuthMess)):?>
        <div class="success-div"><h3><?=$devAuthMess?></h3></div>
    <?php endif;?>

        <?php if (isset($message)):?>
            <div class="btnc">
                <h2>У вас подключенный тариф: <?=$message?></h2>
                <a href="/main.php"><h2>Хотите сменить ?</h2></a>
            </div>
        <?php elseif (isset($data['contracttrinity'])):?>
            <div class="success-div"><h3>Тафри: <?=$subscrid?> успешно подключен. Номер контракта: <?=$data['contracttrinity']?></h3></div>
        <?php else:?>
            <div class="btnn">
                <a href="/main.php"><h2>Хочу IPTV</h2></a>
            </div>
        <?php endif;?>
    <div class="links">
        <a href="/vendor/route.php?action=getInfo" class="btnl">Информация</a>
        <a href="/vendor/views/plugInDeviceCode.php" class="btnl">Подключить устройство</a>
        <a href="/index.php" class="btnl">Выйти</a>
    </div>
    </body>
</html>
