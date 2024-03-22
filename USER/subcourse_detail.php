    <?php
        session_start();
        include ('header.php');
        $subid = $_GET['id'];
        include ('conn.php');
        $sql_sel = "SELECT * FROM tbl_sub_course WHERE sub_course_id = $subid";
        $result = mysqli_query($conn,$sql_sel);
        $sub_row= mysqli_fetch_array($result);


    ?>
    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(assets/img/banner/16.jpeg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1 style= "margin-top: 55px;">Course Details</h1>
                    <ul class="breadcrumb">
                        <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="subcourse.php?id=<?php echo $_GET['id'].'&course='.$_SESSION['course']; ?>"><?php echo $_SESSION['course']; ?></a></li>
                        <li class="active">All Courses</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Course Details 
    ============================================= -->
    <div class="course-details-area default-padding">
        <div class="container">
            <div class="row">
                <!-- Start Course Info -->
                <div class="col-md-9">
                    <div class="courses-info">
                        <h2>
                            <?php echo $sub_row['sub_course_name'];  ?>
                        </h2>
                        <!-- <div class="course-meta">
                            <div class="item author">
                                <div class="thumb">
                                    <a href="#"><img alt="Thumb" src="assets/img/team/6.jpg"></a>
                                </div>
                                <div class="desc">
                                    <h4>Author</h4>
                                    <a href="#">Munil Druva</a>
                                </div>
                            </div>
                            <div class="item category">
                                <h4>Category</h4>
                                <a href="#">Science</a>
                            </div>
                            <div class="item rating">
                                <h4>Review</h4>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(1 Rating)</span>
                            </div>
                            <div class="item price">
                                <h4>Price</h4>
                                <span>$29.00</span>
                            </div>
                            <div class="align-right">
                                <a class="btn btn-theme effect btn-sm" href="#">
                                    <i class="fas fa-chart-bar"></i> Enroll
                                </a>
                            </div>
                        </div> -->
                        <img src="../admin/subcourse_photo/<?php echo $sub_row['img']; ?>" alt="Thumb" class="img" width="500px" height="300px">
                           
                            
                        <!-- Star Tab Info -->
                        <div class="tab-info">
                            <!-- Tab Nav -->
                            <ul class="nav nav-pills">
                                <li class="active">
                                    <a data-toggle="tab" href="#tab1" aria-expanded="true">
                                        Overview
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab2" aria-expanded="false">
                                        Videos
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab3" aria-expanded="false">
                                        Quiz
                                    </a>
                                </li>                          
                            </ul>
                            <!-- End Tab Nav -->
                            <!-- Start Tab Content -->
                            <div class="tab-content tab-content-info">
                                <!-- Single Tab -->
                                <div id="tab1" class="tab-pane fade active in">
                                    <div class="info title">
                                        <h4>Course Description</h4>
                                        <p>
                                            <?php echo $sub_row['more_description'];   ?>
                                        </p>
                                        <?php 
                                        $i = 0;
                                        $sel = "SELECT * FROM tbl_subcourse_detail WHERE sub_course_id = $subid";
                                        $res = mysqli_query($conn, $sel);
                                        while ($row = mysqli_fetch_array($res)) 

                                        {
                                            $i++;

                                            echo "<h4>".$i.". ".$row['subcourse_detail_name']."</h4>";
                                            echo "<p>".$row['subcourse_detail_description']."</p>";
                                        }
                                        ?>
                                    </div>
                                </div>
                                <!-- End Single Tab -->

                                <!-- Single Tab -->
                                <div id="tab2" class="tab-pane fade">
                                    <div class="info title">
                                        <h4>List Of <?php echo $sub_row['sub_course_name']; ?> Videos</h4>
                                        <!-- Start Course List -->
                                        <?php 
                                            $i = 0;
                                            $sel1 = "SELECT * FROM tbl_subcourse_detail WHERE sub_course_id = $subid";
                                            $res1 = mysqli_query($conn, $sel1);
                                            while ($row1 = mysqli_fetch_array($res1)) 
                                            {
                                                $i++;
                                            
                                        ?>
                                        <div class="course-list-items acd-items acd-arrow">
                                            <div class="panel-group symb" id="accordion">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#ac<?php echo $i;  ?>">
                                                                <strong><?php echo $i;   ?></strong><?php echo ucwords($row1['subcourse_detail_name']); ?>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="ac<?php echo $i;   ?>" class="panel-collapse collapse in">
                                                        <div class="panel-body">
                                                            <ul>
                                                                <li>
                                                                    <div class="title">
                                                                        
                                                                        <p>
                                                                            Video 1
                                                                        </p>
                                                                        <h5>
                                                                            <a href="../ADMIN/video/<?php echo $row1['video'];  ?>" target="_blank"><i class="fas fa-eye"></i> Open For Click Here</a>
                                                                        </h5>
                                                                        
                                                                    </div>
                                                                    <!-- <div class="intro">
                                                                        <div class="item">
                                                                            <p>
                                                                                Published - 15 Aug, 2020 
                                                                            </p>
                                                                        </div>
                                                                        <div class="item">
                                                                            <p>
                                                                                Duration: 1 hours 30 min
                                                                            </p>
                                                                           <a href="#">Preview</a>
                                                                        </div>
                                                                    </div> -->
                                                                </li>
                                                               
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                            }
                                        ?>
                                        <!-- End Course List -->
                                    </div>
                                </div>
                                <!-- End Single Tab -->

                                
                                <!-- Single Tab -->
                                <div id="tab3" class="tab-pane fade">
                                    <div class="info title">
                                        <h4></h4>
                                        <div>
                                           <!-- <li> 
                                            <h3>CSS Stands for...</h3>
                                            <div>
                                                <input type="radio" name="ans-1" id="question-1-answers-A" value="A" />A) Computer Styled Sections
                                            </div>
                                            
                                            <div>
                                                <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                                                <label for="question-1-answers-B">B) Cascading Style Sheets</label>
                                            </div>
                                            
                                            <div>
                                                <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                                                <label for="question-1-answers-C">C) Crazy Solid Shapes</label>
                                            </div>
                                            
                                            <div>
                                                <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                                                <label for="question-1-answers-D">D) None of the above</label>
                                            </div> -->

                                        </li>

                                            <div>
                                                <!-- <a href="certi.php" class="btn btn-success" target="_blank">View Certificate</a> -->
                                                <?php
                                                    if(isset($_SESSION['user_id'])){
                                                      echo '<a href="quiz.php" class="btn btn-warning">Start Quiz</a>';  
                                                    }else{
                                                        echo '<a href="login.php" class="btn btn-warning">Start Quiz</a>';
                                                    }
                                                ?>
                                                

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Tab -->
                            </div>
                            <!-- End Tab Content -->
                        </div>
                        <!-- End Tab Info -->
                    </div>
                </div>
                <!-- End Course Info -->

                <!-- Start Course Sidebar -->
                <div class="col-md-3">
                    <div class="aside">
                        <!-- Sidebar Item -->
                        <!-- <div class="sidebar-item course-info">
                            <div class="title">
                                <h4>Course Features</h4>
                            </div>
                            <ul>
                                <li><i class="flaticon-translation"></i> Language  <span class="pull-right">English</span></li>
                                <li><i class="flaticon-faculty-shield"></i> Lectures  <span class="pull-right">23</span></li>
                                <li><i class="flaticon-film"></i> Video  <span class="pull-right">04:15:38</span></li>
                                <li><i class="flaticon-levels"></i> Level  <span class="pull-right">beginner</span></li>
                                <li><i class="flaticon-group-of-students"></i> Enrolled  <span class="pull-right">136</span></li>
                            </ul>                        
                        </div> -->
                        <!-- End Sidebar Item -->
                        <!-- Sidebar Item -->
                        <div class="sidebar-item category">
                            <div class="title">
                                <h4>List Of Courses</h4>
                            </div>
                            <ul>
                            <?php
                                include ('conn.php');
                                $sql_sel = "SELECT * FROM tbl_course";
                                $result = mysqli_query($conn, $sql_sel);

                                while ($row = mysqli_fetch_array($result)) 
                                {
                                    echo '<li>
                                        <a href="subcourse.php?id='.$row['course_id'].'&course='.$row['course_name'].'">'.$row['course_name'];
                                    
                                    $sql_sel1 = "SELECT count(*) AS count FROM tbl_sub_course WHERE course_id=".$row['course_id'];
                                    $result1 = mysqli_query($conn, $sql_sel1);   
                                    $row1 = mysqli_fetch_array($result1);
                                    
                                    echo '<span>'.$row1['count'].'</span>';

                                    echo '</a> </li>';
                                }
                            ?>
                            </ul>
                        </div>
                        <!-- End Sidebar Item -->
                        <!-- Sidebar Item -->
                        <div class="sidebar-item similar-courses">
                            <div class="title">
                                <h4>Similar Courses</h4>
                            </div>
                            <ul>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="assets/img/gallery/9.jpg" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">Subjects allied to Creative arts and design</a>
                                        <!-- <div class="meta">
                                            <span>$29.00</span>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </div> -->
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="assets/img/gallery/10.jpg" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">Business and administrative subjects</a>
                                        <!-- <div class="meta">
                                            <span>$26.00</span>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div> -->
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="assets/img/gallery/11.jpg" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">Business and administrative subjects</a>
                                        <!-- <div class="meta">
                                            <span>$18.00</span>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </div> -->
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- End Sidebar Item -->
                    </div>
                </div>
                <!-- End Course Sidebar -->
            </div>
        </div>
    </div>
    <!-- End Course Details -->

<?php
    include ('footer.php');
?>