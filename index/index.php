<?php
session_start();

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
    <?php

    ?>
    <div class="container">
        <?php
        if (!empty($_SESSION['admin']) && $_SESSION['admin'] == true) {
            echo '<a href="../admin/Logaut.php" class="title">HOLLSPAE</a>';
        } else {
            echo '<a href="../admin/admin.php" class="title">HOLLSPAE</a>';
        };
        ?>


    </div>

    <div class="header">
        <li>
            <a href="index.php">HOME</a>
            <?php
                if (!empty($_SESSION['admin']) && $_SESSION['admin'] == true) {
                    echo '<a href="../EditAdmin/Didgital.php">DIGITAL</a>';
                } else {
                    echo '<a href="../digital/digital.php">DIGITAL</a>';
                } ?>
                <?php
                if (!empty($_SESSION['admin']) && $_SESSION['admin'] == true) {
                    echo '<a href="../EditAdmin/Tradition.php">TRADITION</a>';
                } else {
                    echo '<a href="../tradition/tradition.php">TRADITION</a>';
                } 
            ?>

            <a href="../author/author.php">AUTHOR</a>
        </li>
    </div>

    <div class="IndexIMG">
        <img src="img/cat.jpg" alt="">
    </div>


</body>

</html>

