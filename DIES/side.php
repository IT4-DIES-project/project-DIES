<?php
session_start();

$pdo = new PDO ( 'mysql:host=localhost;dbname=dies;charset=utf8', 'root', 'dies2017' );
$sql_info = "SELECT * FROM info " ;

$stmt_info = $pdo->prepare($sql_info);
$stmt_info->execute();

$today = date("Y-m-d");
?>
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
	<div style="height: 15px; width: 300px;"></div>

	<div id="nav_list">
		<a id="dies" href="./dies.php" style="border-top: 1px solid #fff">Home</a>
		<a id="friends" href="./friends_select.php">Friends</a>
		<a id="talk" href="./talk_select.php">Talk</a>
		<a id="setting" href="./setting.php">Setting</a>
	</div>

</div>
