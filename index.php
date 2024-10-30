<?php
$key = $_GET['key'] ?? "";
if(empty($key)){
    $cutLink = "Ссылка еще не готова";
} else {
    $cutLink = "link.local/redirect.php?key=".$key;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="action/cut_link.php" method="post">
    <input type="text" name="link" placeholder="Введите ссылку">
    <input type="text" value="<?=$cutLink?>" readonly>
    <input type="submit" value="Сократить ссылку">
</form>
</body>
</html>
