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

<title>DIES</title>
	<script>
		 $(function(){
			$(".set_js").click(function(){
				$(this).nextAll().slideToggle('slow');
			});
		});
	
	</script>
	
</head>

<body>	

<div id="wrap">

    <div id="side" style="left: 0">
        <div style="width: 300px; height: 1.5em;"></div>
		<!--アカウント表示-->
        <div id="side_account">
            <div id="account_up"><!--ユーザー画像-->
                <a href="user.php"><img  src="images/sora.png" width="100%" height="100%"></a>
            </div>
			
            <div id="account_down">
                <a class="u-inline-brock" href="user.php"><img src="images/user.png"></a>
                <div class="info">
                    <div><p style="font:large/150% bold">よっしー</p></div>
                    <div class="u-inline-brock"><p>yoshi1025</p></div>
                    <br style="clear: both">
                </div>
            </div>
        </div>
		
		<!--ナビゲーション-->
        <div id="side_nav">
            <div style="height: 15px; width: 300px; background : #2F2F2F;"></div>
            <div id="nav_list">
                <a href="friends_select.php" style="border-top: 1px solid #fff;">Friends</a>
                <a href="talk_select.php">Talk</a>
                <a href="information.php">Information</a>
                <a id="now_page" href="setting.php" style="text-decoration: underline; text-decoration-color: #F7E0A1">
					<img src="images/circle.png" style="text-align" width="40" height="40"/>Setting</a>
            </div>
        </div>
    </div><!--side終了-->
	
	<!--main-->
    <div id="main">
        <img src="images/circle.png" style="padding-top: 5px; float:left;" width="60px" height="60px">
        <h1 style="border-bottom: 3px solid #8cd460;">SETTING</h1>

        <div class="set_list list7" style="padding-top: 10px;">
			<div><p class="set_p set_js">アカウント設定</p>
				<p>ユーザー名・パスワードなどの設定が行えます。</p>
				<form id="form" action="setting_processing.php" method="post">
					<dl class="form">
						<dt>ユーザー名</dt>
						<dd><input class="input" style="ime-mode: active;" type="taxt" name="user_name"></dd>
						<dt>メールアドレス</dt>
						<dd><input class="input" style="ime-mode: disabled;" type="text" name="user_id"></dd>
						<dt>パスワード</dt>
						<dd><input class="input" style="ime-mode: auto;" type="password" name="pass"></dd>
					</dl>

					<p style="margin: 10px 0 10px 200px;"><button class="btn" type="submit">変更</button>
						<a class="btn set_js" type="submit">キャンセル</a></p>
				</form>
			</div>
			
			<div><p class="set_p set_js">通知設定</p>
				<p>Push通知・メール通知などの設定が行えます。</p>
				<form id="form" action="setting_processing.php" method="post">
					<dl class="form">
						<dt>ユーザー名</dt>
						<dd><input class="input" style="ime-mode: active;" type="taxt" name="user_name"></dd>
						<dt>メールアドレス</dt>
						<dd><input class="input" style="ime-mode: disabled;" type="text" name="user_id"></dd>
						<dt>パスワード</dt>
						<dd><input class="input" style="ime-mode: auto;" type="password" name="pass"></dd>
					</dl>

					<p style="margin: 10px 0 10px 200px;"><button class="btn" type="submit">変更</button>
						<a class="btn set_js" type="submit">キャンセル</a></p>
				</form>
			</div>
			
			<div><p class="set_p set_js">フレンド管理</p>
				<p>ブロック・非表示などの設定が行えます。</p>
				<form id="form" action="setting_processing.php" method="post">
					<dl class="form">
						<dt>ユーザー名</dt>
						<dd><input class="input" style="ime-mode: active;" type="taxt" name="user_name"></dd>
						<dt>メールアドレス</dt>
						<dd><input class="input" style="ime-mode: disabled;" type="text" name="user_id"></dd>
						<dt>パスワード</dt>
						<dd><input class="input" style="ime-mode: auto;" type="password" name="pass"></dd>
					</dl>

					<p style="margin: 10px 0 10px 200px;"><button class="btn" type="submit">変更</button>
						<a class="btn set_js" type="submit">キャンセル</a></p>
				</form>
			</div>

        </div>

    </div>

</div><!--wrap終了-->

</body>
</html>