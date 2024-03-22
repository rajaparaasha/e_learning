<?php
	$conn = mysqli_connect("localhost", "root", "", "e_learning");

	if (!$conn) 
	{
		// die('MySQL Not Connect::'.mysql_error($conn));
	}
	else{
		// echo "<h2>Connection Sucessfully...!!</h2>";
	}
	// mysqli_close($conn);
?>