<?php
include_once 'vendor'.DIRECTORY_SEPARATOR.'functions.php';
session_start();
if (!empty($_SESSION['report'])){
    $allUsers = $_SESSION['report'];
}
render('report', ['report'=>$allUsers]);