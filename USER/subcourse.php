    <?php
        session_start();
        $_SESSION['course'] = $_GET['course'];
        include ('header.php');
    ?>
    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(assets/img/banner/a1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1 style="margin-top: 55px;">Sub Courses</h1>
                    <ul class="breadcrumb">
                        <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="courses.php"><?php echo $_SESSION['course']; ?></a></li>
                        <li class="active">All Courses</li>
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
                        
                        $id = $_GET['id'];

                        include ('conn.php');
                        $sql_sel = "SELECT * FROM tbl_sub_course WHERE course_id=$id";
                        $result = mysqli_query($conn, $sql_sel);

                        if(mysqli_num_rows($result) <= 0){
                            echo '<div class="col-md-4 col-sm-6 equal-height"><h3>Coming Soon......</h3></div>';
                        }else{
                            while ($row = mysqli_fetch_array($result)) 
                            {
                                     
                            ?>
                          <div class="col-md-4 col-sm-6 equal-height">
                            <div class="item">
                                <div class="thumb">
                                    <img src="../ADMIN/subcourse_photo/<?php echo $row['img']; ?>" alt="Thumb" class="img" width="360px" height="270px">
                                </div>
                                <div class="info">
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <a href="#">PHP</a>
                                                <a href="#">SERVER</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4>
                                        <a href="#"><?php echo $row['sub_course_name']; ?></a>
                                    </h4>
                                    <p>
                                        <?php echo $row['description']; ?>
                                         
                                    </p>
                                    <div class="footer-meta">
                                        <a class="btn btn-theme effect btn-sm" href="subcourse_detail.php?id=<?php echo $row['sub_course_id']; ?>">More Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php 
                            }
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