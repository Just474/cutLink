<?php
$pdo = require_once './db.php';
$key =$_GET['key'] ?? "";
if(empty($key)){
    echo "пустая строка";
} else {
    $query= $pdo->query("SELECT  `url` FROM `links` WHERE `key`='$key'")->fetch(PDO::FETCH_ASSOC);
    $url = $query['url'];
    header("Location: $url");
}
