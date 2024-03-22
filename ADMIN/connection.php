<?php

	$conn = mysqli_connect("localhost","root","","e_learning");

	if (!$conn)
	{
		die('Mysql not connect::').mysqli_error($conn);		
	}
	else
	{
		// echo "Connection Successfully...";
	}
?>