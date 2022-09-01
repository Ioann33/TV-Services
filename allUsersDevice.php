<?php
include_once 'vendor'.DIRECTORY_SEPARATOR.'functions.php';
session_start();
if (!empty($_SESSION['allUsersDevice'])){
    $allUsersDevice = $_SESSION['allUsersDevice'];
    render('allUsersDevice', ['allUsersDevice'=>$allUsersDevice]);
}else{
    render('allUsersDevice', ['message'=>'У этого пользователя нет подключенных устройств']);
}
