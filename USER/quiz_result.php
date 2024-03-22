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
            <div class="col-lg-1" style="margin-top: 10px;"><a href="logut.php" class="btn btn-primary btn-sm">Home</a></div>
        </div>
        <hr>
        <!-- Select Course -->
        <div class="row" id="course_list">
            <form method="post">
                <div class="col-lg-6">
                    <?php
                if(isset($_POST['get_result'])){

                    $que_no = $_POST['que_no'];
                    $course = $_POST['course'];
                    //session_start();
                    $uid= $_SESSION['user_id'];
                    include('conn.php');
                    $res=mysqli_query($conn, "SELECT * FROM tbl_sub_course WHERE sub_course_id=$course");
                    $r = mysqli_fetch_array($res);
                    
                    $ans_count = 0;
                    for($i=1 ; $i <= $que_no; $i++){
                        $s = 'opt'.$i;
                        $a = 'ans'.$i;
                        $opt = $_POST[$s];
                        $ans = $_POST[$a];

                        if($opt == $ans){
                            $ans_count++;
                        }
                    }
                    // echo $ans_count;
                    $per = ($ans_count * 100 / $que_no);
                    $msg = '';
                    if($per == 100)
                    {
                        $msg ='Big Congratulations..!!';
                    }
                     elseif($per > 70 && $per < 50){
                        $msg ='Very Well Done...!!';
                    }else{
                        $msg = 'You must study much harder...!!';
                    }
                    echo '<div style="border:1px solid black;width:600px;height:350px;box-shadow:2px 2px 3px gray;padding:20px;font-size:20px;margin-left:200px">
                            <h1>'.$r['sub_course_name'].'  Quiz </h1>
                            <h3 style="text-align:center"> Result : </h3><br>
                            <p style="text-align:center"> '.$ans_count.' of '. $que_no.' </p>
                            <p style="text-align:center"><b>'.$per.' % </b></p>
                            <p style="text-align:center">'.$msg.' </p>
                    ';

                    $ins_sql = "INSERT INTO tbl_quizuser_marks(user_id, sub_course_id,total_marks,obtain_marks,created_at) values($uid, $course, $que_no, $ans_count, NOW())";
                    // echo $ins_sql;
                    $ins_id = mysqli_query($conn, $ins_sql);
                    $last_id = mysqli_insert_id($conn);

                    echo '<a href="certificate.php?id='.$last_id.'" class="btn btn-success">Get Certificate</a></div>';            
                }
            ?>
                </div>
            </div>

       
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</html>

