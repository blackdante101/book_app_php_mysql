<?php 

include('../../dbconnect/db.php');
require('../../navigations/navbar.php');

?>
<div  class="container p-5 my-3 bg-light">
	<h3><i class="fa fa-user"></i>&nbsp;<?php echo $_GET['uname']; ?></h3>
	<div class="container">
		<ul>
			<?php
			$user=$_GET['uname'];
			$sql = "SELECT * FROM usertbl WHERE username ='$user'";
			$info=$con->query($sql);
			while ($row=$info->fetch_assoc()) {
				echo"<li>First Name :".$row['fname']." </li>
			<li>Last Name : ".$row['lname']."</li>
			<li><i class='fa fa-inbox'></i>&nbsp;Email : ".$row['email']."</li>
			<li><i class='fa fa-calendar'></i>&nbsp; Date Of Birth: ".$row['dob']."</li>";
			}

			
			?>
		</ul>
	</div>
	<hr class="m-4">
	<h3><i class="fa fa-book"></i>&nbsp;Library (<?php $qry="SELECT COUNT(*) FROM librarytbl WHERE uname='$user'";$sum=$con->query($qry);while($total=$sum->fetch_assoc()){echo $total['COUNT(*)'];} ?> Book(s))</h3>
	<hr class="m-4">
	<table class="table table-striped table-responsive">
		<tr>
			<th>Book Name</th>
			<th>Author</th>
			<th>Category</th>
			<th>Number Of Pages</th>
			<th>Date Added</th>
		</tr>
		<?php 
		$qry2 ="SELECT * FROM librarytbl WHERE uname='$user'";
		$books=$con->query($qry2);
		while ($bookz=$books->fetch_assoc()) {
		echo "
		
		<tr>
			<td>".$bookz['book_name']."</td>
			<td>".$bookz['author']."</td>
			<td>".$bookz['category']."</td>
			<td>".$bookz['pages']."</td>
			<td>".$bookz['book_date']."</td>
		</tr> ";
}
		?>
	</table>
</div>
<?php 
require('../../navigations/footer.php');
?>