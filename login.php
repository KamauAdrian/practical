<?php

if (!isset($usname)) {
	session_start();
}



  ?>
  <!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">

	


</head>
<body>
	<form method="post">
		<fieldset>
			<input type="text" name="USERNAME" class="form-control" placeholder="User Name"><br><br>
			<input type="password" name="PASSWORD_HASH" class="form-control" placeholder="Password"><br><br>
			<input type="submit" name="log" class="form-control btn btn-info" value="log-in"><br><br>
			<input type="submit" name="forgot" class="form-control btn btn-info" value="Forgot Password"><br><br>
		</fieldset>
	</form>
<script type="js/bootstrap.js"></script>
</body>
</html><?php
include 'dbcon.php';




if (isset($_POST['log'])) {

	$user=$_POST['USERNAME'];
	$password=$_POST['PASSWORD_HASH'];
	$query="SELECT * FROM 6470user WHERE USERNAME='$user'AND PASSWORD_HASH='$password'";



	mysqli_query($connection,$query);

	echo "welcome";
	header('location:recs.php');

	
	
}

if (isset($_POST['forgot'])) {

	header('location:reset.php');

	
	
}


?>