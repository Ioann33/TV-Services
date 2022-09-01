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
        h3, label {
            color: #e1e6ed;

        }
        form{
            margin: 200px 500px;


        }
        label{
            display: flex;
            justify-content: space-between;
            margin: 5px;;
        }

    </style>
</head>
    <body>
    <?php if (isset($user)):?>
        <form method="post" action="/vendor/route.php?action=saveUser">
            <h3>Редактирование пользователя</h3>
            <input type="hidden" name="id" value="<?=$user['contractott']?>">
            <label>Имя
                <input type="text" name="name" value="<?=$user['name']?>">
            </label>
            <label>Фамилия
                <input type="text" name="lastName" value="<?=$user['lastname']?>">
            </label>
            <label>Отчество
                <input type="text" name="middlename" value="<?=$user['middlename']?>">
            </label>
            <label>Адрес
                <input type="text" name="address" value="<?=$user['address']?>">
            </label>
            <input type="submit" value="Сохранить">
        </form>
    <?php endif;?>
    </body>
</html>
