<?php
    include('header.php');

    include('sidemenu.php');
?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    SHOW SUB COURSE
                    <small class="text-capitalize">All Sub Course View</small>
                </h2>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                View Sub Course
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="subcourse.php">Add Subcourse
                                        </a></li>
                                        
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable" style="overflow: scroll;">
                                    <thead>
                                        <tr>
                                            <th>Action</th>
                                            <th>No.</th>
                                            <th>Sub Course Name</th>
                                            <th>Image</th>
                                            <th>Description</th>
                                            <th>More Description</th>
                                            <th>Course ID</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                         <tr>
                                            <th>Action</th>
                                            <th>No.</th>
                                            <th>Sub Course Name</th>
                                            <th>Image</th>
                                            <th>Description</th>
                                            <th>More Description</th>
                                            <th>Course ID</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                 <?php
            include ('connection.php');
            $result = mysqli_query($conn,"SELECT * FROM tbl_sub_course");
            $i=1;
            while ($row =mysqli_fetch_array($result)) 
            {
                echo '<tr>';
                echo '<td>
                        <a href="subcourse_update.php?id='.$row['sub_course_id'].'"  title="Edit"><i class="fa fa-edit fa-fw text-success" aria-hidden="true"></i></a>

                        <a href="#" main-id="'.$row['sub_course_id'].
                        '"class="delete" table="tbl_sub_course" col_nm="sub_course_id"
                        fileName="show_subcourse.php">
                        <i class="fa fa-times fa-fw text-danger" aria-hidden="true"></i>
                        </a>             
                    </td>';

                echo '<td>'.$i++.'</td>';
                echo '<td>'.$row['sub_course_name'].'</td>';
                echo '<td><img src="subcourse_photo/'.$row['img'].'" 
                width="100px" height="100px">.</td>';
                echo '<td>'.$row['description'].'</td>';
                echo '<td>'.$row['more_description'].'</td>';
                echo '<td>'.$row['course_id'].'</td>';

                echo '</tr>';
                
            }
        ?>                      <!-- <a href="show_subcourse_delete.php?id='.$row['course_id']
                        .'&file='.$row['img'].'" title="Delete"
                        <i class="fa fa-times fa-fw text-danger" aria-hidden="true"></i></a> -->
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
                <h5 class="modal-title" id="exampleModalLabel">Edit Sub Course</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group form-float">
                    <div class="form-line">
                        <label for="recipient-name" class="col-form-label">Sub Course Name</label>
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
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label for="recipient-name" class="col-form-label">Description</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                    </div>

                     <div class="form-group form-float">
                        <div class="form-line">
                            <label for="recipient-name" class="col-form-label">More Description</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                    </div>

                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Update</button>
              </div>
            </div>
          </div>
        </div>
        
<?php
    include('footer.php');
?>    