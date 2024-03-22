<?php
    include('header.php');

    include('sidemenu.php');
?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    SHOW FEEDBACK
                    <small>Add Feedback</small>
                </h2>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                             Feedback
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="dashbord.php">Home</a></li>
                                        
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
                                            <th>No.</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Comment</th>                          
                                        </tr>
                                    </thead>
                                    <tfoot>
                                         <tr>
                                            <th>Action</th>
                                            <th>No.</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Comment</th>                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                            include('connection.php');
                            $result = mysqli_query($conn,"SELECT * FROM tbl_feedback");
                            $i=1;
                            while ($row = mysqli_fetch_array($result)) 
                            {
                                echo '<tr>';
                                                echo '<td>
                                                <a href="#" main-id="'.$row['f_id'].
                                             '"class="delete" table="tbl_feedback" col_nm="f_id"
                                                 fileName="show_feedback.php">
                                           <i class="fa fa-times fa-fw text-danger" aria-hidden="true"></i>
                                            </a> 

                                                </td>';
                                                echo '<td>'.$i++.'</td>';
                                                echo '<td>'.$row['name'].'</td>';     
                                                echo '<td>'.$row['email'].'</td>';    
                                                echo '<td>'.$row['phone'].'</td>'; 
                                                echo '<td>'.$row['comments'].'</td>';
                                        
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
            
        </div>
    </section>
<?php
    include('footer.php');
?>    