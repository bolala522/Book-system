<?php
header("content-type:text/html;charset=utf-8");
$username=$_POST['username'];
$content=$_POST['content'];
echo "$username+$content";
?>