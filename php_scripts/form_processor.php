<?php 
session_start();
include('../dbconnect/db.php');

if (isset($_POST['register'])) {

	 $fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$uname=$_POST['uname'];
	$email=$_POST['email'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
	$password=$_POST['pwd'];

	//checks table to see if there's info like that
	$query= "SELECT username,password,email FROM usertbl WHERE  username='$uname' AND password='$password' AND email='$email' ";
	$validate = $con->query($query);
	if ($validate->num_rows > 0 ) {
		header('location:../register/index.php?t=userexist');

	}
	// inserts into table when info does not exist
	else
	{
		$sql ="INSERT INTO usertbl(fname,lname,username,email,dob,gender,password) VALUES ('$fname','$lname','$uname','$email','$dob','$gender','$password')";
		$insert = $con->query($sql);
		if ($insert == TRUE) {
			$_SESSION['uname']=$uname;
			$_SESSION['logged_in']=TRUE;
			header('location:../home/index.php');
		}
		
		
	}

}

if (isset($_POST['login'])) {
	$uname = $_POST['uname'];
	$pwd = $_POST['pwd'];
	$login_query="SELECT username,password FROM usertbl WHERE username='$uname' AND password='$pwd'";
	$login_verifaction = $con->query($login_query);
	if ($login_verifaction->num_rows == 1) {
		$_SESSION['uname']=$uname;
		$_SESSION['logged_in']=TRUE;

		header('location:../home/index.php');
	}else{
		header('location:../home/login.php');
	}
}
	?>