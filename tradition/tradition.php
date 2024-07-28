<?php
include "../connect.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art Porfolio</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>


    <div class="header">
        <li>
            <a href="../index/index.php">HOME</a>
            <a href="../digital/digital.php">DIGITAL</a>
            <a href="tradition.php">TRADITION</a>
            <a href="../author/author.php">AUTHOR</a>
        </li>
    </div>




    <?php
    $sql = "SELECT DISTINCT Год.Год FROM Год
INNER Join Работа ON Работа.id_года  = Год.id_года
INNER JOIN Категория ON Работа.id_категории = Категория.id_категории WHERE Категория.Наименование = 'Традишион' ORDER BY Год.Год DESC";

    $query = $BD->query($sql);
    $array = $query->fetchALL(PDO::FETCH_ASSOC);

    foreach ($array as $year) {

        echo '<div class="content-year"> <h1 class="text-year">' . $year['Год'] . '</h1> <div class="img-content">';

        $sql = "SELECT Работа.id_работы, Год.Год, Работа.Фото FROM Работа 
LEFT JOIN Категория ON Работа.id_категории = Категория.id_категории 
INNER JOIN Год ON Работа.id_года = Год.id_года WHERE Категория.Наименование = 'Традишион' ORDER BY Работа.id_года ASC";
        $query = $BD->query($sql)->fetchALL(PDO::FETCH_ASSOC);

        foreach ($query as $date) {
            if ($date['Год'] == $year['Год']) {
                echo '
                     <img src="' . $date['Фото'] . '" alt="">';
            }
        }
        echo '</div></div></div>';
    }

    ?>









</body>

</html>