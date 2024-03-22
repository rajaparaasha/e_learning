<?php
	$id = $_GET['id'];

	include('conn.php');
	$sql_row = "SELECT * FROM tbl_blog_detail WHERE blog_id = $id";

	$res = mysqli_query($conn, $sql_row);
	$row = mysqli_fetch_array($res);
	//print_r($row);
?>
	<form method="POST" enctype="multipart/form-data">
	  	<div class="row">
			<div class="col-md-12">
			    <div class="form-group">
			    	<select class="form-control" name="blog_cat_id">Blog categories
		                <option>--Blog Categories--</option>			     
		                <?php
							include ('conn.php');
							$res=mysqli_query($conn, "SELECT * FROM tbl_blog_cat");
							while($row = mysqli_fetch_array($res))
							{
								echo '<option value="'.$row['blog_cat_id '].'">'.$row['cat_nm'].'</option>';
							}
						?>
					</select>
			        </div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
					  		<label>Blog Title</label>
					  		<input type="text" name="title" class="form-control">
					  	</div>
					  	</div>
					  		<div class="col-md-12">
					  		<div class="form-group">
					  		<label>Add Blog Description</label>
							<textarea rows="4" name="desci" class="form-control"></textarea>
						</div>
					  	</div>
					  	<div class="col-md-12">
					  		<div class="form-group">
					  			<label>Choose Image</label>
					  			<input type="file" name="blog_img" class="form-control">
					  			</div>
					  	</div>
					  	<div class="col-md-12" align="center">
			                <div class="form-group">
			                    <input type="submit" name="Add_Blog" class="btn btn-primary" value="Add Blog">
			                </div>
			                </div>
					  	</div>
					</form>
<?php
	if (isset($_POST['Add_Blog'])) 
	{
		$title = $_POST['title'];
		$desci = $_POST['desci'];
		$blog_img = $_FILES['blog_img']['name'];
		if($blog_img == '')
		{
			$blog_img = $row['blog_img'];
		}
		else
		{
			unlink('blog_img/'.$row['blog_img']);
			$blog_img = $_FILES['blog_img']['name'];
			$temp_name = $_FILES['blog_img']['tmp_name'];
			move_uploaded_file($temp_name, "../ADMIN/blog_img/".$blog_img);
		}

		$sql_edit = "UPDATE `tbl_blog_detail` SET `blog_title` = '$title', `blog_img` = "$blog_img", `blog_description` = '$desci' WHERE blog_id = $id";

		$row = mysqli_query($conn, $sql_edit);

			if($row > 0)
				{
					echo '<script>alert("Blog updated Sucessfully....!!!");</script>';
				}
			else
				{
					echo '<script>alert("Blog is not update,, try agian....");</script>';
				}

?>