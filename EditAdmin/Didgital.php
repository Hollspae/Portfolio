<?php
session_start();
include "../connect.php";

if (!isset($_SESSION["user"])) {
    header("Location");
}
$sql = "SELECT Работа.id_работы, Год.Год, Работа.Фото FROM Работа 
                LEFT JOIN Категория ON Работа.id_категории = Категория.id_категории 
                INNER JOIN Год ON Работа.id_года = Год.id_года WHERE Категория.Наименование = 'Диджитал' 
                ORDER BY Работа.id_года DESC";

$query = $BD->query($sql)->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Didgital</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="header">
        <li>
            <a href="../index/index.php">HOME</a>
            <?php
            if ($_SESSION['admin'] == true) {
                echo '<a href="../EditAdmin/Didgital.php">DIGITAL</a>';
            } else {
                echo '<a href="../digital/digital.php">DIGITAL</a>';
            } ?>
            <?php
            if ($_SESSION['admin'] == true) {
                echo '<a href="../EditAdmin/Tradition.php">TRADITION</a>';
            } else {
                echo '<a href="../tradition/tradition.php">TRADITION</a>';
            } ?>

            <a href="../author/author.php">AUTHOR</a>
        </li>
    </div>
    <div class="container">
        <?php foreach ($query as $row) { ?>

            <li>
                <div class="container-block">

                    <img src="<?php echo $row['Фото'] ?>" alt="">

                    <div class="container-block__title">
                        <span><?php echo $row['Год'] ?></span>

                    </div>
                    <div class="container-block__img">
                        <form action="FormCard.php" method="post">
                            <button type="submit" name="SubmitAdd" id="SubmitAdd" value="<?php echo $row['id_работы'] ?>">
                                <img src="img/add.png" alt="">
                            </button>
                            <button type="submit" name="SubmitDelete" id="SubmitDelete" value="<?php echo $row['id_работы'] ?>">
                                <img src="img/del.png" alt="">
                            </button>
                        </form>
                    </div>


                </div>

            </li>


        <?php } ?>


    </div>

</body>

</html>