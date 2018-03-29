<?php 
include 'dbcon.php';

//check connection
if ($connection->connect_error) {
	die("connection failed:" . $connection->connect_error);
}
$sql="SELECT id,USERNAME,PHONE FROM 6470user";

$result=$connection->query($sql);

if ($result->num_rows >0) {
	//output data of each row


	while ($row=$result->fetch_assoc()) {
		echo "id: ".
		$row['id']." 	Name: ".
		$row['USERNAME']."		Phone:	".
		$row['PHONE']."<br>";

	}
	//else{echo "0 results";}
	$connection->close();
}

 ?>