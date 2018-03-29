<!DOCTYPE html>
<html>
<head>
	<title>Regestration form</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
	<form method="post">
		<fieldset>
			<input type="text" name="USERNAME" class="form-control" placeholder="User Name"><br><br>
			<input type="text" name="PHONE" class="form-control" placeholder="Phone Number"><br><br>
			<input type="password" name="PASSWORD_HASH" class="form-control" placeholder="Password"><br><br>
			<input type="submit" name="reg" class="form-control btn btn-info" value="REGISTER"><br><br>
			<input type="button" name="log" class="form-control btn btn-info" value="Registered Click to Log In"><br><br>
		</fieldset>
	</form>



<script type="js/bootstrap.js"></script>
</body>
</html>
<?php
include 'dbcon.php';
if (isset($_POST['reg'])) {
	$uname=$_POST['USERNAME'];
	$phne=$_POST['PHONE'];
	$upass=$_POST['PASSWORD_HASH'];

	$pass=sha1($upass);

$query="INSERT INTO 6470user VALUES('','$uname','$pass','$phne')";
mysqli_query($connection,$query);
echo "Registered Succesfully";

header('location:login.php');


	}

	if (isset($_POST['log'])) {

	$user=$_POST['USERNAME'];
	$password=$_POST['PASSWORD_HASH'];
	$query="SELECT * FROM 6470user WHERE USERNAME='$user'AND PASSWORD_HASH='$password'";



	mysqli_query($connection,$query);

	echo "welcome";
	header('location:login.php');

	
	
}
?>