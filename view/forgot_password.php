<?php 
	include_once "header.php";
	$before_login=true;
	include_once "menu.php";
?>

<?php
	if($status=="before_submission" or $status=="failure")
	{
?>
	<h3>Please fill up the following form to retrieve password of your account</h3>

<div class="row">

	<div class="col-lg-4"></div>

	<div class="col-lg-4">
			<div class="card card-info">
			
			<form role="form" method="post">
			
			<div class="card-header">
            	<h3 class="card-title"><i class="fa fa-key" style="font-size:32px;">&nbsp;</i>Forgot Password Form</h3>
        	</div>

        	<div class="card-body p-1">

				<label for="username">Username:</label>
				<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fa fa-user"></i></span>
				</div>
				<input class="form-control" type="text" name="username" id="username" placeholder="Username" value="<?php //echo $_REQUEST["username"]; ?>">
				<font color="red"><?php echo $errors["username"]; ?></font>
				</div>
				<br>
				<input type="hidden" name="page" value="forgot_password">
				<input type="hidden" name="caller" value="self">
				
			</div>

			<div class="card-footer">
				<div class="row">
					<div class="col-lg-3"></div>
					<div class="col-lg-6">
						<center><input type="submit" class="btn btn-block btn-outline-info" value="Retrieve Password"></center>
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
		<h3>Please check your mail for new password</h3>
<?php
	}
?>

<?php
	include_once "footer.php";
?>
