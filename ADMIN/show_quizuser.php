<?php
    include('header.php');

    include('sidemenu.php');
?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    SHOW QUIZ USER
                    <small>Add Quiz User View</small>
                </h2>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Quiz User
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="manage_quiz.php">Add Quiz
                                        </a></li>
                                        <li><a href="show_quiz.php">Show Quiz</a></li>
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
                                            <th>Name</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                         <tr>
                                            <th>Action</th>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Email</th>

                                        </tr>
                                    </tfoot>
                                    <tbody>
                                         <?php
                                            include ('connection.php');
                                            $result = mysqli_query($conn,"SELECT * FROM tbl_quiz_user");
                                             while (mysqli_fetch_array($result))
                                              
                                             {
                                                echo '<tr>';
                                                echo '<td>
                                            <a href="#" main-id="'.$row['user_id'].
                                             '"class="delete" table="tbl_quiz_user" col_nm="user_id"
                                                 fileName="show_quiz.php">
                                           <i class="fa fa-times fa-fw text-danger" aria-hidden="true"></i>
                                            </a> 

                                                
                                                      </td>';
                                                echo '<td>'.$row['username'].'</td>';
                                                echo '<td>'.$row['email'].'<td>';        

                                                 echo '</tr>';
                                             }    
                                        ?>
                                        <tr>
                                            <td><a href="#" data-target = "#exampleModal" data-toggle="modal" data-whatever="@mdo"></a>
                                                 <i class="fa fa-times fa-fw text-danger" aria-hidden="true"></i>
                                            </td>
                                            <td>1</td>
                                            <td>rima</td>
                                            <td>rima@gmail.com</td>

                                        </tr>
                                        
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
<?php
    include('footer.php');
?>    