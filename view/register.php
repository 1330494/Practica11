<?php 
	include_once "header.php";
	$before_login=true;
	include_once "menu.php";
?>

<?php
	if($status=="before_submission" or $status=="failure")
	{
?>
<div class="row">

	<div class="col-lg-4"></div>

	<div class="col-lg-4">
			<div class="card card-info">
			
			<form role="form" method="post">
			
			<div class="card-header">
            	<h3 class="card-title"><i class="fa fa-user-plus" style="font-size:32px;">&nbsp;</i>Registration Form</h3>
        	</div>

        	<div class="card-body p-1">

        	<label for="name">Name:</label>
        	<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fa fa-user"></i></span>
				</div>			
			<input class="form-control" type="text" name="name" id="name" placeholder="Name">
			<font color="red"><?php echo $errors["name"]; ?></font>
			</div>
			<br>

			<label for="username">Username:</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fa fa-user"></i></span>
				</div>
			<input class="form-control" type="text" name="username" id="username" placeholder="Username">
			<font color="red"><?php echo $errors["username"]; ?></font>	
			</div>		
			<br>

			<label for="password">Password:</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fa fa-key"></i></span>
				</div>
			<input class="form-control" type="password" name="password" id="password" placeholder="Password">
			<font color="red"><?php echo $errors["password"]; ?></font>
			</div>
			<br>

			<input type="hidden" name="page" value="register">
			<input type="hidden" name="caller" value="self">
			
			</div>

			<div class="card-footer">
				<div class="row">
					<div class="col-lg-3"></div>
					<div class="col-lg-6">
						<center><input type="submit" class="btn btn-block btn-outline-info" value="Sign Up"></center>
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
		<h3>Registration Successful</h3>
<?php
	}
?>

<?php
	include_once "footer.php";
