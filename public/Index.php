<?php
$title = 'Главная';
$name_page = basename(__FILE__, '.php');
include_once "includes/headerIndex.php";

?>

<content>
    <p class="contentTitile">Личный сайт-портфолио</p>

    <nav>
        <div class="card" id="cardDidgital">
            <a href="<?php echo get_url('Digital.php') ?>">Диджитал</a>
        </div>
        <div class="card" id="cardAuthor">
            <a href="<?php echo get_url('Author.php') ?>">Автор</a>
        </div>
        <div class="card" id="cardTradition">
        <a href="<?php echo get_url('Tradition.php') ?>">Традишион</a>
        </div>
    </nav>
</content>


<?php
include_once "includes/footer.php";
?>