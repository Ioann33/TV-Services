<?php
include_once 'vendor'.DIRECTORY_SEPARATOR.'functions.php';
session_start();
if (!empty($_SESSION['userInfo'])){
    $data = $_SESSION['userInfo'];
}
render('info', ['userInfo'=>$data]);