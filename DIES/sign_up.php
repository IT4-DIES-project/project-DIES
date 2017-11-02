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

<title>DIES</title>
</head>

<body>

<div id="wrap">
	<!--index-->
	<div id="index_img">	
		<div id="index_logo">
			<img src="images/DIES_index.png" width="530" height="200">
		</div>		
		
		<!--背景-->
		<div id="form_back"></div>
		
		<!--newcontents-->
		<div id="new_contents">
			<p style="margin-bottom: 10px; font-size: 2em;">New Account</p>
			<form id="form" action="php/signup_processing.php" method="post" autocomplete="off">
				
				<input class="input" type="text" placeholder="メールアドレス" name="user_id">
				<input class="input" type="text" placeholder="パスワード" name="pass">
				<input class="input" type="text" placeholder="ユーザー名" name="user_name">
					
				<p style="clear: both; text-align: center">
					<button class="btn" type="submit">New</button><hr>
					<a class="btn" href="index.php">Return</a></p>
			</form>
		</div><!--newcontents終了-->
		
	</div><!--index終了-->
</div><!--wrap終了-->

</body>
</html>