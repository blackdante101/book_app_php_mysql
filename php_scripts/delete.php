<?php 
include('../dbconnect/db.php');
$id = $_GET['id'];
$type=$_GET['type'];
$folder=$_GET['fl'];
$qry = "DELETE FROM $type WHERE id='$id'";
if ($result=$con->query($qry)){
header('location:../home/'.$folder.'/index.php');
}
?>