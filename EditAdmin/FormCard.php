<?php
session_start();
include "../connect.php";


print_r($_POST);

if (!empty($_POST['SubmitDelete'])) {
    $id = $_POST['SubmitDelete'];
    $stmt = $BD->prepare('DELETE FROM Работа WHERE id_работы = :id');
    $stmt->execute([':id' => $id]);

    header('Location: ../index/index.php');
}


if (isset($_POST['SubmitAdd']) ) {

    if (strpos($_POST['Photo__link'], "imgur") = true || strpos($_POST['Photo__link'], "postimages") == true || strpos($_POST['Photo__link'], "radikal") == true) {
        echo "imgur here";
    } else {
        echo "nety";
    }

echo "asd";
}

?>