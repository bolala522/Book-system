<?php
$conn=mysqli_connect(
    "localhost",
    "root",
    "",
    "jq-book");
$sql='SET NAMES UTF8';
$result=mysqli_query($conn, $sql);
if ($result){
    echo "连接成功";
}
$sql='SELECT * FROM book-info';
$result=mysqli_query($conn, $sql);
echo  mysqli_fetch_array($result);
