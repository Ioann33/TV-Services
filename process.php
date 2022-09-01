<?php
include_once 'vendor'.DIRECTORY_SEPARATOR.'functions.php';

session_start();
if (isset($_GET['userID'])){
    $userID = $_GET['userID'];
    $_SESSION['userID'] = $userID;
}else{
    $userID = $_SESSION['userID'];
}

$user = getUser($userID);


if (!empty($_SESSION['data'])){
    $data = $_SESSION['data'];
    $subscrid = $_SESSION['subscrid'];
    unset($_SESSION['data']);
    unset($_SESSION['subscrid']);
}
if (!empty($data)){
    render('profile', ['data' => $data, 'subscrid' => $subscrid]);
}






if (isset($user[0]['code_iptv'])){

    $package = getPackage($user[0]['code_iptv']);
}



if (!empty($_SESSION['devAuthMess'])){
    $devAuthMess = $_SESSION['devAuthMess'];
    unset($_SESSION['devAuthMess']);
}

if (!empty($devAuthMess)) {
    render('profile', ['devAuthMess' => $devAuthMess, 'message'=>$package[0]['name']]);
}




if (!isset($package[0]['name'])){
    render('profile');
}else{
    render('profile', ['message'=>$package[0]['name']]);
}