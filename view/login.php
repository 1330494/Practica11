<?php 
	include_once "header.php";
	$before_login=true;
	include_once "menu.php";
?>

<?php
	if($status=="before_submission" or $status=="failure")
	{
?>
	<h3>Please fill up the following form to login to your account</h3>
<div class="row">

	<div class="col-lg-4"></div>

	<div class="col-lg-4">
			<div class="card card-info">
			
			<form role="form" method="post">
			
			<div class="card-header">
            	<h3 class="card-title"><i class="fa fa-user-circle-o" style="font-size:32px;">&nbsp;</i>Login Form</h3>
        	</div>

        	<div class="card-body p-1">

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

				<input type="hidden" name="page" value="login">
				<input type="hidden" name="caller" value="self">
			
			</div>

			<div class="card-footer">				
				<div class="row">
					<div class="col-lg-3"></div>
					<div class="col-lg-6">
						<center><input type="submit" class="btn btn-block btn-outline-info" value="Sign In"></center>
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
		<form method="post">
			<input type="hidden" name="username" id="username" value="<?php echo $_REQUEST["username"]; ?>">
			<input type="hidden" name="password" id="password" value="<?php echo $_REQUEST["password"]; ?>">
			<input type="hidden" name="page" value="home">
		</form>
		<script>
			document.forms[0].submit();
		</script>
<?php
	}
?>

<?php
	include_once "footer.php";
?>
