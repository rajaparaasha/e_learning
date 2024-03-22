<?php
        if (isset($_POST['add']))
        {
               
            $course_name = $_POST['course_name'];
            $img = $_FILES['img']['name'];
            $temp_name = $_FILES['img']['tmp_name'];

            move_uploaded_file($temp_name,"course_photo/".$img);

            include('connection.php');

            $sql_ins = "INSERT INTO tbl_course(`course_name`,`img`,`created_at`) VALUES('$course_name','$img',NOW())";

            $result = mysqli_query($conn,$sql_ins);

            if ($result > 0)
            {
                 header('location:show_course.php');
                  //  echo '<script>Record Inserted...</script>';
                }
                
            }
        ?>
<?php
	include('header.php');

	include('sidemenu.php');
?>
   <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    COURSE FORM 
                    <small>Add New Course Here</small>
                </h2>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Add New Course</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="show_course.php">Show Course
                                        </a>
                                        <a href="dashbord.php">Home
                                        </a>
                                    </li>
                                        
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form id="form_validation" method="POST"enctype="multipart/form-data">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label class="form-label">Enter Course Name
                                        </label>
                                        <input type="text" class="form-control" 
                                        name="course_name" required>
                                        
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                        <label class="form-label">Select Image</label>

                                    <div class="form-line">
                                        <input type="file" class="form-control" 
                                        name="img" required>

                                    </div>
                                </div>
                                    <a href="#"><input class="btn btn-primary" type="submit" name="add" value="ADD">
                                    </input></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
           

           </div>
    </section>
    
<?php
	include('footer.php');
?>