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
	<h3>Please fill up the following form to update your profile</h3>

<div class="row">

	<div class="col-lg-4"></div>

	<div class="col-lg-4">
			<div class="card card-info">
			
			<form role="form" method="post">
			
			<div class="card-header">
            	<h3 class="card-title"><i class="fa fa-user" style="font-size:32px;">&nbsp;</i>Profile Update Form</h3>
        	</div>

        	<div class="card-body p-1">
 
			<label for="name">Name:</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fa fa-user"></i></span>
				</div>
			<input type="text" class="form-control" name="name" id="name" value="<?php echo $profile[0]["name"]; ?>">
			<font color="red"><?php echo $errors["name"]; ?></font>
			</div>
			<br>

			<label for="username">Username:</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fa fa-user"></i></span>
				</div>
			<input type="text" class="form-control" name="username" id="username" value="<?php echo $profile[0]["username"]; ?>" readonly="true">
			<font color="red"><?php echo $errors["username"]; ?></font>
			</div>
			<br>

			<label for="password">Password:</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fa fa-key"></i></span>
				</div>
			<input type="password" class="form-control" name="password" id="password">
			<font color="red"><?php echo $errors["password"]; ?></font>
			</div>
			<br>

			<label>[Fill up only if you want to change it]</label>
			<br>
			<input type="hidden" name="page" value="profile">
			<input type="hidden" name="caller" value="self">
			
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
	<div class="col-lg-4"></div>
</div>
<?php
		}
		else
		{
?>
		<h3>Profile Updated</h3>
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
