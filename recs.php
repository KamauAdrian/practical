<?php
include 'dbcon.php';

//check connection
if ($connection->connect_error) {
	die("connection failed:" . $connection->connect_error);
}
$sql="SELECT id,USERNAME,PHONE FROM 6470user";

$result=$connection->query($sql);

if ($result->num_rows >0) {
	echo "<table border='1'><tr><th>ID</th><th>NAME</th><th>PHONE<?th></tr>";

		//output data of each row

		while ($row=$result->fetch_assoc()) {
		echo "<tr> 
		<td>".$row['id']."</td>
		<td>".$row['USERNAME']."</td>
		<td>".$row['PHONE']."</td>
		</tr>";

	}

echo "</table>";
}else{echo "0 results";
}
	$connection->close();

  ?>