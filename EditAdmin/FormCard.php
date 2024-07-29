<?php
session_start();
include "../connect.php";




if (!empty($_POST['SubmitDelete'])) {
    $id = $_POST['SubmitDelete'];
    $stmt = $BD->prepare('DELETE FROM Работа WHERE id_работы = :id');
    $stmt->execute([':id' => $id]);

    header('Location: ../index/index.php');
}

if (!empty($_POST['SubmitAdd'])) {
    


}

?>

