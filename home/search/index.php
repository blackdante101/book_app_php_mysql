<?php 

include('../../dbconnect/db.php');
require('../../navigations/navbar.php');

?>
<div  class="container my-5 p-5 bg-light">
	<h2>Search Results For '<?php echo $_GET['search']; ?>'</h2>
	

	<ul class="list-group list-group-flush my-5">
		<?php 
if (isset($_GET['search'])) {
$user=$_GET['search'];
$user_qry="SELECT username FROM usertbl WHERE username LIKE '%$user%'";
$books="SELECT COUNT(*) FROM librarytbl WHERE uname LIKE '%$user%'";
$search_res=$con->query($user_qry);
//$books_res=$con->query($books);
if ($search_res == TRUE) {
while ($username=$search_res->fetch_assoc()) {
	//while ($book_sum=$books_res->fetch_assoc()) {
		echo " <li class='list-group-item'>
			<a href='profile.php?uname=".$username['username']."'><i class='fa fa-user'></i>&nbsp;".$username['username']."&nbsp;</a> 
			
		</li> 

		";
	//}
}	
}

else{
	echo "<h2>OOps! No User Found</h2>";
}
}			?>
		
	</ul>
</div>
<?php 
require('../../navigations/footer.php');
?>