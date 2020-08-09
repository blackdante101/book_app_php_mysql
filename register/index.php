<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../../../favicon.ico">

	<title>Sign Up</title>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<!-- Custom styles for this template -->
	<link href="signin.css" rel="stylesheet">
	</head>

	<body style="background-color:#75c2ff;">
		<div style="width:600px;" class="container rounded p-5 bg-light my-5">
			<form action="../php_scripts/form_processor.php" method="POST">
				<h3>Sign Up</h3>
				<hr class="m-4">
				<div class="row">
					<div class="col">
					<input class="form-control" type="text" name="fname" id="" placeholder="First Name" required>
				</div>
				<div class="col">
					<input class="form-control" type="text" name="lname" id="" placeholder="Last Name" required>
				</div>
				</div>
				<div class="form-group my-2">
					<input type="text" class="form-control" name="uname" placeholder="Username" required>
				</div>
				<div class="form-group my-2">
					<input type="email" class="form-control" name="email" placeholder="Email Address" required>
				</div>
				<div class="form-group my-2">
					<select class="form-control" name="gender" required>
						<option>--- Select Gender ---</option>
						<option>Male</option>
						<option>Female</option>
					</select>
				</div>
				<div class="form-group my-2">
					<input type="date" class="form-control" name="dob" required>
				</div>
				<div class="form-group my-2">
					<input type="password" class="form-control" name="pwd" placeholder="Password" required>
				</div>
				<button type="submit" name="register" class="btn btn-primary my-3">Sign Up</button>
					
				
				
			</form>
		</div>


		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="../../../../assets/js/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>