<br>
<?php
	if(isset($before_login))
	{
?>
<ol>
	<li><a class="btn btn-info btn-lg" href="index.php?page=index"><i class="fa fa-home"></i>&nbsp;Home</a></li>
	<li><a class="btn btn-info btn-lg" href="index.php?page=register"><i class="fa fa-user-plus"></i>&nbsp;Register</a></li>
	<li><a class="btn btn-info btn-lg" href="index.php?page=login"><i class="fa fa-user-circle-o"></i>&nbsp;Login</a></li>
	<li><a class="btn btn-info btn-lg" href="index.php?page=forgot_password"><i class="fa fa-key"></i>&nbsp;Forgot Password</a></li>
</ol>
<?php
	}
	else if(isset($after_login))
	{
?>
<ol>
	<li><a class="btn btn-info btn-lg" href="index.php?page=home"><i class="fa fa-home"></i>&nbsp;Home</a></li>
	<li><a class="btn btn-info btn-lg" href="index.php?page=profile"><i class="fa fa-user"></i>&nbsp;Profile</a></li>
	<li><a class="btn btn-info btn-lg" href="index.php?page=book_add"><i class="fa fa-book"></i>&nbsp;Add Book</a></li>
	<li><a class="btn btn-info btn-lg" href="index.php?page=book_list"><i class="fa fa-tasks "></i>&nbsp;List Book</a></li>
	<li><a class="btn btn-info btn-lg" href="index.php?page=logout"><i class="fa fa-power-off"></i>&nbsp;Logout</a></li>
</ol>
<?php
	}
?>
