<?php
header("content-type:text/html;charset=utf-8");
$conn=mysqli_connect(
    "localhost",
    "root",
    "",
    "jq-book");
$sql='SET NAMES UTF8';
$result=mysqli_query($conn, $sql);
$key=$_GET['key'];
$sql="SELECT book FROM `book-info` WHERE `book` LIKE '%$key%' LIMIT 5";
$result=mysqli_query($conn,$sql);

$output=array();
while ($rows=mysqli_fetch_array($result)){
    array_push($output,$rows);
}
$output=json_encode($output);
echo $output;