<style type="text/css">
	.close{
		color:red;
	}
</style>
<?php
	include('conn.php');
	session_start();
	// echo $_SESSION['email'];
	if(isset($_SESSION['email']))
	{
		$sql_sel = "SELECT * FROM tbl_blog_user WHERE email ='".$_SESSION['email']."'";
		// echo $sql_sel;
		$result = mysqli_query($conn, $sql_sel);
		$row = mysqli_fetch_array($result);	
	}
	include ('header.php');
		
	if(isset($_POST['submit']))
	{
		$blog_fnm = $_POST['fnm'];
		$blog_lnm = $_POST['lnm'];
		$email = $_SESSION['email'];
		// $pwd = md5($_POST['pwd']);
		$dob = $_POST['dob'];
		$city = $_POST['city'];
		$contact = $_POST['contact'];
		$address = $_POST['address'];
		// $photo = $_FILES['photo']['name'];
		$img = $_FILES['img']['name'];
		$temp_name = $_FILES['img']['tmp_name'];
			move_uploaded_file($temp_name, "../ADMIN/blog_user_img/".$img);
			//echo $sql_sel;
			$sql_edit = "UPDATE `tbl_blog_user` SET blog_fname = '$blog_fnm', blog_lname = '$blog_lnm', dob= '$dob', city = '$city', contact_no = '$contact', address = '$address', img = '$img'  WHERE `email` = '$email'";   
			// UPDATE `tbl_blog_user` SET `blog_lname` = 'Page', `city` = 'Gondal', `contact_no` = '7984347474', `img` = '1.jpg', `address` = 'India' WHERE `tbl_blog_user`.`blog_user_id` = 15;
			// echo $sql_edit;
				$no = mysqli_query($conn, $sql_edit);

				if($no > 0)
				{
					echo '<script>alert("Update details successfully....");</script>';
				}
				else
				{
					echo '<script>alert("You are not registered....");</script>';
				
				}
	}

?>
<style type="text/css">
	h3
	{
		margin-top: 20px;
		padding-top: 23px;
		font-weight: bold;
		font-size: 25px; 
	}
</style>
   <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(assets/img/banner/13.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1 style="margin-top: 45px;">Welcome User</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Blog</a></li>
                        <li><a href="#" class="active">Blogger_Profile</a></li>
                        <!-- <li class="active">All Blog</li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
    <hr>
    <div class="course-details-area default-padding	">
        <div class="container">
            <div class="row">
            	<div class="col-md-12">
					<ul class="nav nav-tabs">
					  <li class="active"><a data-toggle="tab" href="#menu1">Profile</a></li>
					  <li><a data-toggle="tab" href="#menu2">Add Blog</a></li>
					  <li><a data-toggle="tab" href="#menu3">View Blog</a></li>
					  <li><a href="index.php">Logout</a></li>
					</ul>
					<div class="tab-content">
					  	<div id="menu1" class="tab-pane fade in active">
					    	<h3 style="padding-top: p-4;"><span class="fas fa-user"></span> &nbsp;My Profile</h3>
							    <form method="POST" enctype="multipart/form-data">
			                    	<div class="row">
			                    		<div class="col-md-4">
			                    			<div class="form-group">
			                    				<label>First Name<span style="color: red">*</span> : </label>
			                    				<input type="text" name="fnm" class="form-control" required="" value="<?php echo $row['blog_fname']; ?>">
			                    			</div>
			                    		</div>
			                    		<div class="col-md-4">
			                    			<div class="form-group">
			                    				<label>Last Name<span style="color: red">*</span> : </label>
			                    				<input type="text" name="lnm" class="form-control form-control-sm" required="" value="<?php echo $row['blog_lname']; ?>">
			                    			</div>
			                    		</div>
			                    		<div class="col-md-4">
			                    			<div class="form-group">
			                    				<label>Email : </label>
			                    				<input type="email" name="email" class="form-control form-control-sm" value="<?php echo $_SESSION['email']; ?>" readonly>
			                    			</div>
			                    		</div>
										<div class="col-md-4">
			                    			<div class="form-group">
			                    				<label>Date Of Birth<span style="color: red">*</span> :</label>
			                    				<?php $dob = date("Y-m-d",strtotime($row['dob'])); 	
			                    					//echo $dob;
			                    				 ?>
			                    				<input type="date" name="dob" class="form-control form-control-sm" value="<?php  echo $dob ; ?>" required="">
			                    			</div>
			                    		</div>
			                    		<div class="col-md-4">
			                    			<div class="form-group">
			                    				<label>City<span style="color: red">*</span> : </label>
			                    				<input type="text" name="city" value="<?php echo $row['city']; ?>"class="form-control form-control-sm">
			                    			</div>
			                    		</div>
			                    		<div class="col-md-4">
			                    			<div class="form-group">
			                    				<label>Contact No.<span style="color: red">*</span> : </label>
			                    				<input type="text" name="contact" value="<?php echo $row['contact_no']; ?>" class="form-control form-control-sm">
			                    			</div>
			                    		</div>
			                    		<div class="col-md-4">
			                    			<div class="form-group">
			                    				<label>Address<span style="color: red">*</span> : </label>
			                    				<!-- <input type="text" name="city" class="form-control form-control-sm"> -->
			                    				<textarea name="address" class="form-control"><?php echo $row['address']; ?></textarea>
			                    			</div>
			                    		</div>
			                    		<div class="col-md-4">
			                    			<div class="">
			                    				<label>Image<span style="color: red">*</span> : </label>
			                    				<input type="file" name="img">
			                    			</div>
			                    		</div>
			                    		<div class="col-md-4">
			                    			<div class="">
			                    				<img src="../ADMIN/blog_user_img/<?php echo $row['img']; ?>" height="100px" width="100px">
			                    			</div>
			                    		</div>

			                    		<div class="col-md-12" align="center">
			                    			<div class="form-group">
			                    				<input type="submit" name="submit" class="btn btn-primary">
			                    			</div>
			                    		</div>
			                    	</div>
			                    </form>
						</div>

					  	<div id="menu2" class="tab-pane fade">
						    <h3><span class="fas fa-plus"></span> Add Blog</h3>
							    <form method="POST" enctype="multipart/form-data">
			                    	<div class="row">
			                    		<div class="col-md-12">
			                    			<div class="form-group">
			                    				<select class="form-control" name="blog_cat_id">Blog categories
		                    				    <option>--Blog Categories--</option>			     <?php
													include ('conn.php');
													$res1=mysqli_query($conn, "SELECT * FROM tbl_blog_cat");
													while($row1 = mysqli_fetch_array($res1))
													{
														echo '<option value="'.$row1['blog_cat_id'].'">'.$row1['cat_nm'].'</option>';
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
					  							<label>Blog More Description</label>
												<textarea rows="6" name="more_des" class="form-control"></textarea>
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
										$blog_user_id = $_SESSION['blog_user_id'];
										$blog_cat_id = $_POST['blog_cat_id'];
										$title = $_POST['title'];
										$desci = $_POST['desci'];
										$more_des = $_POST['more_des'];
										$blog_img = $_FILES['blog_img']['name'];
										$temp_name = $_FILES['blog_img']['tmp_name'];
										move_uploaded_file($temp_name, "../ADMIN/blog_img/".$blog_img);

										$sql_ins = "INSERT INTO `tbl_blog_detail`(`blog_user_id`,`blog_cat_id`,`blog_title`, `blog_img`, `blog_description`, `blog_detailmore`) VALUES ($blog_user_id,$blog_cat_id, '$title', '$blog_img', '$desci', '$more_des')";

										//echo $sql_ins;
										$row = mysqli_query($conn, $sql_ins);

										if($row > 0)
											{
												echo '<script>alert("Blog Added Sucessfully....!!!");</script>';
												$_POST['Add_Blog'] = '';
												
											}
											else
											{
												echo '<script>alert("Blog is not add,, try agian....");</script>';

											}
											header("location:blog_dashboard.php");
											// exit;
									}
								?>
					  	</div>

					  	<div id="menu3" class="tab-pane fade">
						    <h3><span class="fas fa-file"></span> View Blog</h3>
						    <div class="col-md-12">
							    <form method="POST" enctype="multipart/form-data">
							    	<table class="table table-stripped">
							    		<tr>
							    			<th>No.</th>
							    			<th>Blog Name</th>
							    			<th>Blog Image</th>
							    			<th>Blog Description</th>
							    			<th>More Description</th>
							    			<th>Action</th>
							    		</tr>
							    	<?php
							    		include('conn.php');
							    		$blog_user_id1= $_SESSION['blog_user_id'];
										$result = mysqli_query($conn, "SELECT * FROM tbl_blog_detail where blog_user_id = $blog_user_id1");
										$i=1;
										while ($row = mysqli_fetch_array($result)) 
										{
											echo "<tr align= 'center'>";
											echo "<td>".$i++."</td>";
											echo "<td>".$row['blog_title']."</td>";
											// echo "<td>".$row['blog_img'];
											echo '<td><img src="../ADMIN/blog_img/'.$row['blog_img'].'" width="100px" height="110px"></td>';
											echo "<td>".$row['blog_description']."</td>";
											echo "<td>".$row['blog_detailmore']."</td>";

											echo '<td>
											<a href="blog_delete.php?id='.$row['blog_id'].'" class="close" title="Delete">&#x2715</a>
												</td>';
											echo '</tr>';
										}
									?>	
							    	</table>
							    </form>
						  	</div>
					  	</div>
					</div>

				</div>
            </div>
        </div>
    </div>
    <!-- End Course Details -->


<?php
	include ('footer.php');

?>