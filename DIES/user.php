<?php
session_start();


$pdo = new PDO ( 'mysql:host=localhost;dbname=dies;charset=utf8', 'root', 'dies2017' );
$sql_info = "SELECT * FROM user where id=? " ;

//$stmt_info = $pdo->prepare($sql_info);
//$stmt_info->execute();
?>
<!doctype html>
<head lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,user-scalable=no,maximum-scale=2"/><!--ビューポートの設定（レスポンシブに必要）-->
    <script src="js/jquery.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/r29/html5.min.js"></script>
    <script src="js/html5shiv.js"></script><!--IE８以前のバージョンの場合でもレイアウトが崩れないようにする-->
    <script src="js/friends_search.js"></script>
    <script src="js/image_setting.js"></script>
    <link rel="stylesheet" href="css/default.css">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
    <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="images/favicon.ico">
    <link rel="icon" type="image/vnd.microsoft.icon" href="images/favicon.ico">

    <script src="js/image_edit.js"></script>
    <script type="text/javascript">
        window.onload = function() {
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


    <!--header-->
    <div id="user_header">
        <div style="width: 40px; float: left; margin-left: 45%"><img src="images/circle.png"></div>
        <div id="search">
            <form name="form" id="search_form" method="post" action="php/friends_search.php" autocomplete="off" >
                <input name="search_text" id="search_text" type="text" placeholder="検索" />
                <input type="image" src="images/btn.gif" alt="検索" name="search_button" id="search_button" />
            </form>
            <ul class="arrow_box">
                <li id="search_results">
                </li>
            </ul>
        </div>
    </div>
    <!--ここまで-->
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

    <div class="container" id="footer">
        <div class="action">
            <input type="file" id="file" style="float:left; width: 250px">
            <input type="button" id="btnCrop" value="Crop" style="float: right">
            <input type="button" id="btnZoomIn" value="+" style="float: right">
            <input type="button" id="btnZoomOut" value="-" style="float: right">
        </div>
        <!--
        <a>変更を保存</a>
        <a style="margin-left: 20px">キャンセル</a>
        -->
    </div>

</div><!--wrap終了-->

</body>
</html>