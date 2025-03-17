<?php
$title = 'Традишион';
$name_page = basename(__FILE__, '.php');

include_once "includes/headerPublic.php";

$category = 2;
$image = get_images($category);

?>

<content>

    <?php foreach ($image as $row) { ?>
        <div class="block">
            <div class="block_image">
                <span><?php echo $row['Дата2'] ?></span>
                <img src="<?php echo $row['Путь'] ?>" alt="AAAAAAAAAAAAAAa" class="digital_image" value>
            </div>

        </div>
    <?php } ?>


</content>