<?php
include_once 'functions.php';
if (isset($_GET['action'])){
    $action = $_GET['action'];
    $action();
}else{
    exit('такой страници не существует');
}
