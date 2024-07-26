<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$host = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "portfolio";
$port = "3309";

$conn = 'mysql:host=' . $host . ';port=' . $port . ';dbname=' . $dbname . ';charset=utf8';
$BD = new PDO($conn, $username, $password);

