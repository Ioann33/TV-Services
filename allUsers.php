<?php
include_once 'vendor'.DIRECTORY_SEPARATOR.'functions.php';
session_start();
if (!empty($_SESSION['allUsers'])){
    $allUsers = $_SESSION['allUsers'];
}
render('allUsers');