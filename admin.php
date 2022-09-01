<?php
include_once 'vendor'.DIRECTORY_SEPARATOR.'functions.php';

if (!empty($_SESSION['message'])){
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
}
if (!empty($message)){
    return render('admin', ['message'=>$message]);
}
render('admin');


