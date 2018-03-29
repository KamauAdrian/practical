<!DOCTYPE html>
<html>
<head>
	<title>Reset</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<form>
		<fieldset>
			<input type="text" name="usernme" class="form-control" placeholder="User Name"><br><br>
			<input type="text" name="uphn" class="form-control" placeholder="Phone Number"><br><br>
			<input type="password" name="password" class="form-control" placeholder="Enter New Password"><br><br>
			<input type="password" name="password" class="form-control" placeholder="Confirm New Password"><br><br>
			<input type="submit" name="res" class="form-control btn btn-info" value="RESET PASSWORD">
		</fieldset>
	</form>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.js"></script>

</body>
</html>
<?php 
include 'dbcon.php';




if (isset($_POST['res'])) {

$User=$_POST['usernme'];
$phone=$_POST['uphn'];
$pass=$_POST['password'];
	$sql="UPDATE 6470user SET PASSWORD_HASH='$pass' WHERE USERNAME='$User' AND PHONE='$phone'";
	
}


 ?>