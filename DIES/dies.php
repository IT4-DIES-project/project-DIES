<?php
session_start();
?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,user-scalable=no,maximum-scale=2"/><!--ビューポートの設定（レスポンシブに必要）-->
<script src="js/jquery.js"></script>
<script src="js/load.js"></script>
<script src="js/html5shiv.js"></script><!--IE８以前のバージョンの場合でもレイアウトが崩れないようにする-->
<link rel="stylesheet" href="css/default.css">
<link rel="stylesheet" href="css/navigation.css">
<link rel="stylesheet" href="css/animate.css"><!--cssでアニメーションをする-->
<link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="images/favicon.ico">
<link rel="icon" type="image/vnd.microsoft.icon" href="images/favicon.ico">

<title>DIES</title>
</head>

<body>
<!--ローディング画面-->
<div id="loader-bg">
    <div id="loader">
        <img src="images/circle.png" width="80" height="80" alt="Now Loading..." />
        <div class="text">
            <span>N</span>
            <span>o</span>
            <span>w</span>
            <span>L</span>
            <span>o</span>
            <span>a</span>
            <span>d</span>
            <span>i</span>
            <span>n</span>
            <span>g</span>
            <span>.</span>
            <span>.</span>
            <span>.</span>
        </div>
    </div>
</div><!--ローディング画面終了-->
	

<!--ローディング後-->
<div id="wrap">

    <div id="side">
        <div style="width: 300px; height: 1.5em;"></div>
		<!--アカウント表示-->
        <div id="side_account">
            <div id="account_up"><!--ユーザー画像-->
                <a href="user.php"><img  src="images/sora.png" width="100%" height="100%"></a>
            </div>
			
            <div id="account_down">
                <a class="u-inline-brock" href="user.php"><img src="images/user.png"></a>
                <div class="info">
                    <div><p style="font:large/150% bold"><?php echo $_SESSION["user_name"]?></p></div>
                    <div class="u-inline-brock"><p><?php echo $_SESSION["user_id"] ?></p></div>
                    <br style="clear: both">
                </div>
            </div>
        </div>
		
		<!--ナビゲーション-->
        <div id="side_nav">
            <div style="height: 15px; width: 300px; background : #2F2F2F;"></div>
            <div id="nav_list">
                <a href="friends_select.php" style="border-top: 1px solid #FFFFFF;">Friends</a>
                <a href="talk_select.php">Talk</a>
                <a href="information.php">Information</a>
                <a href="setting.php">Setting</a>
            </div>
        </div>
    </div><!--side終了-->
	
	<!--ページ背景-->
    <div id="dies_logo">
        <img src="images/DIES_mono.png">
    </div>
	
	<!--フッター-->
	<div id="footer">
		
	</div>

</div><!--wrap終了-->

</body>
</html>