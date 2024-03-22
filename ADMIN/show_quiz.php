<?php
    include('header.php');

    include('sidemenu.php');
?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    SHOW QUIZ
                    <small class="text-capitalize">Add Quiz View</small>
                </h2>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Quiz
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="manage_quiz.php">Add Quiz
                                        </a></li>
                                        <li><a href="show_quizuser.php">Show Quiz User</a></li>
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
                                            <th>Question</th>
                                            <th>Answer 1</th>
                                            <th>Answer 2</th>
                                            <th>Answer 3</th>
                                            <th>Answer 4</th>
                                            <th>Right Answer</th>                                         
                                        </tr>
                                    </thead>
                                    <tfoot>
                                         <tr>
                                            <th>Action</th>
                                            <th>No.</th>
                                            <th>Question</th>
                                            <th>Answer 1</th>
                                            <th>Answer 2</th>
                                            <th>Answer 3</th>
                                            <th>Answer 4</th>
                                            <th>Right Answer</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                <?php

                    include('connection.php');
                    $result = mysqli_query($conn,"SELECT * FROM tbl_quiz");
                    $i=1;
                    while ($row=mysqli_fetch_array($result)) 
                    {
                        echo '<tr>';
                        echo '<td>
                            <a href="quiz_update.php?id='.$row['quiz_id'].'"
                            title = "edit"><i class="fa fa-edit fa-fw text-success" aria-hidden="true"></i>
                            </a>   

                            <a href="#" main-id="'.$row['quiz_id'].
                        '"class="delete" table="tbl_quiz" col_nm="quiz_id"
                        fileName="show_quiz.php">
                        <i class="fa fa-times fa-fw text-danger" aria-hidden="true"></i>
                        </a>                             
                
                        </td>'; 

                    echo '<td>'.$i++.'</td>';
                    echo '<td>'.$row['question'].'</td>';
                    echo '<td>'.$row['ans_1'].'</td>';
                    echo '<td>'.$row['ans_2'].'</td>';
                    echo '<td>'.$row['ans_3'].'</td>';
                    echo '<td>'.$row['ans_4'].'</td>';
                    echo '<td>'.$row['right_ans'].'</td>';

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
      
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Quiz</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                 </button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group form-float">
                    <div class="form-line">
                        <label>Select Course:</label>
                            <select name="select course" class="form-control show-tick">
                                <option value="html">Html</option>
                                <option value="C#">C#</option>
                                <option value="C++">C++</option>
                                <option value="php">PHP</option>
                            </select>
                    </div>
                 </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label for="recipient-name" class="col-form-label">Question</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label for="recipient-name" class="col-form-label">Answer 1</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                    </div>    
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label for="recipient-name" class="col-form-label">Answer 2</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label for="recipient-name" class="col-form-label">Answer 3</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                    </div>    
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label for="recipient-name" class="col-form-label">Answer 4</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                    </div>
                    <div class="form-group form-float">    
                        <div class="form-line">
                            <label for="recipient-name" class="col-form-label">Right Answer</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                    </div>    

                </div>
                </form>
              
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