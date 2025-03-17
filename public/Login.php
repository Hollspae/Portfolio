<?php
$title = 'Авторизация';
$name_page = basename(__FILE__, '.php');
include_once "includes/head.php";
$error = get_error_message();

?>
<link rel="stylesheet" href="../css/Login.css">
</head>

<body>

    <aside>
        <a href="<?php echo get_url('') ?>" class="Back"><img src="../image/arrow.svg" alt="">Главная</a>
    </aside>

    <main>
        <div class="contentBlock">
            <p class="headTitle">HOLLSPAE</p>
            <form action="includes/sing_up.php" method="post">

                <input type="text" placeholder="Login" name="login" class="formInpt" required value="<?php if (isset($_SESSION['log_name']) && !empty($_SESSION['log_name'])) echo $_SESSION['log_name'] ?>">
                <input type="password" placeholder="Password" name="pass" class="formInpt" required>
                <?php if ($error) { ?>
                    <a class="form_error"><?php echo $error; ?></a>
                <?php } ?>
                <button type="submit" class="btnEnter">ВОЙТИ</button>
            </form>
        </div>



        <?php
        include_once "includes/footer.php";
        ?>