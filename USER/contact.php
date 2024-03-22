<?php
    include ('header.php');
?>
    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(assets/img/banner/12.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1 style="margin-top: 45px;">Contact Us</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Page</a></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Contact Info
    ============================================= -->
    <div class="contact-info-area default-padding">
        <div class="container">
            <!-- Start Contact Info -->
            <div class="contact-info text-center">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-call"></i>
                            </div>
                            <div class="info">
                                <h4>Call Us</h4>
                                <span>+324 119 2343</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-location"></i>
                            </div>
                            <div class="info">
                                <h4>Address</h4>
                                <span>California, TX 70240</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-email"></i>
                            </div>
                            <div class="info">
                                <h4>Email Us</h4>
                                <span>info@yourdomain.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Contact Info -->
            
            <div class="row contact-bottom-info">
                <!-- Start Maps & Contact Form -->
                <div class="maps-form">
                    <div class="col-md-6 maps">
                        <h4>Our Location</h4>
                        <div class="google-maps">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14767.262289338461!2d70.79414485000001!3d22.284975!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1424308883981"></iframe>
                        </div>
                    </div>
                    <div class="col-md-6 form">
                        <div class="heading">
                            <h4>Contact Us</h4>
                        </div>
                        <form action="assets/mail/contact.php" method="POST" class="contact-form">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="comments" placeholder="Tell Me About Courses *"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <!-- <button type="submit" name="submit" id="submit"> -->
                                    <!-- <input type="submit" name = "submit" class="btn btn-outline-warning"> -->
                                        <!-- Send Message <i class="fa fa-paper-plane"></i> -->
                                    <input type="submit" name="submit" value="Send Message">

                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-md-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End Maps & Contact Form -->

            </div>
        </div>
    </div>
    <!-- End Contact Info -->
<?php
    
    if (isset($_POST['submit'])) {
        
    include('connection.php');
    $name = $_POST['name'];
    $email =$_POST['email'];
    $phone = $_POST['phone'];
    $comments = $_POST['comments'];

    $sql_ins = "INSERT INTO tbl_contact (`name`, `email`, `phone`, `comments`, `created_at`) VALUES ('$name', '$email', '$phone', '$comments', NOW())";

    $result = mysqli_query($conn, $sql_ins);

    if ($result >0 )
    {
        echo "Row Inserted...";
    }
    else
    {
        echo "Row not Inserted....";
    }

}
    include ('footer.php');

?>


