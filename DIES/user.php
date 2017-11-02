<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,user-scalable=no,maximum-scale=2"/><!--ビューポートの設定（レスポンシブに必要）-->
<script src="js/jquery.js"></script>
<script src="js/html5shiv.js"></script><!--IE８以前のバージョンの場合でもレイアウトが崩れないようにする-->
<script src="js/image_setting.js"></script>
<script src="js/image_edit.js"></script>
<link rel="stylesheet" href="css/default.css">
<link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="images/favicon.ico">
<link rel="icon" type="image/vnd.microsoft.icon" href="images/favicon.ico">
	
<script type="text/javascript">
	$(function(){
	  $("#header").load("header.html");
	});
	
	window.onload = function(){
		var options =
		{
			imageBox: '.imageBox',
			thumbBox: '.thumbBox',
			spinner: '.spinner',
			imgSrc: 'avatar.png'
		}
		
		var cropper;
		
		document.querySelector('#file').addEventListener('change', function(){
			var reader = new FileReader();
			reader.onload = function(e) {
				options.imgSrc = e.target.result;
				cropper = new cropbox(options);
			}

			reader.readAsDataURL(this.files[0]);
			this.files = [];
		})
		
		document.querySelector('#btnCrop').addEventListener('click', function(){
			var img = cropper.getAvatar()
			document.querySelector('.cropped').src = img;
		})
		
		document.querySelector('#btnZoomIn').addEventListener('click', function(){
			cropper.zoomIn();
		})
		
		document.querySelector('#btnZoomOut').addEventListener('click', function(){
			cropper.zoomOut();
		})
	};
</script>

<title>DIES</title>
</head>

<body>
<div id="user_wrap">
    <!--ヘッダ--->
    <div id="header"></div>
	
	<div class="container">
		<div class="imageBox">
			<div class="thumbBox"></div>
			<div class="spinner" style="display: none">Loading...</div>
		</div>
	</div>
	<div id="account_top">
		<a class="u-inline-brock account_img"><img class="cropped" src="images/sora.png" ></a>
	</div>

	<!--ナビゲーション-->
    <div id="bar_nav">
        <div id="account_icon">
            <a class="u-inline-brock account_img"><img src="images/icon.jpg"></a>
        </div>
		
		<div id="bar_nav_list">
            <a href="dies.php">Home</a><!--
			--><a href="friends_select.php">Frineds</a><!--
			--><a href="talk_select.php">Talk</a><!--
			--><a href="setting.php" style="border-right: 5px solid white">Setting</a>
        </div>
    </div><!--ナビ終了-->
    
	<!--アカウント情報-->
    <div id="account_l_side">
        <p style="font: 1.5em bold;" ><?php echo $_SESSION["user_name"] ?></p>
        <p style="color: #8c8b8b">ID: <?php echo $_SESSION["user_id"] ?></p>
        <p>趣味 ゲーム、プログラミング、料理 最近はアズレン、FF14、グラブルにハマっています！趣味が合いそうな方仲良くして頂けると嬉しいでっす！！</p>
    </div>
	
	<!--main-->
    <div id="account_main">

    </div>
	
	<!--footer-->
    <div class="container" id="footer">
		<div class="action">
			<input type="file" id="file" style="float:left; width: 250px">
			<input type="button" id="btnCrop" value="Crop" style="float: right">
			<input type="button" id="btnZoomIn" value="+" style="float: right">
			<input type="button" id="btnZoomOut" value="-" style="float: right">
		</div>
    </div>

</div><!--wrap終了-->

</body>
</html>