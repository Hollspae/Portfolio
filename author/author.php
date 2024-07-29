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
    <div class="container">
        <a href="../index/index.php" class="title">HOLLSPAE</a>
    </div>

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

    <div class="container-author">
        <p class="content-text">
            My name is <em>Ksenia</em>. Since childhood, I have been drawn to draw and this desire continues to this
            day. But before it was at the level of "I just want to",
            but now I'm ready to dive into this area with my head. <br>
        </p>
        <p class="content-text">
            Around 2018, I started studying everything that just catches my eye: anatomy, light and shadow, working with
            color.
            I watched a lot of different videos of someone drawing on paper or on a computer.
            Speedpaint still awakens my craving for drawing. Quietly,
            I started filling sketchbooks with drawings and switched to a graphics tablet. I tried to draw in different
            styles, trying to find my own.
            But you can't find your own style, it comes by itself over time, so I left this idea and moved on to
            creating animation.
            My favorite in the field of drawing has become <em>Reyzi_Chan</em>. A blogger with a special video format.
            It was she who ignited the fire of interest. Gradually, I mastered the graphics tablet and will return to
            drawing on paper. That's when I got markers and acrylic.
            I applied to many drawing techniques and I liked it. <br>

        </p>
        <p class="content-text">
            In parallel with my hobby, I do programming and rush from side to side. There are so many different
            possibilities and so few hours in a day! <br>

            This site was created by me personally and stores the history of most of my works.


        </p>
        <span class="content-text"><strong>History should not be forgotten..</strong></span>
    </div>
</body>

</html>