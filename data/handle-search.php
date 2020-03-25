<?php
include("conn-local.php");

$key=$_GET['key'];
$sql="SELECT book FROM `book-info` WHERE `book` LIKE '%$key%' LIMIT 5";
$result=mysqli_query($conn,$sql);

$output=array();
while ($rows=mysqli_fetch_array($result)){
    array_push($output,$rows);
}
$output=json_encode($output);
echo $output;