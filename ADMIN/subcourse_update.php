<?php
        $id = $_GET['id'];
        if (isset($_POST['add'])) 
        {
            $course_id = $_POST['course_id'];
            $sub_course_name = $_POST['sub_course_name'];
            $description = $_POST['description'];
            $more_description = $_POST['more_description'];

            $img = $_FILES['img']['name'];
            $temp_name = $_FILES['img']['tmp_name'];    

            move_uploaded_file($temp_name,"sub_course_photo/".$img);
          

            include('connection.php');

            $sql_edit = "UPDATE tbl_sub_course SET `course_id`=$course_id,
            `sub_course_name`='sub_course_name',`img`='$img',`description`='$description',`more_description`='$more_description' WHERE
            sub_course_id = $id";

            echo $sql_edit;
            $result = mysqli_query($conn,$sql_edit);

            if ($result > 0) 
            {
                header('location:show_subcourse.php');
              //  echo '<script>Record Inserted...</script>';
            }
            // else{

            //      echo '<script>alert("Record not updated...")</script>';
            // }
        }

    ?>
<?php
        include('header.php');

        include ('sidemenu.php');
?>
<?php

    $id = $_GET['id'];
    include('connection.php');
    $sql_row = "SELECT * FROM tbl_sub_course WHERE sub_course_id = $id";

    $res = mysqli_query($conn,$sql_row);
    $row = mysqli_fetch_array($res);

?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    MANAGE SUBCOURSE 
                    <small class="text-capitalize">
                        Add new sub courses here...
                    </small>
                </h2>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>SUB COUESE FORM </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"           aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="show_subcourse.php">Show Subcourse</a></li>
                                        
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">

                            <form id="form_validation" method="POST" enctype="multipart/form-data">
                              <h2 class="card-inside-title">Select Course</h2>
                              <div class="row clearfix">
                                <div class="col-sm-12">
                                    <select class="form-control " 
                                    name="course_id">
                                        <option value="">
                                                -- Please select Sub Course --
                                        </option>
                                        <?php
                                            include('connection.php');
                                            $res1 = mysqli_query($conn,"SELECT * FROM tbl_course");
                                            while ($row1 = mysqli_fetch_array($res1))
                                            {
                                                if($row['course_id'] == $row1['course_id'])
                                                {

                                                    echo '<option value="'
                                                    .$row1["course_id"].'" selected>'
                                                    .$row1["course_name"].'</option>';
                                                }
                                                else{
                                                   echo '<option value="'
                                                .$row1["course_id"].'">'.$row1["course_name"].'</option>'; 
                                                }
                                                
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">

                                    <div class="form-group">
                                        <div class="form-line">
                                             <h5>Enter sub course</h5>
                                            
                                            <input type="text" class="form-control"
                                            name="sub_course_name"
                                            value="<?php echo $row['sub_course_name'];?>" placeholder="Enter subcourse" />
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <label class="form-label">Select Image</label>

                                        <div class="form-line">
                                        <input type="file" name="img"
                                        class="form-control" />
                                        <?php echo $row['img'];?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                             <h5>Description</h5>                                 
                                            <textarea rows="4" name="description" class="form-control no-resize"  
                                            placeholder="Add description about subcourse ...">
                                            <?php echo $row['description'];?>
                                                
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                             <h5>More Description</h5>
                                            <textarea rows="4" name="more_description" class="form-control no-resize" ><?php echo $row['more_description'];?>
                                            </textarea>
                                        </div>
                                    </div>
                                    
                                    <input class="btn btn-primary" type="submit" name="add" value="Update">
                                    </input>
                                </div>  
                        </form>
                    </div>                     
               
    
     </div>
    </section>
<?php
    include ('footer.php');
?>

