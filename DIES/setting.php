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
			$(".set_p").click(function(){
				$(this).nextAll().slideToggle('slow');
			});
			 
		  	$("#header").load("header.html");
		});
	
	</script>
	
</head>

<body id="settingpage">	

<div id="wrap">
	
	<!--ヘッダ--->
    <div id="header"></div>

    <!--side-->
    <div id="side" style="left: 0"><?php include(dirname(__FILE__) . '/side.php'); ?></div>
	
	<!--main-->
    <div id="main">
        <img src="images/circle.png" style="padding-top: 5px; float:left;" width="60px" height="60px">
        <h1 style="border-bottom: 3px solid #8cd460;">SETTING</h1>

        <div class="set_list" style="padding-top: 10px;">
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
					

					<p style="margin: 10px 0 10px 200px;"><button class="btn" type="submit">変更</button>
						<a class="btn set_js" type="submit">キャンセル</a></p>
				</form>
			</div>
			
			<div><p class="set_p set_js">フレンド管理</p>
				<p>ブロック・非表示などの設定が行えます。</p>
				<form id="form" action="setting_processing.php" method="post">
					

					<p style="margin: 10px 0 10px 200px;"><button class="btn" type="submit">変更</button>
						<a class="btn set_js" type="submit">キャンセル</a></p>
				</form>
			</div>

        </div><!--中身部分終了-->

    </div><!--main終了-->

</div><!--wrap終了-->

</body>
</html>