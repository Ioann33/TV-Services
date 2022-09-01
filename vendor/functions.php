<?php
include_once 'config.php';
session_start();
function connectDB(){

    return $db = new mysqli('localhost', 'root','', 'billing');

}
//########################### users function

function deviceAuthCode(){
    $requestid = mt_rand(45648, 98545);
    $partnerid = PARTNER_ID;
    $localid = $_SESSION['userID'];
    $code = $_POST['code'];
    $note = $_POST['note'];
    $salt = SALT;


    $hash = md5($requestid.$partnerid.$localid.$code.$salt);


    $url = "http://partners.trinity-tv.net/partners/user/autorizebycode?requestid={$requestid}&partnerid={$partnerid}&localid={$localid}&code={$code}&note={$note}&hash={$hash}";

    $data = sendGetRequest($url);

    if (isset($data['uuid'])){
        $_SESSION['devAuthMess'] ="Устройство успешно подключено. Примечание: {$data['uuid']}";
    }else{
        $_SESSION['devAuthMess'] = "Ошибка активации. Примечание: {$data['result']}";
    }

    header('Location: http://services/process.php');
}
function sendGetRequest($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    $response = curl_exec($ch);
    $data = json_decode($response, true);
    curl_close($ch);
    return $data;
}
function getUser($userId){
    $db = connectDB();
    $sql = "SELECT * FROM `users` WHERE id = {$userId};";
    $result = $db->query($sql);
    return $user = $result->fetch_all(MYSQLI_ASSOC);
}

function getPackage($code){
    $db = connectDB();
    $sql = "SELECT * FROM `price_iptv` WHERE code = {$code};";

    $result = $db->query($sql);

    if (!$result){
        exit($db->error);
    }
    return $packages = $result->fetch_all(MYSQLI_ASSOC);
}

function makePay($userId, $size_pay, $description, $code){
    $db = connectDB();
    $data = date('Y-m-d H:i:s');
    $sql = "INSERT INTO `pay` (user_id ,size_pay ,data , discription, code) values ('{$userId}','{$size_pay}','{$data}','{$description}', '{$code}');";
    return $db->query($sql);
}

function getInfo($id = null){

    $requestid = mt_rand(45648, 98545);
    $partnerid = PARTNER_ID;
    if ($id){
        $localid = $id;
    }elseif ($_GET['userID']){
        $localid = $_GET['userID'];
    }elseif ($_SESSION['userID']){
        $localid = $_SESSION['userID'];
    }

    $salt = SALT;

    $hash = md5($requestid.$partnerid.$localid.$salt);

    $url = "http://partners.trinity-tv.net/partners/user/subscriptioninfo?requestid={$requestid}&partnerid={$partnerid}&localid={$localid}&hash={$hash}";

    $data = sendGetRequest($url);
    if ($id){
        return $data['subscriptions'];
    }
    if (!$_GET['userID']){
        $_SESSION['userInfo'] = $data['subscriptions'];
        header('Location: http://services/info.php');
    }else{
        return $data['subscriptions'];
    }
}
function connectService(){

    $requestid = mt_rand(45648, 98545);
    $subscrid = $_GET['subscrid'];
    $partnerid = PARTNER_ID;
    $localid = $_SESSION['userID'];
    $salt = SALT;
    $package = getPackage($subscrid);

    if (!$package){
        exit('такого тарифа не существует');
    }

    $result = makePay($localid, $package[0]['price'], $package[0]['name'], $package[0]['id']);

    $hash = md5($requestid.$partnerid.$localid.$subscrid.$salt);

    $url = "http://partners.trinity-tv.net/partners/user/create?requestid={$requestid}&partnerid={$partnerid}&localid={$localid}&subscrid={$subscrid}&hash={$hash}";


    $data = sendGetRequest($url);

    $db = connectDB();
    $sql = "UPDATE `users` SET `code_iptv` = '{$subscrid}', `iptv_contract` = '{$data['contracttrinity']}' WHERE `users`.`id` = {$localid};";
    $result = $db->query($sql);


    $_SESSION['data'] = $data;
    $_SESSION['subscrid'] = $package[0]['name'];
    header('Location: http://services/process.php');
}

//############################## admin functions

function serviceSwitch(){

    $requestid = mt_rand(45648, 98545);
    $partnerid = PARTNER_ID;
    $localid = $_GET['userID'];
    $salt = SALT;
    $operation = $_GET['operation'];
    $hash = md5($requestid.$partnerid.$localid.$operation.$salt);


    $url = "http://partners.trinity-tv.net/partners/user/subscription?requestid={$requestid}&partnerid={$partnerid}&localid={$localid}&operationid={$operation}&hash={$hash}";
    $data = sendGetRequest($url);
    $resMess = "Пользователь: {$localid}\n Операция : {$operation}\n Результат : {$data['result']}";
    $_SESSION['message'] = $resMess;
    header('Location: http://services/admin.php');
}


function allUsers(){

    $requestid = mt_rand(45648, 98545);
    $partnerid = PARTNER_ID;
    $salt = SALT;
    $hash = md5($requestid.$partnerid.$salt);


    $url = "http://partners.trinity-tv.net/partners/user/subscriberlist?requestid={$requestid}&partnerid={$partnerid}&hash={$hash}";
    $data = sendGetRequest($url);
    return $userData = $data['subscribers'];

//    foreach ($userData as $key => $value){
//        $extendInfo = getInfo($key);
//        foreach ($extendInfo as $el => $item){
//            $value[$el] = $item;
//        }
//    }
//    var_dump($userData);
//    exit();
//    $_SESSION['allUsers'] = $data['subscribers'];
//    header('Location: http://services/allUsers.php');
}

//function allUsersDevice(){
//
//    $requestid = mt_rand(45648, 98545);
//    $partnerid = PARTNER_ID;
//    $salt = SALT;
//    $localid = $_GET['userID'];
//    $hash = md5($requestid.$partnerid.$localid.$salt);
//
//
//    $url = "http://partners.trinity-tv.net/partners/user/devicelist?requestid={$requestid}&partnerid={$partnerid}&localid={$localid}&hash={$hash}";
//    $data = sendGetRequest($url);
//    var_dump($data['devices']);
//    $_SESSION['allUsersDevice'] = $data['devices'];
//    header('Location: http://services/allUsersDevice.php');
//}
function updateUser(){
    $user = getInfo();
    $_SESSION['user'] = $user;
    header('Location: http://services/editUser.php');
}

function saveUser(){

    $requestid = mt_rand(45648, 98545);
    $partnerid = PARTNER_ID;
    $salt = SALT;
    $localid = $_POST['id'];
    $firstName = urlencode( $_POST['name']);
    $lastName = urlencode($_POST['lastName']);
    $middlename = urldecode($_POST['middlename']);
    $address = urlencode($_POST['address']);

    $hash = md5($requestid.$partnerid.$localid.$firstName.$lastName.$middlename.$address.$salt);

    $url = "http://partners.trinity-tv.net/partners/user/updateuser?requestid={$requestid}&partnerid={$partnerid}&localid={$localid}&firstname={$firstName}&lastname={$lastName}&middlename={$middlename}&address={$address}&hash={$hash}";
    $data = sendGetRequest($url);

    $_SESSION['message'] = "Статус редактирования: {$data['result']}";
    header('Location: http://services/admin.php');
}

function getReport(){
    $requestid = mt_rand(45648, 98545);
    $partnerid = PARTNER_ID;
    $salt = SALT;

    $hash = md5($requestid.$partnerid.$salt);

    $url = "http://partners.trinity-tv.net/partners/user/listreportupdated?requestid={$requestid}&partnerid={$partnerid}&hash={$hash}";
    $data = sendGetRequest($url);
    $_SESSION['report'] = $data['report'];
    header('Location: http://services/report.php');
}

//function deviceAuth(){
//    $requestid = mt_rand(45648, 98545);
//    $partnerid = PARTNER_ID;
//    $localid = $_POST['userID'];
//    $mac = $_POST['mac'];
//    $uuid = $_POST['uuid'];
//    $salt = SALT;
//
//
//    $hash = md5($requestid.$partnerid.$localid.$mac.$salt);
//
//
//    $url = "http://partners.trinity-tv.net/partners/user/autorizedevice?requestid={$requestid}&partnerid={$partnerid}&localid={$localid}&code={$uuid}&hash={$hash}";
//
//    $data = sendGetRequest($url);
//    var_dump($data);
//    exit();
//
//    if (isset($data['uuid'])){
//        $_SESSION['message'] ="Устройство успешно подключено. Примечание: {$data['uuid']}";
//    }else{
//        $_SESSION['message'] = "Ошибка активации. Примечание: {$data['result']}";
//    }
//
//    header('Location: http://services/admin.php');
//}
function render($page, $params = []){
    extract($params);
        include_once 'vendor'.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR. $page.'.php';
}
