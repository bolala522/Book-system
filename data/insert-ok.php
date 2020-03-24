<?php
header("content-type:text/html;charset=utf-8");
$conn=mysqli_connect(
    "localhost",
    "root",
    "",
    "jq-book");
$sql='SET NAMES UTF8';
$result=mysqli_query($conn, $sql);

$language=$_POST['language'];
$books=$_POST['books'];
$syn=$_POST['syn'];
$content=$_POST['content'];
$date=date('Y-m-d');
$image=$_POST['image'];

$sql="INSERT INTO `book-info` (`id`, `language`, `book`, `syn`, `detail`, `date`, `image`) VALUES (NULL, '$language', '$books', '$syn', '$content', '$date', '$image');";
$insert=mysqli_query($conn,$sql);
if ($result){
    echo "<script>alert('添加成功');window.location.href='../insert.html'</script>";
}else{
    echo "<script>alert('添加失败');window.location.href='../index.html'</script>";

}
