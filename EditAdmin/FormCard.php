<?php
session_start();
include "../connect.php";

function DeleteCard ($id, $BD) {
    $stmt = $BD->prepare('DELETE FROM Работа WHERE id_работы = :id');
    $stmt->execute([':id' => $id]);
}

if (!empty($_POST['SubmitDelete_digital'])) {

    $id = $_POST['SubmitDelete_digital'];
    DeleteCard ($id, $BD);
    header('Location: Didgital.php');
}

if (!empty($_POST['SubmitDelete_tradiditon'])) {

    $id = $_POST['SubmitDelete_tradiditon'];
    DeleteCard ($id, $BD);
    header('Location: Tradition.php');
}


if (isset($_POST['SubmitAdd__digital'])) {

    $pattern__jpg = "/jpg/";
    $pattern__png = "/png/";

    $category = '1'; //Диджитал
    $id_year = '';
    $Error = '';
    $successfully__url = 0;



    if (!empty($_POST['Photo__link']) && !empty($_POST['Photo__year'])) {

        if (preg_match($pattern__jpg, $_POST['Photo__link']) || preg_match($pattern__png, $_POST['Photo__link'])) {
            $successfully__url++;
        } else {
            $_SESSION['error__preg_match'] = 'Ошибка в ссылке!';
            header('Location: Didgital.php');
        }


        $sql = 'SELECT * FROM Год';
        $query = $BD->query($sql);
        $data = $query->fetchALL(PDO::FETCH_ASSOC);

        foreach ($data as $key => $year) {
            if ($_POST['Photo__year'] == $year['Год']) {
                $id_year = $year['id_года'];
                break;
            }
        }


        if (!empty($id_year)) {
            $successfully__url++;
       
        } else {
            $_SESSION['error__year'] = 'Сначала добавьте год!';
            header('Location: Didgital.php');
        }
     

        if ($successfully__url == 2) {
            $_SESSION['error__preg_match'] = '';
            $_SESSION['error__year'] = '';

            $sql = "INSERT INTO Работа(id_года, id_категории, Фото) VALUES (?, ?, ?)";
            $stmt= $BD->prepare($sql);
            $stmt->execute([$id_year, $category, $_POST['Photo__link']]);

            header('Location: Didgital.php');
        }
    }
}



if (isset($_POST['SubmitAdd__tradiditon'])) {

    $pattern__jpg = "/jpg/";
    $pattern__png = "/png/";

    $category = '2'; //Традишион
    $id_year = '';
    $Error = '';
    $successfully__url = 0;



    if (!empty($_POST['Photo__link__tradition']) && !empty($_POST['Photo__year__tradition'])) {

        if (preg_match($pattern__jpg, $_POST['Photo__link__tradition']) || preg_match($pattern__png, $_POST['Photo__link__tradition'])) {
            $successfully__url++;
        } else {
            $_SESSION['error__preg_match'] = 'Ошибка в ссылке!';
            header('Location: Tradition.php');
        }


        $sql = 'SELECT * FROM Год';
        $query = $BD->query($sql);
        $data = $query->fetchALL(PDO::FETCH_ASSOC);

        foreach ($data as $key => $year) {
            if ($_POST['Photo__year__tradition'] == $year['Год']) {
                $id_year = $year['id_года'];
                break;
            }
        }


        if (!empty($id_year)) {
            $successfully__url++;
       
        } else {
            $_SESSION['error__year'] = 'Сначала добавьте год!';
            header('Location: Tradition.php');
        }
     

        if ($successfully__url == 2) {
            $_SESSION['error__preg_match'] = '';
            $_SESSION['error__year'] = '';

            $sql = "INSERT INTO Работа(id_года, id_категории, Фото) VALUES (?, ?, ?)";
            $stmt= $BD->prepare($sql);
            $stmt->execute([$id_year, $category, $_POST['Photo__link__tradition']]);

            header('Location: Tradition.php');
        }
    }
}



?>