<?php
include("conn-local.php");

$id=$_GET['id'];
$sql="SELECT * FROM `book-info` WHERE `id` = '$id'";
$result=mysqli_query($conn,$sql);

$output=array();
while ($rows=mysqli_fetch_array($result)){
    array_push($output,$rows);
}
$output=json_encode($output);
echo $output;