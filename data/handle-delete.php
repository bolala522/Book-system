<?php
header("content-type:text/html;charset=utf-8");
$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "jq-book");
$sql = 'SET NAMES UTF8';
$result = mysqli_query($conn, $sql);
$id = $_GET['id'];
//echo "succ";
$sql = "DELETE FROM `book-info` WHERE `book-info`.`id` = $id;";
$result = mysqli_query($conn, $sql);
if ($result){
    echo "succ";
}else{
    echo "error";
}