<?php
date_default_timezone_set(“Asia/Bangkok”);
$id = $_REQUEST[‘id’];
$text = $_REQUEST[‘text’];
$serverName = “us-cdbr-iron-east-02.cleardb.net”;
$userName = “b51d08a615f444”;
$userPassword = “4248dcc1”;
$dbName = “heroku_cde7b97f3b8a819”;
$connect = mysqli_connect($serverName,$userName,$userPassword,$dbName) or die (“connect error”.mysqli_error());
mysqli_set_charset($connect, “utf8”);
$query =”INSERT INTO log_chat (user_line_id,TEXT,DATE) VALUE(‘12234’,’mickey’,NOW())”;
$resource = mysqli_query($connect,$query) or die (“error”.mysqli_error());
?>
__SILENT___
