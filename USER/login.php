   <?php
        
        if (isset($_POST['login'])) 
        {
            include ('conn.php');
            $user = $_POST['user'];
            $email = $_POST['email'];
            $pwd = md5($_POST['pwd']);
            
            // error_reporting(0);

            if($user == 'Visitor')
            {
                $sql_sel = "SELECT * FROM tbl_quiz_user WHERE email = '$email' AND pwd = '$pwd'";
                $result = mysqli_query($conn,$sql_sel);
                $row = mysqli_fetch_array($result);
                 if($row > 0)
                {
                    session_start();
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['user_id'] = $row['user_id'];
                    echo '<script> alert("Login Sucessfully done...!!")</script>';
                    header("location:quiz.php");
                }
                else{
                    echo '<script> alert("Not Valid Details..Try Again...!!")</script>';
                }

            }

            else{

                $sql_sel = "SELECT * FROM tbl_blog_user WHERE email = '$email' AND pwd = '$pwd'";
                $result = mysqli_query($conn,$sql_sel);
                $row = mysqli_fetch_array($result);
                // echo $row['email'];
                // echo $sql_sel;
                if($row > 0)
                {
                    session_start();
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['blog_user_id'] = $row['blog_user_id'];
                    echo '<script> alert("Login Sucessfully...!!")</script>';
                    // echo $_SESSION['email'];
                    header("location:blog_dashboard.php");
                }
                else{
                    echo '<script> alert("Not Valid Details..Try Again...!!")</script>';
                }
            }
        }
        include ('header.php');
   ?>
    <!-- Start Login 
    ============================================= -->
    <div class="login-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3" style="margin-top: 30px">
                    <form  id="login-for" method = "POST" class="white-popup-block">
                        <div class="login-custom">
                            <div class="heading">
                                <h4><i class="fas fa-sign-in-alt"></i> login Now</h4>
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
                                        <input class="form-control" placeholder="Email*" type="email" required="" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password*" type="password" required="" name="pwd">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <label for="login-remember"><input type="checkbox" id="login-remember">Remember Me</label>
                                    <a title="Lost Password" href="#" class="lost-pass-link">Lost your password?</a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <!-- <button type="submit" name="login"> Login</button> -->
                                    <input type="submit" name="login" value="LOGIN" class="btn btn-md btn-warning">
                                </div>
                            </div>
                            <p class="link-bottom">Not a member yet? <a href="#">Register now</a></p>
                        </div>
                        <div class="login-social">
                            <h4>Login with social</h4>
                            <ul>
                                <li class="facebook">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="twitter">
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="linkedin">
                                    <a href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Login Area -->
<?php
    include ('footer.php');
?>