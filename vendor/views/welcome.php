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
        h2, label {
            color: #e1e6ed;
        }
        form{
            margin: 200px 500px;
        }
        .btnn> a{
            text-decoration: none;
            color: #ffffff;
        }
        .btnn{
            padding-top: 5px;
            background-color: #1ea832;
            width: 70px;
            height: 25px;
            text-align: center;
            border-radius: 10px;
            margin: 200px auto ;
            position: absolute;
            right: 20px;
            top: -170px;
        }
    </style>
</head>
    <body>
        <div class="btnn" l>
            <a href="/admin.php" >Админ</a>
        </div>
        <form method="get" action="/process.php">
            <h2>Аутентификация</h2>
            <label>ID:
                <input type="number" name="userID">
            </label>
            <input type="submit" value="Войти">
        </form>
    </body>
</html>
