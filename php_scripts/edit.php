<?php 
include('../dbconnect/db.php');
$fl=$_GET['fl'];
$type=$_GET['type'];
$id=$_GET['id'];
$name=$_GET['name'];
$author=$_GET['author'];
$price=$_GET['price'];
$pages=$_GET['pages'];
$category=$_GET['cate'];
if ($type=='books_to_buy') {

	$sql="UPDATE $type SET book_name='$name',author='$author',category='$category',price='$price',pages='$pages' WHERE id='$id'";
	if ($result=$con->query($sql)) {
		header('location:../home/'.$fl.'/index.php');
	}
}
elseif ($type=='librarytbl') {
	$sql="UPDATE $type SET book_name='$name',author='$author',category='$category',pages='$pages' WHERE id='$id'";
	if ($result=$con->query($sql)) {
		header('location:../home/'.$fl.'/index.php');
	}
}
?>