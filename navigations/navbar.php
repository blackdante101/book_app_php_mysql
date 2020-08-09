<?php 
session_start();
$name=$_SESSION['uname'];
if ($_SESSION['logged_in']!==TRUE) {
	header('location:../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Homepage</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
			.sidebar{
				height:100%;
				position:fixed;
				top:0;
				z-index:1;
				left:0;
				width: 250px;
				display:none;
				padding: 10px;
				transition-duration:3s;
				
			}
			.container{
				cursor:pointer;
			}
			#book_add{
				display: none;
			
			}
			.blur {
      filter: blur(5px);
      -webkit-filter: blur(5px);
      -moz-filter: blur(5px);
      -o-filter: blur(5px);
      -ms-filter: blur(5px);
      }
		</style>
	</head>
	<body >
		
		<div  class="navbar bg-dark p-3">
			<div class="row">
			<button onclick="opennav();" class="btn text-white"><i class="fa fa-bars fa-1x"></i></button>
			<h5 class="text-white ml-3">Welcome , <?php echo $name; ?></h5>
		</div>
		
			<a  href="http://localhost/apps/books app/home/logout.php"><i class=" text-white fa fa-power-off fa-2x"></i></a>
		</div>
		