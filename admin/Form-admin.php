<?php 
include "../connect.php";

if(!empty($_POST["login"])){
    $DataLogin = $_POST['login'];
}
if(isset($_POST["password"])){
    $DataPassword = $_POST['password'];
}


$Error['login'] = [];

if(empty($DataLogin)){
    $Error['login'] = 'Введите логин';
}
if(empty($DataPassword)){
    $Error['password'] = 'Введите пароль';
}

