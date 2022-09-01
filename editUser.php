<?php
include_once 'vendor'.DIRECTORY_SEPARATOR.'functions.php';
session_start();
if (!empty($_SESSION['user'])){
    $user = $_SESSION['user'];
}
render('editUser', ['user'=>$user]);