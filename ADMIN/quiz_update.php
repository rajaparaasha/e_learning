  <?php
        $id = $_GET['id'];
        if (isset($_POST['add'])) 
        {
            $sub_course_id = $_POST['sub_course_id'];
            $question = $_POST['question'];
            $ans_1 = $_POST['ans_1'];
            $ans_2 = $_POST['ans_2'];
            $ans_3 = $_POST['ans_3'];
            $ans_4 = $_POST['ans_4'];
            $right_ans = $_POST['right_ans'];

            include ('connection.php');
                            
            $sql_edit = "UPDATE tbl_quiz SET `sub_course_id`= $sub_course_id
                            `question` = '$question',`ans_1` = '$ans_1',`ans_2`=
                            '$ans_2',`ans_3`='$ans_3',`ans_4` = $ans_4,
                            `right_ans` = '$right_ans' WHERE quiz_id = $id";
                          // echo $sql_edit;
                            $result  = mysqli_query($conn,$sql_edit);


                            if ($result > 0) 
                            {
                                header('location:show_quiz.php');

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
    $sql_row = "SELECT * FROM tbl_quiz WHERE quiz_id = $id";

    $res = mysqli_query($conn,$sql_row);
    $row = mysqli_fetch_array($res);
?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    MANAGE QUIZ
                    <small class="text-capitalize">Edit questions and answers..</small>
                </h2>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>EDIT QUIZ</h2>
                            
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="show_quiz.php">Show Quiz</a></li>
                                        <li><a href="show_quizuser.php">Show Quiz User</a></li>
                                        
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">

                            <form id="form_validation" method="POST" enctype="multipart/form-data">
                              <h2 class="card-inside-title">Select Sub Course</h2>
                              <div class="row clearfix">
                                <div class="col-sm-12">
                                    <select class="form-control" name="sub_course_id">
                                        <option value="">-- Please select Sub Course --</option>
                                        <?php
                                            include ('connection.php');
                                            $res = mysqli_query($conn,"SELECT * FROM tbl_sub_course");
                                            while ($row1= mysqli_fetch_array ($res1))

                                            {
                                                if($row['sub_course_id'] == $row1
                                                    ['sub_course_id'])
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
                                            <h5>Enter Question</h5>
                                            <input type="text" name="question" class="form-control" 
                                            placeholder="Enter Question" />
                                            <?php echo $row['question'];?>                      
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h5>Answer 1</h5>
                                            <input type="text" name="ans_1"
                                             class="form-control"/>
                                             <?php echo $row['ans_1'];?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h5>Answer 2</h5>
                                            <input type="text" name="ans_2"
                                            class="form-control"/>
                                            <?php echo $row['ans_2'];?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h5>Answer 3</h5>
                                            <input type="text" name="ans_3"
                                             class="form-control"/>
                                             <?php echo $row['ans_3'];?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h5>Answer 4</h5>
                                            <input type="text" name="ans_4"
                                             class="form-control"/>
                                             <?php echo $row['ans_4'];?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h5>Right Answer</h5>
                                            <input type="text" name="right_ans" 
                                            class="form-control"/>
                                            <?php echo $row['right_ans'];?>
                                      </div>
                                    </div>
                                                        
                                    <input class="btn btn-primary" type="submit" name="add" value="UPDATE">
                                    </input>
                                        
                            </div>  
                        </form>
                    </div>

                  
            </div>
    </section>
<?php
    include ('footer.php');
?>