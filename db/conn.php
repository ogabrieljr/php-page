<?php
$host = "127.0.0.1";
$db = "test";
$user = "root";
$password = "";
$charset = "utf8mb4";

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $password);
    echo "hello db";
} catch (PDOException $e) {
    echo $e->getMessage();
}
