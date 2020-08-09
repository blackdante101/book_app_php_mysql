<?php
require('../navigations/navbar.php');
include '../dbconnect/db.php';
$books_query="SELECT COUNT(*) FROM librarytbl WHERE uname='$name'";
$books_sum=$con->query($books_query);
$purchase_query="SELECT COUNT(*) FROM books_to_buy WHERE uname='$name'";
$purchase_sum=$con->query($purchase_query);
	

?>
		<div style="margin-left:8%;" class="container row my-3  p-2 text-white">
			<div onclick="window.open('library/index.php','_self');" class="bg-success container row p-3 rounded col-md-4">
			<div class="col">
				<img src="../img/library.png" height="60px" width="60px">
			</div>
			<div class="col">
				<h5>My Library</h5><br>
				<h2><?php while ($result=$books_sum->fetch_assoc()) {echo $result['COUNT(*)']; }?></h2>
			</div>
			</div>
			<div onclick="window.open('books_to_buy/','_self');" class="bg-danger  container row p-3 col-md-4">
				<div class="col">
				<img src="../img/shop.png" height="60px" width="60px">
			</div>
			<div class="col">
				<h5>Books To Buy</h5><br>
				<h2><?php while ($books_to_buy=$purchase_sum->fetch_assoc()) {echo $books_to_buy['COUNT(*)']; }?></h2>
			</div>
			</div>
		</div>
		<?php 
require('../navigations/footer.php');
		?>







