<?php 
$category= array('Action and adventure','Art/architecture','Alternate history','Autobiography','Anthology','Biography','Chick lit','Business/economics','Children','Crafts/hobbies','Classic' ,'Cookbook','Comic book','Diary','Coming-of-age','Dictionary','Crime','Encyclopedia','Drama','Guide','Fairytale','Health/fitness','Fantasy','History','Graphic novel','Home and garden','Historical fiction','Humor','Horror','Journal','Mystery','Math','Paranormal romance','Memoir','Picture book','Philosophy','Poetry','Prayer','Political thriller','Religion, spirituality, and new age','Romance','Textbook','Satire','True crime','Science fiction','Review','Short story','Science','Suspense','Self help','Thriller','Sports and leisure','Western','Travel','Young adult','True crime');
require('../../navigations/navbar.php');
include ('../../dbconnect/db.php');
?>
<div  class="container-fluid p-5 bg-light">
	<h3>Books To Buy</h3>
	<button onclick="display_input();" class="btn btn-success my-2"> <i class="fa fa-plus"></i> Add Book</button>
</div>

		
<?php 
$sql ="SELECT * FROM books_to_buy WHERE uname='$name'";
$result=$con->query($sql);
if ($result->num_rows > 0) {
	echo "  

<div  class='container'>
	<table  class='my-4 table table-striped table-responsive'>
		
			<th>Book Name</th>
			<th>Author</th>
			<th>Category</th>
			<th>Number Of Pages</th>
			<th>Price</th>
			<th></th>
			<th></th>
	";
	while ($row=$result->fetch_assoc()) {
	echo "  
               <tr>
				<td>".$row['book_name']."</td>
				<td>".$row['author']."</td>
				<td>".$row['category']."</td>
				<td>".$row['pages']."</td>
				<td> GHc ".$row['price']."</td>
				
				<td>
					<form action='index.php' method='get'>
					<a href='index.php?id=".$row['id']."'  class='btn btn-primary'>Edit</a>
					</form>
					<a class='btn btn-danger' href='../../php_scripts/delete.php?id=".$row['id']."&fl=books_to_buy&type=books_to_buy''>Delete</a>
					<td>
				</td>
			</tr>";
}
}
else{
	echo "  
<div  class='container-fluid  p-5'>
	<span class='text-center'>
		<h1 class='text-secondary'>There Are No Books In Your Library!</h1>
		
	</span>
		<img class='ml-5' src='../../img/empty.png' width='100%'>
		
	</div>
	";
}


			
		
	


?>

	
</table>
</div>
	
<?php 
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql="SELECT * FROM books_to_buy WHERE id='$id'";
	$exec=$con->query($sql);

	while ($edit_info=$exec->fetch_assoc()) {

		echo "<div style='width:600px;z-index:2;position:fixed;top:10%;left:8%;display:block;'' id='book_add' class='container-fluid p-4 bg-white rounded my-3'>
	
  <div class='row'>
  	<div class='col-md-10'>
  		<h3>Add Book</h3>
  	</div>
  	 
	 <div class='col-md-2'>
	 	<button onclick='hide();'' class='btn'><i class='fa fa-times'></i></button>
	 </div>
  </div>
	
	 <hr class='p-3'>
	 <form action='../../php_scripts/edit.php' method='GET'>
		<div class='form-group'>
				<input type='text' value='".$edit_info['book_name']."' class='form-control' name='name' placeholder='Book Name'>
		</div>
		<div class='form-group'>
				<input type='text' value='".$edit_info['author']."' class='form-control' name='author' placeholder='Author'>
		</div>
		<div class='form-group'>
				<select class='form-control' name='cate'>
					<option> ".$edit_info['category']."</option>

		";
		 foreach($category as $item){echo '<option>'.$item.'</option>';}

		 echo "</select>
		</div>
		<div class='form-group'>
				<input type='text' value='".$edit_info['pages']."' class='form-control' name='pages' placeholder='Number Of Pages'>
		</div>
		<div class='form-group'>
				<input type='text' value='".$edit_info['price']."' class='form-control' name='price' placeholder='Price'>

		</div>
		<div style='display:none;'>
		<input name='fl' type='text' value='books_to_buy' />
		<input name='id' type='text' value='".$edit_info['id']."' />
		<input name='type' type='text' value='books_to_buy' />

		</div>
		<button name='edit' class='btn btn-primary'><i class='fa fa-save'></i>&nbsp; Edit</button>
	
	</form>
</div>";
	}

}
else
{
	echo "
	<div style='width:600px;z-index:2;position:fixed;top:10%;left:8%;'' id='book_add' class='container-fluid p-4 bg-white rounded my-3'>
	
  <div class='row'>
  	<div class='col-md-10'>
  		<h3>Add Book</h3>
  	</div>
  	 
	 <div class='col-md-2'>
	 	<button onclick='hide();'' class='btn'><i class='fa fa-times'></i></button>
	 </div>
  </div>
	
	 <hr class='p-3'>
	 <form action='../../php_scripts/add_book.php' method='POST'>
		<div class='form-group'>
				<input type='text' class='form-control' name='name' placeholder='Book Name'>
		</div>
		<div class='form-group'>
				<input type='text' class='form-control' name='author' placeholder='Author'>
		</div>
		<div class='form-group'>
				<select class='form-control' name='cate'>
					<option>--- Book Category ---</option>

		";
		 foreach($category as $item){echo '<option>'.$item.'</option>';}

		 echo "</select>
		</div>
		<div class='form-group'>
				<input type='text' class='form-control' name='pages' placeholder='Number Of Pages'>
		</div>
		<div class='form-group'>
				<input type='text' class='form-control' name='price' placeholder='Price'>

		</div>
		
		<button name='purchase' class='btn btn-primary'><i class='fa fa-save'></i>&nbsp; Save</button>
	
	</form>
</div>";
}



 require('../../navigations/footer.php');
  ?>