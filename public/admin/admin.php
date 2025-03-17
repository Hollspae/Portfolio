<?php
session_start();
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


    <div class="container">
        <div class="container-data">
            <form action="Form-admin.php" method="post">
                <h1>Admin Panel</h1>
                <input type="text" name="login" id="login" placeholder="Login" required>
                    <?php if (!empty ($Error['login'])){
                        echo $Error['login'];
                    }; ?>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <?php if (!empty ($Error['password'])){
                        echo $Error['password'];
                    }; ?>
                <button type="submit" name="LoginSubmit" id="LoginSubmit">Log in</button>
            </form>


        </div>

    </div>




</body>

</html>