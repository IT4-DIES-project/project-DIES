<?php
session_start();

$pdo = new PDO ( 'mysql:host=localhost;dbname=dies;charset=utf8', 'root', 'dies2017' );
$sql_info = "SELECT * FROM info where id=? " ;

$stmt_info = $pdo->prepare($sql_info);
$stmt_info->execute(array($_GET["ID"]));

$today = date("Y-m-d");
?>
<!doctype html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,user-scalable=no,maximum-scale=2"/><!--ビューポートの設定（レスポンシブに必要）-->
    <script src="js/jquery.js"></script>
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

    <div id="side">
        <div style="width: 300px; height: 1.5em;"></div>
        <!--アカウント表示-->
        <div id="side_account">
            <div id="account_up"><!--ユーザー画像-->
                <a href="user.php"><img  src="images/sora.png" width="100%" height="100%"></a>
            </div>

            <div id="account_down">
                <a class="u-inline-brock" href="user.php"><img src="images/icon.jpg"></a>
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
                <a id="now_page" href="dies.php" style="border-top: 1px solid #8cd460; text-decoration: underline; text-decoration-color: #F7E0A1">
                    <img src="images/circle.png" style="text-align" width="40" height="40"/>Home</a>
                <a href="friends_select.php">Friends</a>
                <a href="talk_select.php">Talk</a>
                <a href="setting.php">Setting</a>
            </div>
        </div>
    </div><!--side終了-->

    <!--main-->
    <div id="main_info">
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
    </div>

</div><!--wrap終了-->

</body>
</html>