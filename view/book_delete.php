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
	<h3>Please fill up the following form to delete book</h3>

<div class="row">

	<div class="col-lg-4"></div>

	<div class="col-lg-4">
			<div class="card card-info">
			
			<form role="form" method="post">
			
			<div class="card-header">
            	<h3 class="card-title"><i class="fa fa-book" style="font-size:32px;">&nbsp;</i>Book Delete Form</h3>
        	</div>

        	<div class="card-body p-1">

			<label for="title">Do you really want to delete book <?php echo $book[0]["title"]; ?>?</label>
			<br>
			<center>
				<select class="btn btn-info" name="choice">
					<option value="yes">Yes</option>
					<option value="no" selected>No</option>
				</select>
			</center>
			<br>

			<input type="hidden" name="page" value="book_delete">
			<input type="hidden" name="caller" value="self">
			<input type="hidden" name="id" value="<?php echo $book[0]["id"]; ?>">
			
		</div>

			<div class="card-footer">
				
				<div class="row">
					<div class="col-lg-3"></div>
					<div class="col-lg-6">
						<center>
							<input type="submit" value="Delete" class="btn btn-block btn-outline-info">	
						</center>
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
		<h3>Book Deleted</h3>
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
