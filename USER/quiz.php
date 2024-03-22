<?php
    session_start();
    if(!isset($_SESSION['user_id'])){
        header("location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Edocom - Education & LMS Template">

    <!-- ========== Page Title ========== -->
    <title>LEARNZILLA | E_Learning System</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
     <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800" rel="stylesheet">
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <!-- Quiz Js -->
    <script src="assets/js/quiz.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-11"><img src="assets/img/logo1.png" alt="Logo" width="30%" height="30%"></div>
            <div class="col-lg-1" style="margin-top: 10px;"><a href="logout.php" class="btn btn-primary btn-sm">Home</a></div>
        </div>
        <hr>
        <!-- Select Course -->
        <div class="row" id="course_list">
            <form method="post">
                <div class="col-lg-6">
                    <div class="form-group">
                        <select name="course_id" class="form-control">
                           <option>--Select Course--</option>
                           <?php
                                include ('conn.php');
                                $sql_sel = "SELECT * FROM tbl_sub_course";
                                $result = mysqli_query($conn, $sql_sel);

                                while ($row = mysqli_fetch_array($result)) 
                                {
                                    echo '<option value="'.$row['sub_course_id'].'">'.$row['sub_course_name'].'</option>';
                                }
                           ?> 
                       </select>
                    </div>
                </div>
               <div class="col-lg-6">
                   <input type="submit" name="course" value="Start Quiz" class="btn btn-info" id="lick_quiz_btn">    
                   <label id="view_note" class="text-danger"></label>   <hr>           
               </div>
            </form>
        </div>

        <form method="post" action="quiz_result.php">
        <!-- All Selected Quiz Questions -->
        <?php
            if(isset($_POST['course'])){
                $course_id = $_POST['course_id'];
                
                include('conn.php');
                $result = mysqli_query($conn, "SELECT * FROM tbl_quiz WHERE sub_course_id = $course_id");
                
                echo '<ul style="list-style-type: none">';
                    $i= 0;
                while($row = mysqli_fetch_array($result)){
                    $i++;
                    echo '<li style="font-weight: bold;font-size: 18px;">'.$i .'. '.$row['question'].'</li>';
                    echo '<li><input type="radio" name="opt'.$i.'" class="que_ans" value="'.$row['ans_1'].'">'.' '.$row['ans_1'].'</li>';
                    echo '<li><input type="radio" name="opt'.$i.'" class="que_ans" value="'.$row['ans_2'].'">'.' '.$row['ans_2'].'</li>';
                    echo '<li><input type="radio" name="opt'.$i.'" class="que_ans" value="'.$row['ans_3'].'">'.' '.$row['ans_3'].'</li>';
                    echo '<li><input type="radio" name="opt'.$i.'" class="que_ans" value="'.$row['ans_4'].'">'.' '.$row['ans_4'].'</li>';
                    echo '<input type="hidden" name="ans'.$i.'" class="right_ans" value="'.$row['right_ans'].'" ><hr>';
                }
            echo '</ul>';
            echo '<input type="hidden" name="que_no" value="'.$i .'" >';
            echo '<input type="hidden" name="course" value="'.$_POST['course_id'].'" >';
            echo '<input type="submit" name="get_result" value="Get Result" class="btn btn-warning">&nbsp;';
            
            }
        ?>
    </div>
</form>
</body>
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){

            $("#result").click(function(){
                var check = true;
                $("input:radio").each(function(){
                    var name = $(this).attr("name");
                    if($("input:radio[name="+name+"]:checked").length == 0){
                        check = false;
                    }
                });

                
                if(check){
                    alert('One radio in each group is checked.');
                }else{
                    alert('Please select one option in each question.');
                }

            });
        });
    </script>
    <script src="assets/js/bootstrap.min.js"></script>
</html>

