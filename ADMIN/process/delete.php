<?php
	include('../connection.php');
	
	if (isset($_REQUEST['delete_data'])) 
	{
		$id = $_POST['id'];
		$table = $_POST['table'];
		$col_nm = $_POST['col_nm'];
		

		$int = mysqli_query($conn,"DELETE FROM $table WHERE $col_nm = $id");

		echo $int;
	}
?>