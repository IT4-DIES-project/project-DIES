<?php
session_start();
$pdo = new PDO ( 'mysql:host=localhost;dbname=dies;charset=utf8', 'root', 'dies2017' );
$sql = $pdo->prepare ( 'insert into user values(null, ?, ?, ?)' );
if ($sql->execute ( array (
    $_REQUEST ['user_id'],
    $_REQUEST ['user_name'],
    $_REQUEST ['pass']
) )) {
    session_regenerate_id(true);
    $_SESSION["user_id"] = $_REQUEST['user_id'];
    $_SESSION["user_name"] = $_REQUEST['user_name'];
    header("Location: dies.php");
} else {
    $e = "入力された値が正しくありません。#4";
    header("Location: sign_up.php?e=$e");
}
$pdo = null;

?>
