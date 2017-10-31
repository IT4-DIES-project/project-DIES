<?php
$uploaddir = '/var/www/html/dies/file/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "<b>Upload success.</b>";
} else {
    echo "<b>Upload failed.</b>";
}
// DEBUG
// print_r($_FILES);
?>
<form action="uproad.php.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="ファイルをアップロードする">
</form>
