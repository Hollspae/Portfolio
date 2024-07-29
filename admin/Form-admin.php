<?php
session_start();
include "../connect.php";


if (!empty($_POST["login"]) && !empty($_POST["password"])) {
    $DataLogin = $_POST['login'];
    $DataPassword = $_POST['password'];
    $successfully = 0;

    $sql = "SELECT * FROM Пользователь";
    $query = $BD->query($sql)->fetchALL(PDO::FETCH_ASSOC);

    foreach ($query as $key => $value) {

        if ($DataLogin == $value["Логин"]) {
            $successfully = 1;
        }

        if (password_verify($DataPassword, $value['Пароль'])) {
            $successfully++;
        } 


    }

    if ($successfully == 2) {
        $_SESSION['admin'] = true;
    
        header('Location: ../index/index.php');
    } else {
        $_SESSION['admin'] = false;
    
        header('Location: admin.php');
    }
}










