<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,user-scalable=no,maximum-scale=2"/><!--ビューポートの設定（レスポンシブに必要）-->
<script src="js/jquery.js"></script>
<script src="js/html5shiv.js"></script><!--IE８以前のバージョンの場合でもレイアウトが崩れないようにする-->
<link rel="stylesheet" href="css/default.css">
<link rel="stylesheet" href="css/navigation.css">
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

<body id="talkpage">	

<div id="wrap">
	
	<!--ヘッダ--->
    <div id="header"></div>

    <!--side-->
    <div id="side" style="left: 0"><?php include(dirname(__FILE__) . '/side.php'); ?></div>
	
	<!--ページ背景-->
    <div id="dies_logo">
        <img src="images/DIES_mono.png">
    </div>

</div><!--wrap終了-->

</body>
</html>