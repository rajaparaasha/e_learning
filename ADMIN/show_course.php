<?php
    include('header.php');
    include('sidemenu.php');
?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    SHOW COURSE
                    <small>All Course View</small>
                </h2>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                View Course
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="course.php">Add Course</a></li>
                                         <!-- <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li> --> 
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Action</th>
                                            <th>Id</th>
                                            <th>Course Name</th>
                                            <th>Image</th>
                                        </tr>
                                    </thead>        
                                    <tfoot>
                                         <tr>
                                            <th>Action</th>
                                            <th>Id</th>
                                            <th>Course Name</th>
                                            <th>Image</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
        <?php
            include ('connection.php');
            $result = mysqli_query($conn,"SELECT * FROM tbl_course");
            $i = 1;
            while ($row =mysqli_fetch_array($result)) 
                
            {
                echo '<tr>';
                 echo '<td>
                        <a href="course_update.php?id='.$row['course_id'].'" title="Edit"><i class="fa fa-edit fa-fw text-success"
                         aria-hidden="true"></i></a>                                
                                      
                        <a href="#" main-id="'.$row['course_id'].'"   
                              class="delete" table="tbl_course" col_nm="course_id"
                        fileName="show_course.php">
                        <i class="fa fa-times fa-fw text-danger" aria-hidden="true"></i>
                        </a>

                        </td>';
                echo '<td>'.$i++.'</td>';
                echo '<td>'.$row['course_name'].'</td>';
                echo '<td><img src="course_photo/'.$row['img'].'" 
                width="50px" height="50px">.</td>';
                echo '</tr>';            
                             
            }
        ?>
         
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
        </div>
    </section>

    <!-- Modal For Update Course -->
      
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Course</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group form-float">
                    <div class="form-line">
                        <label for="recipient-name" class="col-form-label">Course Name</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label for="recipient-name" class="col-form-label">Select Image</label>
                                     <input type="file" class="form-control" id="message-text">
                             </div>
                        </div>
                     </div>   
                    <div class="col-sm-4">
                    <img src="images/user.png" class="img">
                    </div>
                </div>       
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="update" class="btn btn-primary">Update</button>
              </div>
            </div>
          </div>
        </div>
        
        
<?php
    include('footer.php');
?>    