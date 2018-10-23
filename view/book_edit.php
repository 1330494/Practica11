<?php 
	include_once "header.php";
	if($logged_in)
	{
		$after_login=true;
		include_once "menu.php";
?>

<?php
		if($status=="before_submission" or $status=="failure")
		{
?>
	<h3>Please fill up the following form to update book information</h3>

<div class="row">

	<div class="col-lg-4"></div>

	<div class="col-lg-4">
			<div class="card card-info">
			
			<form role="form" method="post">
			
			<div class="card-header">
            	<h3 class="card-title"><i class="fa fa-user" style="font-size:32px;">&nbsp;</i>Book Update Form</h3>
        	</div>

        	<div class="card-body p-1">

			<label for="title">Title:</label>
			<input type="text" class="form-control" name="title" id="title" value="<?php echo $book[0]["title"]; ?>">
			<font color="red"><?php echo $errors["title"]; ?></font>
			<br>
			<label for="author">Author:</label>
			<input type="text" class="form-control" name="author" id="author" value="<?php echo $book[0]["author"]; ?>">
			<font color="red"><?php echo $errors["author"]; ?></font>
			<br>
			<label for="description">Description:</label>
			<input type="text" class="form-control" name="description" id="description" value="<?php echo $book[0]["description"]; ?>">
			<font color="red"><?php echo $errors["description"]; ?></font>
			<br>
			<input type="hidden" name="page" value="book_edit">
			<input type="hidden" name="caller" value="self">
			<input type="hidden" name="id" value="<?php echo $book[0]["id"]; ?>">
			
									
			</div>

			<div class="card-footer">
				
				<div class="row">
					<div class="col-lg-3"></div>
					<div class="col-lg-6">
						<center><input type="submit" value="Update" class="btn btn-block btn-outline-info"></center>
					</div>
					<div class="col-lg-3"></div>
				</div>
			</div>

			</form>

		</div>
	</div>
	<div class="col-lg-3"></div>
</div>
<?php
		}
		else
		{
?>
		<h3>Book Updated</h3>
<?php
		}
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
