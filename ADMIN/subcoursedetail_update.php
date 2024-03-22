<?php
    $id = $_GET['id'];
    if (isset($_POST['add_detail'])) 
    {
        $sub_course_id = $_POST['sub_course_id'];
        $subcourse_detail_name = $_POST['subcourse_detail_name'];
        $subcourse_detail_description = 
        $_POST['subcourse_detail_description'];

        $video = $_FILES['video']['name'];
        $temp_name = $_FILES['video']['tmp_name'];

        move_uploaded_file($temp_name,"video/".$video);

        include ('connection.php');

        $sql_edit = "UPDATE tbl_subcourse_detail SET `sub_course_id` = 
                  $sub_course_id,`subcourse_detail_name` = '$subcourse_detail_name',`subcourse_detail_description` =
                     '$subcourse_detail_description',
                     `video` = '$video' WHERE sub_course_id = $id";

                   echo $sql_edit;
        $result = mysqli_query($conn,$sql_edit);

        if ($result > 0) 
        {
            // header('location:show_subcoursedetail.php');
            //echo '<script>Record Inserted...</script>';
                
        }

            }
?>
<?php
    include('header.php');

    include ('sidemenu.php');

?>
<?php

    $id = $_GET['id'];
    include('connection.php');
    $sql_row = "SELECT * FROM tbl_subcourse_detail WHERE 
                                subcourse_detail_id = $id";

    $res = mysqli_query($conn,$sql_row);
    $row = mysqli_fetch_array($res);

?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    MANAGE SUB COURSE DETAIL
                    <small class="text-capitalize">Manage Sub Course from here...</small>
                </h2>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Add Sub Course Detail</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="show_subcoursedetail.php">
                                        Show Subcourse Detail</a></li>
                                        
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">

                            <form id="form_validation" method="POST"enctype="multipart/form-data">
                              <h2 class="card-inside-title">Select Sub Course</h2>
                              <div class="row clearfix">
                                <div class="col-sm-12">
                                    <select class="form-control" name="sub_course_id">
                                        <option value="">-- Please select Sub Course --</option>
                                        <?php
                                            include ('connection.php');
                                            $res1 = mysqli_query($conn,"SELECT * FROM tbl_sub_course");
                                            while ($row1 = mysqli_fetch_array($res1)) 
                                            {
                                                if($row['sub_course_id'] == $row1['sub_course_id'])
                                                {
                                                    echo '<option value="'
                                                    .$row1['sub_course_id'].'" selected>'
                                                    .$row1['sub_course_name'].'</option>';
                                                }
                                                else{
                                                      echo '<option value="'
                                                    .$row1['sub_course_id'].'">'
                                                    .$row1['sub_course_name'].'</option>';
                                                 
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
                                            <h5>Sub Course Title</h5>
                                            <input type="text" name="subcourse_detail_name" class="form-control
                                            " value="<?php echo $row['subcourse_detail_name'];?>"
                                             placeholder="Enter Sub Course Title" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h5>Description</h5>
                                            <input type="text" name="subcourse_detail_description" class="form-control" placeholder="Description..." />
                                            <?php echo $row['subcourse_detail_description'];?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h5>Select video</h5>
                                             <input type="file" name="video" class="form-control" placeholder="Video " />
                                             <?php echo $row['video'];?>
                                             
                                        </div>
                                    </div>
                                    <div>
                                        <div>
                                            <input class="btn btn-primary" type="submit" name="add_detail" 
                                            value="ADD DETAIL">
                                            </input>
                                                
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </form>
                    </div>
        </div>
    </section>
<?php
    include ('footer.php');
?>