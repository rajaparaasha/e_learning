    <?php
        include ('header.php');
    ?>
    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(assets/img/banner/a3.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1 style="margin-top: 55px;">Courses </h1>
                    <ul class="breadcrumb">
                        <li><a href="index.php"><i class="fas fa-home"></i>Home</a></li>
                        <!-- <li><a href="#">Courses</a></li> -->
                        <li class="active">Courses</li>
                    </ul>   
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

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
<?php
    include ('footer.php');
?>