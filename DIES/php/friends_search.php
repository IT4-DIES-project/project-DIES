<?php
define(HOST, "localhost");
define(USER, "root");
define(PW, "dies2017");
define(DB, "dies");

$connect = mysqli_connect(HOST,USER,PW) or die('Could not connect to mysql server.' );
mysqli_select_db($connect,DB) or die('Could not select database.');
mysqli_set_charset($connect, "utf8");

$term = strip_tags(substr($_POST['search_text'],0, 100));
$term = mysqli_real_escape_string($connect,$term);

$sql = "SELECT * FROM user where user_id like '%$term%' or user_name like '%$term%'";
$result = mysqli_query($connect,$sql);

$string = '';

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $string .= "<a><img id='search_icon' style='width: 40px; height: 40px;' src=\"images/icon.jpg\" />";
        $string .= $row['user_name'];
        $string .= "<span> : ".$row['user_id']."</span></a>";
        $string .= "<br/>\n";
    }

}else{
    $string = "ユーザーが見つかりませんでした。";
}

echo $string;

?>