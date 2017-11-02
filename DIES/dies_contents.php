<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,user-scalable=no,maximum-scale=2"/><!--ビューポートの設定（レスポンシブに必要）-->
<script src="js/jquery.js"></script>
<script src="js/html5shiv.js"></script><!--IE８以前のバージョンの場合でもレイアウトが崩れないようにする-->
<link rel="stylesheet" href="css/default.css">
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

<body id="diespage">
<div id="wrap">
	
	<!--ヘッダ--->
    <div id="header"></div>
	
	<!--side-->
    <div id="side" style="left: 0"><?php include(dirname(__FILE__) . '/side.php'); ?></div>

    <!--main-->
    <div id="main">
        <img src="images/circle.png" style="padding-top: 5px; float:left;" width="60px" height="60px">
        <h1 style="border-bottom: 3px solid #8cd460;">INFORMATION</h1>

        <div class="area" id="content_area">
            <?php $box_info = $stmt_info->fetch() ?>

            <!--タイトル-->
            <h2><span id="liner"><?php echo  $box_info["post_title"]; ?></span></h2>
            <hr>

            <!--日付部分-->
            <a class="day">作成日<?php echo $box_info["post_date"]; ?></a>

            <!--中身部分-->
            <div><p id="content"><?php echo $box_info['post_content'];?></p></div>

        </div><!--area終了-->
    </div><!--main終了-->

</div><!--wrap終了-->

</body>
</html>