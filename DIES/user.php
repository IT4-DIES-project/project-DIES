<?php
session_start();

//表示のSQL
$pdo = new PDO ( 'mysql:host=localhost;dbname=dies;charset=utf8', 'root', 'dies2017' );
$sql_info = "SELECT * FROM user where id=? " ;	//全件取得、limit 開始位置,件数

//$stmt_info = $pdo->prepare($sql_info);
//$stmt_info->execute();
?>

<!doctype html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,user-scalable=no,maximum-scale=2"/><!--ビューポートの設定（レスポンシブに必要）-->
    <script src="js/jquery.js"></script>
    <script src="js/html5shiv.js"></script><!--IE８以前のバージョンの場合でもレイアウトが崩れないようにする-->
    <script src="js/friends_search.js"></script>
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/navigation.css">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
    <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="images/favicon.ico">
    <link rel="icon" type="image/vnd.microsoft.icon" href="images/favicon.ico">

    <title>DIES</title>
</head>

<body>
<div id="wrap">
    <!--ヘッダー画像-->
    <div id="account_top">
        <div style="width: 100%; height: 3.0em; background-color: #2F2F2F;">
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
        <a class="u-inline-brock account_img"><img  src="images/sora.png"></a>
    </div>

    <!--横ナビゲーション-->
    <div id="bar_nav">
        <!--アイコン画像-->
        <div id="account_icon">
            <a class="u-inline-brock account_img"><img src="images/icon.jpg"></a>
        </div>
        <div id="bar_nav_list">
            <a href="friends_select.php">Friends</a><!--
                --><a href="talk_select.php">Talk</a><!--
                --><a href="information.php">Information</a><!--
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
        <h1>コンテンツだよ！！</h1>
    </div>


    <!--foooter-->
    <script type="text/javascript">
        $(function(){
            $("#footer").css("display", "none");

            $("img").click(function(){
                $("#footer").toggle();
            });
            $("img").hover(
                function () {
                    $(this).css("border","5px solid #8cd460");
                },

                function () {
                    $(this).css("border","");
                }
            )

        });
    </script>
    <div id="footer">
        <a>変更を保存</a>
        <a style="margin-left: 20px">キャンセル</a>
    </div>


</div><!--wrap終了-->

</body>
</html>