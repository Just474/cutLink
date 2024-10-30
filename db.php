<?php
$dbUser = "root";
$dbPass = "";
$dbName = "mysql:host=MySQL-8.2;dbname=docker";
try {
    return new PDO($dbName, $dbUser, $dbPass);
} catch (PDOException $e) {
    echo $e->getMessage();
}

