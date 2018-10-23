<?php 
	include_once "header.php";
	if($logged_in)
	{
		$after_login=true;
		include_once "menu.php";
?>

<div class="row">
	<div class="col-lg-3"></div>
	<div class="col-lg-6">
		<div class="card card-info bg-dark">
			<div class="card-header">
            	<h3 class="card-title"><i class="fa fa-tasks" style="font-size:32px;">&nbsp;</i>List Book</h3>
        	</div>

        	<div class="card-body p-1">
				<table class="table table-striped" >
			<tr>
				<th>ID</th>
				<th>Title</th>
				<th>Author</th>
				<th>Description</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
<?php
		foreach($books as $book)
		{
?>
			<tr>
				<td><span class="badge badge-info"><?php echo $book['id']; ?></span></td>
				<td><?php echo $book["title"]; ?></th>
				<td><?php echo $book["author"]; ?></th>
				<td><?php echo $book["description"]; ?></th>
				<td><a class="text-info" href="index.php?page=book_edit&id=<?php echo $book["id"]; ?>"><i class="fa fa-edit"></i></a></th>
				<td><a class="text-danger" href="index.php?page=book_delete&id=<?php echo $book["id"]; ?>"><i class="fa fa-trash"></i></a></th>
			</tr>
<?php
		}
?>
		</table>
		</div>

		<div class="card-footer">
			<a class="btn btn-block btn-outline-info" href="index.php?page=book_add">
	        	<i class="fa fa-book"> +</i> New Book
	    	</a>
		</div>
	</div>

	<div class="col-lg-6"></div>
</div>

<?php
	}
	else
	{
		$before_login=true;
		include_once "menu.php";
?>
<h3>Invalid Login!!! Try Again.</h3>
<?php
	}
	include_once "footer.php";
?>
