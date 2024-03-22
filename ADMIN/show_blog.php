<?php
    include('header.php');

    include('sidemenu.php');
?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    SHOW BLOG
                    <small> Blog Category View</small>
                </h2>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Blog Category
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="blog_category.php">Add Blog Category
                                        </a></li>
                                        
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
                                            <th>Blog Category Name</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                         <tr>
                                            <th>Action</th>
                                            <th>Id</th>
                                            <th>Blog Category Name</th>
                                            </tr>
                                    </tfoot>
                                    <tbody>
                        <?php
                            include('connection.php');  
                            $result = mysqli_query($conn,"SELECT * FROM tbl_blog_cat");
                            
                            $i=1;
                            while ($row = mysqli_fetch_array($result)) 
                            {
                                

                                echo '<tr>';
                                                echo '<td>
                                                <a href="#" main-id="'.$row['blog_cat_id'].
                                             '"class="delete" table="tbl_blog_cat" col_nm="blog_cat_id"
                                                 fileName="show_blog.php">
                                           <i class="fa fa-times fa-fw text-danger" aria-hidden="true"></i>
                                            </a> 

                                                      </td>';
                                            echo '<td>'.$i++.'</td>';
                                            echo '<td>'.$row['cat_nm'].'</td>';
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
                <h5 class="modal-title" id="exampleModalLabel">Edit Blog</h5>
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
                <button type="button" class="btn btn-primary">Update</button>
              </div>
            </div>
          </div>
        </div>
<?php
    include('footer.php');
?>    