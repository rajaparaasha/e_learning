<?php

    if (isset($_POST['submit'])) {
        
    include('conn.php');
    $email = $_POST['email'];
    $unm =$_POST['unm'];
    $pwd = md5($_POST['pwd']);
    $user = $_POST['user'];

    
    if ($user == 'Visitor') 
    {
        $sql_ins = "INSERT INTO tbl_quiz_user (`username`, `pwd`, `email`, `created_at`) VALUES ('$unm','$pwd', '$email', NOW())";
        // echo $sql_ins;
        $result = mysqli_query($conn, $sql_ins);

    }
    else
    {
        $sql_ins = "INSERT INTO tbl_blog_user (`blog_fname`, `pwd`, `email`, `created_at`) VALUES ('$unm','$pwd', '$email', NOW())";
        // echo $sql_ins;
        $result = mysqli_query($conn, $sql_ins);
        
    }
        header("location:login.php");
        echo '<script> alert("Thank you for Registration...!!")</script>';
        // header('location:login.php');

}
    include ('header.php');
?>
    <!-- Start Login 
    ============================================= -->
    
    <div class="login-area default-padding">
        <div class="container" >
            <div class="row">
                <div class="col-md-6 col-md-offset-3" style="margin-top: 30px">
                    <form  method="post">
                        <div class="login-custom">
                            <div class="heading">
                                <h4><i class="fas fa-edit"></i> Register Now</h4>
                            </div>
                             <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <select name="user">
                                            <option>::User Like::</option>
                                            <option value="Visitor">Visitor</option>
                                            <option value="Blogger">Blogger</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Email*" type="email" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Username*" type="text" name="unm">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password*" type="Password" name="pwd">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <input type="submit" name="submit" class="btn btn-warning">
                                </div>
                            </div>
                            <p class="link-bottom">Are you a member? <a href="login.php">Login now</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Login Area -->

<?php
 
    include ('footer.php');
    // header('location:login.php');

?>