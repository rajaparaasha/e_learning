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
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/flaticon-set.css" rel="stylesheet">
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/bootsnav.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800" rel="stylesheet">

</head>

<body>

    <!-- Preloader Start -->
    <!-- <div class="se-pre-con"></div> -->
    <!-- Preloader Ends -->

    <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area bg-dark inc-border text-light">
        <div class="container">
            <div class="row">
                
                <div class="col-md-8 address-info text-left">
                    <div class="info">
                        <ul>
                            <li>
                                <i class="fas fa-copy"></i> Total courses: 
                                <?php 
                                    include 'conn.php';
                                    $res = mysqli_query($conn, "SELECT count(*) as count FROM tbl_course");
                                    $r = mysqli_fetch_array($res);
                                    echo '<strong>'.$r['count'].'</strong>';
                                ?>
                            </li>
                            <li>
                                <i class="fas fa-user-shield"></i> Blog: 
                                <?php 
                                    include 'conn.php';
                                    $res = mysqli_query($conn, "SELECT count(*) as count FROM tbl_blog_detail");
                                    $r = mysqli_fetch_array($res);
                                    echo '<strong>'.$r['count'].'</strong>';
                                ?>
                            </li>
                            <li>
                                <i class="fas fa-phone"></i> Help Line: <strong>+123 456 7890</strong>
                            </li>
                        </ul>
                    </div>
                </div>

                <?php 
                    if(!isset($_SESSION['email'])){
                        echo '<div class="col-md-4 link text-right">
                                <ul>
                                    <li>
                                        <a href="register.php">Register</a>
                                    </li>
                                    <li>
                                        <a href="login.php">Login</a>
                                    </li>
                                </ul>
                            </div>   ';
                    }else{
                        echo '<div class="col-md-4 link text-right">
                                <ul>
                                    <li>
                                        <a href="blog_dashboard.php">Blogger Dashboard</a>
                                    </li>
                                </ul>
                            </div>   ';
                    }
                ?>             
            </div>
        </div>
    </div>
    <!-- End Header Top -->

     <!-- Header 
    ============================================= -->
    <header>
        <div class="container">
            <div class="row">
                <!-- Start Navigation -->
                <nav id="mainNav" class="navbar navbar-default navbar-fixed white bootsnav on no-full nav-box no-background">
                    <!-- Start Top Search -->
                    <div class="top-search">
                        <div class="container">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                            </div>
                        </div>
                    </div>
                    <!-- End Top Search -->

                    <div class="container">            

                        <!-- Start Header Navigation -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                                <i class="fa fa-bars"></i>
                            </button>
                            <a class="navbar-brand" href="index.php"><img src="assets/img/logo1.png" alt="Logo" width="50%" height="20px"></a>
                        </div>
                        <!-- End Header Navigation -->

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="navbar-menu">
                            <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                                <li class="dropdwn">
                                    <a href="index.php" class="dropdown-toggle" data-toggle="dropdown" style="font-weight: bolder; font-size: 13px;">Home</a>
                                   <!--  <ul class="dropdown-menu">
                                        <li><a href="index.html">Home Version One</a></li>
                                        <li><a href="index-2.html">Home Version Two</a></li>
                                    </ul> -->
                                </li>
                                <li class="dropdwn">
                                    <a href="about.php" class="dropdown-toggle" data-toggle="dropdown" style="font-weight: bolder; font-size: 13px;">About Us</a>
                                   <!--  <ul class="dropdown-menu">
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="gallery.html">Gallery</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="404.html">Error Page</a></li>
                                    </ul> -->
                                </li>
                                <li class="dropdwn">
                                    <a href="courses.php" class="dropdown-toggle" data-toggle="dropdown"  style="font-weight: bolder; font-size: 13px;">Courses</a>
                                    <!-- <ul class="dropdown-menu">
                                        <li><a href="courses-grid.html">Course Grid</a></li>
                                        <li><a href="courses-carousel.html">Course Carousel</a></li>
                                        <li><a href="course-details.html">Course Details</a></li>
                                    </ul> -->
                                </li>
                                <!-- <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Teachers</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="advisor-carousel.html">Advisor Carousel</a></li>
                                        <li><a href="advisor-grid.html">Advisor Grid</a></li>
                                        <li><a href="advisor-details.html">Advisor Details</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Event</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="event-1.html">Event Version One</a></li>
                                        <li><a href="event-2.html">Event Version Two</a></li>
                                    </ul>
                                </li> -->
                                <li class="dropdwn">
                                    <a href="blog.php" class="dropdown-toggle" data-toggle="dropdown" style="font-weight: bolder; font-size: 13px;">Blog</a>
                                    <!-- <ul class="dropdown-menu">
                                        <li><a href="blog-standard.html">Blog Standard</a></li>
                                        <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                        <li><a href="blog-single.html">Blog Single Standard</a></li>
                                        <li><a href="blog-single-left-sidebar.html">Single Left Sidebar</a></li>
                                        <li><a href="blog-single-right-sidebar.html">Single Right Sidebar</a></li>
                                    </ul> -->
                                </li>
                                <li>
                                    <a href="feedback.php" style="font-weight: bolder; font-size: 13px;">Feedback</a>
                                </li>
                                <?php 
                                    if(isset($_SESSION['email'])){
                                        echo ' <li>
                                                    <a href="logout.php" style="font-weight: bolder; font-size: 13px;">Logout</a>
                                                </li>';
                                    }
                                ?>
                               

                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div>   
                    
                </nav>
                <!-- End Navigation -->
                
            </div>
        </div>
    </header>
    </header>
    <!-- End Header -->
