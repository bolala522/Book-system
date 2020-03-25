<?php
include("conn-local.php");
$id = $_GET['id'];
//echo "succ";
$sql = "DELETE FROM `book-info` WHERE `book-info`.`id` = $id;";
$result = mysqli_query($conn, $sql);
if ($result){
    echo "succ";
}else{
    echo "error";
}