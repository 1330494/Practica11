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
	<h3>Please fill up the following form to add new book</h3>
<div class="row">

	<div class="col-lg-4"></div>

	<div class="col-lg-4">
			<div class="card card-info">
			
			<form role="form" method="post">
			
			<div class="card-header">
            	<h3 class="card-title"><i class="fa fa-book" style="font-size:32px;">&nbsp;</i>Book Add Form</h3>
        	</div>

        	<div class="card-body p-1">
	        	
					<label for="title">Title:</label>
					?>
					<div class="input-group">
					<div class="input-group-prepend">
					    <span class="input-group-text"><i class="fa fa-ticket"></i></span>
					</div>
					<input class="form-control" type="text" name="title" id="title" value="<?php //echo $_REQUEST["title"]; ?>">
					<font color="red"><?php echo $errors["title"]; ?></font>
					</div>
					<br>

					<label for="author">Author:</label>
					<div class="input-group">
					<div class="input-group-prepend">
					    <span class="input-group-text"><i class="fa fa-user-circle"></i></span>
					</div>
					<input class="form-control" type="text" name="author" id="author" value="<?php //echo $_REQUEST["author"]; ?>">
					<font color="red"><?php echo $errors["author"]; ?></font>
					</div>
					<br>

					<label for="description">Description:</label>
					<div class="input-group">
					<div class="input-group-prepend">
					    <span class="input-group-text"><i class="fa fa-reorder"></i></span>
					</div>
					<input class="form-control" type="text" name="description" id="description" value="<?php //echo $_REQUEST["description"]; ?>">
					<font color="red"><?php echo $errors["description"]; ?></font>
					</div>
					<br>

					<input type="hidden" name="page" value="book_add">
					<input type="hidden" name="caller" value="self">
									
			</div>

			<div class="card-footer">				
				<div class="row">
					<div class="col-lg-3"></div>
					<div class="col-lg-6">
						<center><input type="submit" class="btn btn-block btn-outline-info" value="Save"></center>
					</div>
					<div class="col-lg-3"></div>
				</div>
			</div>

			</form>

		</div>
	</div>
	<div class="col-lg-4"></div>
</div>
<?php
		}
		else
		{
?>
		<h3>Book Saved</h3>
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
