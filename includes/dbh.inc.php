<?php

$dsn = "mysql:host=localhost;dbname=dani";
$dbusername = "root";
$dbpassword = "root";

//try catch block
try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}