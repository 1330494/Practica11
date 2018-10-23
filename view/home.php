<?php 
	include_once "header.php";
	if($logged_in)
	{
		$after_login=true;
		include_once "menu.php";
?>
	<br>
	<h3>Welcome to Home Page</h3>
	<br>
	<center>
		<img src="dist/img/book.png" style="width: 360px;height: 360px;">
	</center>
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
