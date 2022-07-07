<?php
header("Content-Type:text/html; charset='utf-8'");
$db_host="localhost";
$db_account="root";
$db_password="";
$conn=@mysqli_connect($db_host, $db_account, $db_password) or die("連線錯誤");
mysqli_query($conn,"SET NAMES 'utf8'");
mysqli_query($conn,"SET CHARACTER SET 'utf8'");
?>