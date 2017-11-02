<?php
session_start();

if($_SESSION["log"] < 0){
    header("Location: index.php");
    exit;
}

$pdo = new PDO ( 'mysql:host=localhost;dbname=dies;charset=utf8', 'root', 'dies2017' );
$sql_friend_list = "SELECT friend_id FROM friends where user_id='".$_SESSION['user_id']."'" ;

$stmt_friend_list = $pdo->prepare($sql_friend_list);
$stmt_friend_list->execute();

?>
<!doctype html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,user-scalable=no,maximum-scale=2"/><!--ビューポートの設定（レスポンシブに必要）-->
    <script src="js/jquery.js"></script>
    <script src="js/html5shiv.js"></script><!--IE８以前のバージョンの場合でもレイアウトが崩れないようにする-->
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/navigation.css">
    <link rel="stylesheet" href="css/animate.css"><!--cssでアニメーションをする-->
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
    <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="images/favicon.ico">
    <link rel="icon" type="image/vnd.microsoft.icon" href="images/favicon.ico">
	
<script>

	$(function(){
	  $("#header").load("header.html");
	});

</script>

<title>DIES</title>
</head>

<body id="friends_page">

<div id="wrap">
	
	<!--ヘッダ--->
    <div id="header"></div>
	<!--side-->
    <div id="side" style="left: 0"><?php include(dirname(__FILE__) . '/side.php'); ?></div>

    <!--main-->
    <div id="main">
        <img src="images/circle.png" style="padding-top: 5px; float:left;" width="60px" height="60px">
        <h1 style="border-bottom: 3px solid #8cd460;">FRIENDS LIST</h1>

        <ul>
        <?php while( $list = $stmt_friend_list->fetch()) :?>

            <?php
                $sql_friend = "SELECT * FROM user where user_id='" . $list["friend_id"] . "'";
                $stmt_friend = $pdo->prepare($sql_friend);
                $stmt_friend->execute();
            ?>

            <?php while( $box_friend = $stmt_friend->fetch()) :?>
                <li id="f_list">
                    <a><?php echo  $box_friend["user_name"]; ?>
                    <span><?php echo $box_friend["user_id"]; ?></span></a>
                </li>
            <?php endwhile; ?>
        <?php endwhile; ?>
        </ul><!--area終了-->

    </div><!--main終了-->

</div><!--wrap終了-->

</body>
</html>