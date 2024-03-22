<?php
    include ('header.php');
?>
    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area">
        <div id="bootcarousel" class="carousel text-light text-center top-pad text-dark slide animate_text" data-ride="carousel">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#bootcarousel" data-slide-to="0" class="active"></li>
                <li data-target="#bootcarousel" data-slide-to="1"></li>
            </ol>


            <!-- Wrapper for slides -->
            <div class="carousel-inner carousel-zoom">
                <div class="item active bg-cover" style="background-image: url(assets/img/banner/4.jpg);">
                    <div class="box-table">
                        <div class="box-cell shadow dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="content">
                                            <h2 data-animation="animated slideInDown">Learn from us and Accelerate <strong>Your Bright Future.</strong></h2>
                                            <p data-animation="animated slideInLeft">
                                                #Improving lives through learning
                                            </p>
                                            <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md" href="about.php">Learn more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item bg-cover" style="background-image: url(assets/img/banner/15.jpg);">
                    <div class="box-table">
                        <div class="box-cell shadow dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="content">
                                            <h2 data-animation="animated slideInDown">Learn From Best Online <strong>Training Course</strong></h2>
                                            <p data-animation="animated slideInLeft">
                                                #Improving lives through learning
                                            </p>
                                            <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md" href="#">Learn more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End Wrapper for slides -->

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#bootcarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#bootcarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start About 
    ============================================= -->
    <div class="about-area default-padding">
        <div class="container">
            <div class="row">
                <div class="about-items">
                    <div class="col-md-6 about-info">
                        <h2>Welcome ! <span>LEARNZILLA e_Learning System</span></h2>
                        <blockquote>
                            A man who has never gone to school may steal from a freight car; but if he has a university education, he may steal the whole railroad.
                        </blockquote>
                        <div class="semester-apply">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 item">
                                    <h4>About US</h4>
                                    <p>
                                        Affection additions nay. He no an nature ye talent houses wisdom.Affection additions nay. He no an nature ye talent houses wisdom.
                                    </p>
                                    <a class="btn btn-dark effect btn-sm" href="#"><i class="fas fa-angle-right"></i> Learn More</a>
                                </div>
                                <!-- <div class="col-md-6 col-sm-6 item">
                                    <h4>Scholarship</h4>
                                    <p>
                                        Northward affection additions nay. He no an nature ye talent houses.
                                    </p>
                                    <a class="btn btn-dark effect btn-sm" href="#"><i class="fas fa-angle-right"></i> Apply Now</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 features text-light">
                        <div class="row">
                            <div class="equal-height col-md-6 col-sm-6">
                                <div class="item mariner">
                                    <a href="#">
                                        <div class="icon">
                                            <i class="ti-panel"></i>
                                        </div>
                                        <div class="info">
                                            <?php 
                                                include 'conn.php';
                                                $res = mysqli_query($conn, "SELECT count(*) as count FROM tbl_course");
                                                $r = mysqli_fetch_array($res);
                                                echo '<h2>'.$r['count'].'</h2>';
                                            ?>
                                            <h4>Courses</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="equal-height col-md-6 col-sm-6">
                                <div class="item brilliantrose">
                                    <a href="#">
                                        <div class="icon">
                                            <i class="ti-ruler-pencil"></i>
                                        </div>
                                        <div class="info">
                                            <?php 
                                                include 'conn.php';
                                                $res = mysqli_query($conn, "SELECT count(*) as count FROM tbl_sub_course");
                                                $r = mysqli_fetch_array($res);
                                                echo '<h2>'.$r['count'].'</h2>';
                                            ?>
                                            <h4>Sub Courses</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="equal-height col-md-6 col-sm-6">
                                <div class="item casablanca">
                                    <a href="#">
                                        <div class="icon">
                                            <i class="ti-server"></i>
                                        </div>
                                        <div class="info">
                                            <?php 
                                                include 'conn.php';
                                                $res = mysqli_query($conn, "SELECT count(*) as count FROM tbl_quiz_user");
                                                $r = mysqli_fetch_array($res);
                                                echo '<h2>'.$r['count'].'</h2>';
                                            ?>
                                            <h4>Users</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="equal-height col-md-6 col-sm-6">
                                <div class="item malachite">
                                    <a href="#">
                                        <div class="icon">
                                            <i class="ti-desktop"></i>
                                        </div>
                                        <div class="info">
                                            <?php 
                                                include 'conn.php';
                                                $res = mysqli_query($conn, "SELECT count(*) as count FROM tbl_blog_detail");
                                                $r = mysqli_fetch_array($res);
                                                echo '<h2>'.$r['count'].'</h2>';
                                            ?>
                                            <h4>Blogs</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start Categories 
    ============================================= -->
    <div class="category-area bg-gray default-padding" style="margin-bottom: -250px">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Top Course</h2>
                        <p>
                            Discourse assurance estimable applauded to so. Him everything melancholy uncommonly but solicitude inhabiting projection off. Connection stimulated estimating excellence an to impression. 
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- End Categories -->
    
    <!-- Start Popular Courses
    ============================================= -->
    <div class="popular-courses-area weekly-top-items default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="top-course-items">
                    <!-- Single Item -->
                    <?php
                        include ('conn.php');
                        $sql_sel = "SELECT * FROM tbl_course";
                        $result = mysqli_query($conn, $sql_sel);

                        while ($row = mysqli_fetch_array($result)) 
                        {
                               
                        ?>
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="thumb">
                                <img src="../admin/course_photo/<?php echo $row['img']; ?>" alt="Thumb" class="img" width="360px" height="270px">

                                <div class="overlay">
                                    <a href="#">
                                        <!-- <img src="assets/img/team/1.jpg" alt="Thumb"> -->
                                    </a>
                                   <!--  <ul>
                                        <li><i class="fas fa-clock"></i> 04:15:38</li>
                                        <li><i class="fas fa-list-ul"></i> 32</li>
                                    </ul> -->
                                </div>
                            </div>
                            <div class="info">
                                <div class="meta">
                                   <!--  <ul>
                                        <li>
                                            <a href="#">Education</a>
                                            <a href="#">Tech</a>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <span>(1k)</span>
                                        </li>
                                    </ul> -->
                                </div>
                                <h4>
                                    <a href="#"><?php echo $row['course_name']; ?></a>
                                </h4>
                               
                                <div class="footer-meta">
                                    <a class="btn btn-theme effect btn-sm" href="subcourse.php?id=<?php echo $row['course_id']; ?>&course=<?php echo $row['course_name']; ?>">More Courses</a>
                                    <!-- <h4>$23.00</h4> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                        }
                    ?>

                    <!-- Single Item -->

                </div>
            </div>
        </div>
    </div>
    <!-- End Popular Courses -->

    <!-- Start Testimonials 
    ============================================= -->
    <div class="testimonials-area carousel-shadow active-dots bg-gray default-padding bg-cover" style="background-image: url(assets/img/shape-bg.png);">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>What Students Says</h2>
                        <p>
                            Discourse assurance estimable applauded to so. Him everything melancholy uncommonly but solicitude inhabiting projection off. Connection stimulated estimating excellence an to impression. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-items testimonial-carousel owl-carousel owl-theme text-center">
                        <!-- Single Item -->
                        <?php
                        include ('conn.php');
                        $sql_sel = "SELECT * FROM tbl_feedback";
                        $result = mysqli_query($conn, $sql_sel);

                        while ($row = mysqli_fetch_array($result)) 
                        {
                               
                        ?>
                        <div class="item">
                            <div class="icon">
                                <i class="ti-quote-left"></i>
                            </div>
                            <div class="content">
                                <p>
                                <?php echo $row['comments']; ?>

                                </p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <!-- <img src="assets/img/team/1.jpg" alt="Thumb"> -->
                            </div>
                            <div class="author">
                                <h4><?php echo $row['name']; ?>
                                </h4>
                                <!-- <span>Student of DIU</span> -->
                            </div>
                        </div>
                        <?php
                    }
                        ?>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <!-- <div class="item">
                            <div class="icon">
                                <i class="ti-quote-left"></i>
                            </div>
                            <div class="content">
                                <p>
                                    Ashamed herself has distant can studied mrs. Led therefore its middleton perpetual fulfilled provision frankness. Small he drawn after among every three no.
                                </p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <img src="assets/img/team/2.jpg" alt="Thumb">
                            </div>
                            <div class="author">
                                <h4>Bunah Ahem</h4>
                                <span>Student of COO</span>
                            </div>
                        </div> -->
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <!-- <div class="item">
                            <div class="icon">
                                <i class="ti-quote-left"></i>
                            </div>
                            <div class="content">
                                <p>
                                    Regret eat looked warmth easily far should now. Prospect at me wandered on extended wondered thoughts appetite to. Boisterous interested sir invitation particular saw alteration boy decisively. 
                                </p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <img src="assets/img/team/3.jpg" alt="Thumb">
                            </div>
                            <div class="author">
                                <h4>Proda Huk</h4>
                                <span>Student of ICC</span>
                            </div>
                        </div> -->
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials -->
    
    <!-- jQuery Frameworks
    ============================================= -->
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/equal-height.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/modernizr.custom.13711.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/progress-bar.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/count-to.js"></script>
    <script src="assets/js/YTPlayer.min.js"></script>
    <script src="assets/js/loopcounter.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/bootsnav.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>
<?php
    include ('footer.php'); 
 ?>