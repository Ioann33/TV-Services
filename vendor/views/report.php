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
            background-color: #5bedac;
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
        <h2 style="color: #ffffff">Отчет за прошлый месяц</h2>
        <div class="links">
            <a href="/admin.php" class="btnl">Назад</a>
        </div>
        <?php if (isset($report)):?>
            <table>
                <thead>
                    <tr>
                        <th>№</th>
                        <th>fio</th>
                        <th>device_count</th>
                        <th>date_last</th>
                        <th>date_contract</th>
                        <th>date_block</th>
                        <th>tarif_id</th>
                        <th>is_blocked</th>
                        <th>spis_all</th>
                        <th>spis_provider</th>
                    </tr>
                </thead>
                <tbody>
                <?php $count = 0?>
                    <?php foreach ($report as $key=>$value):?>

                            <tr>
                                <td><?=++$count?></td>
                                <td><?=$value['fio']?></td>
                                <td><?=$value['device_count']?></td>
                                <td><?=$value['date_last']?></td>
                                <td><?=$value['date_contract']?></td>
                                <td><?=$value['date_block']?></td>
                                <td><?=$value['tarif_id']?></td>
                                <td><?=$value['is_blocked']?></td>
                                <td><?=$value['spis_all']?></td>
                                <td><?=$value['spis_provider']?></td>
                            </tr>

                    <?php endforeach;?>
                </tbody>
            </table>
        <?php endif;?>
    </body>
</html>
