<?php
$db = require '../db.php';

$pdo = $db->query("SELECT * FROM `links` ")->fetchAll(PDO::FETCH_ASSOC);

$getLink = $_POST['link'];

$cutLink = substr(md5($getLink), 0, 6);

$link = $db ->query("SELECT `url` FROM links WHERE `key` = '$cutLink'");
if($link->rowCount()<1){
    $db ->query("INSERT INTO `links` (`key`, `url`) VALUES ('$cutLink', '$getLink')");
}

header("location: ../index.php?key=$cutLink");
