<?php
include_once "head.php";
?>

<link rel="stylesheet" href="../../css/<?php echo $name_page; ?>.css">
</head>

<header>
    <a href="" class="headTitle">HOLLSPAE</a>

    <?php if (isset($_SESSION['user']) && !empty($_SESSION['user'])) { ?>
        <a href="<?php echo get_url('includes/logOut.php') ?>" class="Login"><?php echo $_SESSION['user']['логин'] ?></a>

    <?php } else { ?>
        <a href="<?php echo get_url('Login.php') ?>" class="Login">Log in</a>

    <?php } ?>
</header>