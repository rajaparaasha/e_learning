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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
    <script type="text/javascript">
            var doc = new jsPDF();
            var specialElementHandlers = {
                '#editor': function (element, renderer) {
                    return true;
                }
            };

            $('#cmd').click(function () {
                doc.fromHTML($('#content').html(), 15, 15, {
                    'width': 170,
                        'elementHandlers': specialElementHandlers
                });
                doc.save('sample-file.pdf');
            });
    </script>
</head>
<body>
<center>
      <div style="width:800px; height:650px; padding:15px; text-align:center; border: 10px solid #002147" id="content">
            <div style="width:750px; height:600px; padding:20px; text-align:center; border: 5px solid #ffb606">
                  <img src="assets/img/logo1.png" alt="Logo" width="50%" height="10%">
                  
                  <span style="font-size:50px; font-family: Monotype corsiva; font-weight:bold"><h3>Certificate of Completion</h3></span>
                  <span style="font-size:25px"><i>This is to certify that</i></span>
                  <br><br>
                        <?php
                            include('conn.php');
                            $id = $_GET['id'];
                            $res = mysqli_query($conn, "SELECT * FROM tbl_quizuser_marks as m INNER JOIN tbl_quiz_user as u INNER JOIN tbl_sub_course as c WHERE m.user_id = u.user_id AND c.sub_course_id = m.sub_course_id AND m.mark_id = $id");
                            $row = mysqli_fetch_array($res);
                        ?>
                        <span style="font-size:30px"><u><b><?php echo ucwords($row['username']); ?></b></u></span><br/><br/>
                        <span style="font-size:25px"><i>has completed the course</i></span> <br/><br/>
                        <span style="font-size:30px"><?php echo strtoupper($row['sub_course_name']); ?></span> <br/><br/>
                        <span style="font-size:20px">with score of <b><?php echo $row['obtain_marks'] * 100 / $row['total_marks']; ?> %</b></span> <br/><br/><br>
                        <span style="font-size:25px"><i>dated</i></span><br>
                        <span style="font-size:30px">Date : <?php $date ="29/9/2021"; echo $date; ?></span>
            </div>
      </div>
      <!-- <div id="editor"></div>
      <button id="cmd">generate PDF</button> -->
</center>
 </body>
 </html>