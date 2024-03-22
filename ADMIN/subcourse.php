<?php
        include('header.php');

        include ('sidemenu.php');
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
                                            $res = mysqli_query($conn,"SELECT * FROM tbl_course");
                                            while ($row = mysqli_fetch_array($res))
                                            {
                                                echo '<option value="'
                                                .$row["course_id"].'">'.$row["course_name"].'</option>';
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
                                            name="sub_course_name" placeholder="Enter subcourse" />
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <label class="form-label">Select Image</label>

                                        <div class="form-line">
                                        <input type="file" name="img" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                             <h5>Description</h5>                                 
                                            <textarea rows="4" name="description" class="form-control no-resize" placeholder="Add description about subcourse ..."></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                             <h5>More Description</h5>
                                            <textarea rows="4" name="more_description" class="form-control no-resize" placeholder="Add more description...">
                                            </textarea>
                                        </div>
                                    </div>
                                    
                                    <input class="btn btn-primary" type="submit" name="add" value="ADD">
                                    </input>
                                </div>  
                        </form>
                    </div>                     
               
    <?php

        if (isset($_POST['add'])) 
        {
            $course_id = $_POST['course_id'];
            $sub_course_name = $_POST['sub_course_name'];
            $description = $_POST['description'];
            $more_description = $_POST['more_description'];

            $img = $_FILES['img']['name'];
            $temp_name = $_FILES['img']['tmp_name'];    

            move_uploaded_file($temp_name,"subcourse_photo/".$img);
          

            include('connection.php');

            $sql_ins = "INSERT INTO tbl_sub_course(`course_id`,`sub_course_name`
            ,`img`,`description`,`more_description`,`created_at`)
            VALUES($course_id,'$sub_course_name','$img' ,'$description','$more_description',NOW())";

            //echo $sql_ins;
            $result = mysqli_query($conn,$sql_ins);

            if ($result > 0) 
            {
               //header('location:show_subcourse.php');
                echo '<script>Record Inserted...</script>';
            }

           
        }

    ?>
     </div>
    </section>
<?php
    include ('footer.php');
?>

