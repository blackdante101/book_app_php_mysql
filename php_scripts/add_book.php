<?php 
include ('../dbconnect/db.php');
session_start();
$name =$_POST['name'];
$author=$_POST['author'];
$cate=$_POST['cate'];
$pages=$_POST['pages'];

$uname=$_SESSION['uname'];

if (isset($_POST['library'])) {
	$date=$_POST['book_date'];
	$query="INSERT INTO librarytbl(uname,book_name,author,category,pages,book_date) VALUES ('$uname','$name','$author','$cate','$pages','$date')";
$insert=$con->query($query);
if ($insert==TRUE) {
	header('location:../home/library/');
}
else{
	echo "error";
}
}
if (isset($_POST['purchase'])) {
$price = $_POST['price'];
	$query2="INSERT INTO books_to_buy(uname,book_name,author,category,pages,price) VALUES ('$uname','$name','$author','$cate','$pages','$price')";
$insert2=$con->query($query2);
if ($insert2==TRUE) {
	header('location:../home/books_to_buy/');
}# code...
}
?>