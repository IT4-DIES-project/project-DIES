<?php
session_start();

//�\����SQL
$pdo = new PDO ( 'mysql:host=localhost;dbname=dies;charset=utf8', 'root', 'dies2017' );
$sql_info = "SELECT * FROM info where id=? " ;	//�S���擾�Alimit �J�n�ʒu,����

$stmt_info = $pdo->prepare($sql_info);
$stmt_info->execute(array($_GET["ID"]));

$today = date("Y-m-d");
?>