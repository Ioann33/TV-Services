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
<form method="post" action="/vendor/route.php?action=deviceAuthCode">
    <h3>Активация кода с устройства</h3>
    <label>ID
        <input type="number" name="code">
    </label>
    <label>Заметка
        <input type="text" name="note">
    </label>
    <input type="submit" value="Подключить">
</form>
</body>
</html>


