<?php
header("content-type:text/html;charset=utf-8");
$conn=mysqli_connect(
    "localhost",
    "root",
    "",
    "jq-book");
$sql='SET NAMES UTF8';
$result=mysqli_query($conn, $sql);

$id=$_POST['id'];
$language=$_POST['language'];
$books=$_POST['books'];
$syn=$_POST['syn'];
$content=$_POST['content'];
$date=date('Y-m-d');
$image=$_POST['image'];

$sql="UPDATE `book-info` SET 
`book` = '$books',
 `syn` = '$syn',
  `detail` = '$content',
 `image` = '$image' 
 WHERE `book-info`.`id` = $id;";
$insert=mysqli_query($conn,$sql);
if ($result){
    echo "<script>alert('添加成功');window.location.href='../more.html'</script>";
}else{
    echo "<script>alert('添加失败');window.location.href='../index.html'</script>";
}
