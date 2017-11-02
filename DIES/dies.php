<?php
session_start();

if($_SESSION["log"] < 0){
    header("Location: index.php");
    exit;
}

$pdo = new PDO ( 'mysql:host=localhost;dbname=dies;charset=utf8', 'root', 'dies2017' );
$sql_info = "SELECT * FROM info " ;

$stmt_info = $pdo->prepare($sql_info);
$stmt_info->execute();

$today = date("Y-m-d");
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
	
<script>

	$(function(){
	  $("#header").load("header.html");
	});
	
</script>

<title>DIES</title>
</head>

<body id="diespage">
<!--ローディング画面-->
<div id="loader-bg">
    <div id="loader">
        <img src="images/circle.png" width="80" height="80" alt="Now Loading..." />
        <div id="load_text">
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
	<!--ヘッダ--->
    <div id="header"></div>
	
	<!--side-->
    <div id="side"><?php include(dirname(__FILE__) . '/side.php'); ?></div>
	
	<!--main-->
    <div id="main">
        <img src="images/circle.png" style="padding-top: 5px; float:left;" width="60px" height="60px">
        <h1 style="border-bottom: 3px solid #8cd460;">INFORMATION</h1>

        <?php while( $box_info = $stmt_info->fetch()) :?>
            <?php
            $day= strtotime($box_info["post_date"]);				//作成日をタイムスタンプに変換
            $oneweek = date("Y-m-d",strtotime("+1 week", $day));//作成日の1週間後を取得しoneweekに代入
            ?>

            <div class="area">
                <!--タイトル-->
                <h2><span id="liner"><?php echo  $box_info["post_title"]; ?></span></h2>

                <!--日付部分-->
                <a class="day">作成日<?php echo $box_info["post_date"]; ?></a>


                <!--中身部分-->
                <div class="short"><p><?php echo $box_info['post_content'];?></p></div>
                <a class="short_read" href="dies_contents.php?ID=<?php echo $box_info['id']; ?>">続きを読む>></a>
            </div><!--area終了-->

        <?php endwhile; ?>

    </div><!--main終了-->

</div><!--wrap終了-->

</body>
</html>