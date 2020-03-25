<?php
include("conn-local.php");

if ($result){
    echo "连接成功";
}
$sql='SELECT * FROM book-info';
$result=mysqli_query($conn, $sql);
echo  mysqli_fetch_array($result);
