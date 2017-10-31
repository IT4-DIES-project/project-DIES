<?php
session_start();

//表示のSQL
$pdo = new PDO ( 'mysql:host=localhost;dbname=dies;charset=utf8', 'root', 'dies2017' );
$sql_info = "SELECT * FROM info " ;	//全件取得、limit 開始位置,件数

$stmt_info = $pdo->prepare($sql_info);
$stmt_info->execute();

$today = date("Y-m-d");
?>