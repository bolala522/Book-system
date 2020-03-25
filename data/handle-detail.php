<?php
include("conn-local.php");

$key=$_REQUEST['key'];
//https://www.cnblogs.com/jpfss/p/6944245.html
//模糊搜索
$sql="SELECT * FROM `book-info` WHERE `id` = '$key'";
$result=mysqli_query($conn,$sql);

$output=array();
while ($rows=mysqli_fetch_array($result)){
    array_push($output,$rows);
}
$output=json_encode($output);
echo $output;