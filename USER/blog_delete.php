<?php
	$blog_id=$_GET['id'];
	// $file=$_GET['file'];

	// unlink('blog_img/'.$file);

	include('conn.php');
	$sql_del = "DELETE FROM tbl_blog_detail WHERE blog_id = $blog_id";
	mysqli_query($conn, $sql_del);
	header('location:blog_dashboard.php');
?>