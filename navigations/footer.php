
<?php 
$base_html='http://localhost/apps/books%20app';
?>
<div id='sidebar' class="sidebar bg-dark">

			<button onclick="closenav();" class="btn text-white"><i class="fa fa-bars fa-1x"></i></button>
			<div class="row">
				<form action="http://localhost/apps/books%20app/home/search/index.php" method="GET">
					<input  type="text" name="search" placeholder="Search For Friends">
			        <button type="submit" class="btn btn-primary">Search</button>
				</form>
	
		</div>

			<ul class="list-group my-5 list-group-flush">
				<li class="list-group-item bg-dark"><a class="text-white" href="<?php echo $base_html ?>/home/"><i class="fa fa-home"></i> &nbsp; Home</a></li>
				<li class="list-group-item bg-dark"><a class="text-white"  href="<?php echo $base_html ?>/home/library"><i class="fa fa-book"></i> &nbsp; My Library</a></li>
				<li class="list-group-item bg-dark"><a class="text-white"  href="<?php echo $base_html ?>/home/books_to_buy/"><i class="fa fa-book"></i> &nbsp;Books To Buy</a></li>
				<li class="list-group-item bg-dark"><a class="text-white"  href="<?php echo $base_html ?>/home/logout.php"><i class="fa fa-power-off"></i> &nbsp;Logout</a></li>
			</ul>
		</div>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<script>
			$sidebar=document.getElementById('sidebar');
			$book_add=document.getElementById('book_add');
			$body=document.getElementById('body');
		
			function opennav(){
				$sidebar.style.display="block";	
				
			}
			function closenav(){
				$sidebar.style.display="none";

			}
			function hide(){
				$book_add.style.display="none";
			}
			function display_input(){
				$book_add.style.display="block";
				$body.classList.add("blur");
			}
			function ref(){
				window.open('index.php','_self');
			}
		</script>

	</body>
</html>