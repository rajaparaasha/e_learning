<?php
    if (isset($_POST['add']))
    {
        $id = $_GET['id'];
        $course_name = $_POST['course_name'];
        $img = $_FILES['img']['name'];
        $temp_name = $_FILES['img']['tmp_name'];

        move_uploaded_file($temp_name,"course_photo/".$img);

        include('connection.php');

        $sql_edit = "UPDATE tbl_course SET `course_name`='$course_name',`img`=
        '$img' WHERE course_id = $id";
       
        $result = mysqli_query($conn,$sql_edit);

        if ($result > 0)
        {
         header('location:show_course.php');
            //echo '<script>Record Inserted...</script>';
        }
        
    }
?>
<?php
	include('header.php');

	include('sidemenu.php');
?>
<?php
    $id = $_GET['id'];
    include('connection.php');
    $sql_row = "SELECT * FROM tbl_course WHERE course_id = $id";

    $res = mysqli_query($conn,$sql_row);
    $row = mysqli_fetch_array($res);
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
                                        <li><a href="show_course.php">Show Course
                                        </a></li>
                                        
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form id="form_validation" method="POST" enctype="multipart/form-data">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label class="form-label">Enter Course Name
                                        </label>
                                        <input type="text" class="form-control" 
                                        name="course_name"
                                        value="<?php echo $row['course_name'];?>">
                                        
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                        <label class="form-label">Select Image</label>

                                    <div class="form-line">
                                        <input type="file" class="form-control" 
                                        name="img"/>
                                        <?php echo $row['img'];?>
                                            </div>
                                </div>
                                    <a href="show_course.php"><input class="btn btn-primary" type="submit" name="add" value="Update">
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