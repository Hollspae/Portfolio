<?php

include_once "config.php";


function get_url($page = '')
{
    return HOST . "/public/$page";
}

function db()
{
    try {
        return new PDO(
            "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8",
            DB_USER,
            DB_PASSWORD,

            [
                PDO::ATTR_EMULATE_PREPARES => false,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]
        );
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}
function db_query($sql = '', $exec = false)
{
    if (empty($sql)) return false;

    if ($exec) {
        return db()->exec($sql);
    }

    return db()->query($sql);
}


function get_page_title($title = '')
{
    if (!empty($title)) {
        return SITE_NAME . " - $title";
    } else {
        return SITE_NAME;
    }
}

function search_page($name_page)
{
    $this_page = $_SERVER['REQUEST_URI'];
    $name_page = '/' . $name_page . '.php';

    if ($this_page == $name_page) {
        echo ' activePage';
    }
}


function get_images($category = '')
{

    $sql = 'SELECT *, DATE_FORMAT(`Дата`, "%d.%m.%Y") AS `Дата2` FROM `Изображения` WHERE `id_категории` = :category';

    $stmt = db()->prepare($sql, ['category' => $category]);
    $stmt->bindValue(":category", $category);
    $stmt->execute();

    return $stmt->fetchAll();
}
function get_user_info($login)
{
    $sql = 'SELECT * FROM  `Пользователь` WHERE `логин` = :log_user';

    $stmt = db()->prepare($sql, ['логин' => $login]);
    $stmt->bindValue(":log_user", $login);
    $stmt->execute();

    return $stmt->fetch();
}

function login($auth_data)
{
    if (empty($auth_data) || !isset($auth_data['login']) || empty($auth_data['login']) || !isset($auth_data['pass']) || empty($auth_data['pass'])) return false;

    $user = get_user_info($auth_data['login']);
    $_SESSION['user'] = $user;
    if (!isset($user) || empty($user)) {
        $_SESSION['log_name'] = $auth_data['login'];
        $_SESSION['error'] = 'Пользователя не существует!';
        header("Location: " . get_url('Login.php'));
        die;
    }
    if ($auth_data['pass'] != $user['пароль']) {
        $_SESSION['log_name'] = $auth_data['login'];
        $_SESSION['error'] = 'Пароль не верный!';
        header("Location: " . get_url('Login.php'));
        die;
    }
        $_SESSION['log_name'] = '';
    header("Location: " . get_url('/'));
}


function get_error_message()
{
    $error = '';
    if (isset($_SESSION['error']) && !empty($_SESSION['error'])) {
        $error = $_SESSION['error'];
        $_SESSION['error'] = '';
    }

    return $error;
}

function logout()
{
    session_unset();
    session_destroy();

    header("Location: " . get_url('/'));
}
