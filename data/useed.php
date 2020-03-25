<?php
include("conn-local.php");

$id=$_POST['id'];
$language=$_POST['language'];
$books=$_POST['books'];
$syn=$_POST['syn'];
$content=$_POST['content'];
$date=date('Y-m-d');
$image=$_POST['image'];
//增加
$sql="INSERT INTO `book-info` (`id`, `language`, `book`, `syn`, `detail`, `date`, `image`) VALUES (NULL, '$language', '$books', '$syn', '$content', '$date', '$image');";
//删除
$sql = "DELETE FROM `book-info` WHERE `book-info`.`id` = $id;";
//修改
$sql="UPDATE `book-info` SET 
`book` = '$books',
 `syn` = '$syn',
  `detail` = '$content',
 `image` = '$image' 
 WHERE `book-info`.`id` = $id;";
//查询
$sql="SELECT * FROM `book-info` WHERE `id` = '$id'";
$insert=mysqli_query($conn,$sql);
if ($result){
    echo "<script>alert('添加成功');window.location.href='../more.html'</script>";
}else{
    echo "<script>alert('添加失败');window.location.href='../index.html'</script>";
}