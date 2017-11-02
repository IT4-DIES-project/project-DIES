<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,user-scalable=no,maximum-scale=2"/><!--ビューポートの設定（レスポンシブに必要）-->
<script src="js/jquery.js"></script>
<script src="js/form.js"></script>
<script src="js/html5shiv.js"></script><!--IE８以前のバージョンの場合でもレイアウトが崩れないようにする-->
<link rel="stylesheet" href="css/default.css">
<link rel="stylesheet" href="css/animate.css"><!--cssでアニメーションをする-->
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
		
		<p style="text-align: center;"><a class="btn" id="arrow_btn">⇧</a></p>
		
		<!--contents最初は非表示-->
		<div id="form_back" style="display: none"></div>
		
		<div id="index_contents" style="display: none">
		<p style="margin-bottom: 10px; font-size: 2em;">Sign In</p>
			<form id="form" action="php/login.php" method="post">
			
				<input class="input" type="text" placeholder="メールアドレス" name="user_id">
				<input class="input" type="password" placeholder="パスワード" name="pass">
			
				<p style="clear: both; text-align: center">
					<button class="btn" type="submit">Login</button><hr>
					<a class="btn" href="sign_up.php">New</a>
				</p>
			</form>
		</div><!--contents終了-->
	
	</div><!--index終了-->
</div><!--wrap終了-->

</body>
</html>