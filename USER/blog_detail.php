    <?php
        include ('header.php');
    ?>
    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(assets/img/banner/b.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1 style="margin-top: 45px;">Blog Single</h1>
                    <ul class="breadcrumb">
                        <li><a href="index.php"><i class="fas fa-home"></i> Blog</a></li>
                        <!-- <li><a href="#">Single</a></li> -->
                        <!-- <li class="active">No Sidebar</li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area single full-blog full-blog default-padding">
        <div class="container">
            <a href="blog.php" class="btn btn-success" style="float: right" title="Back">&larrhk;</a>
            <div class="row">
                <?php
                    $id = $_GET['id'];
                    include ('conn.php');

                    $sql_sel = "SELECT * FROM tbl_blog_detail as d INNER JOIN tbl_blog_user as b INNER JOIN tbl_blog_cat as c WHERE d.blog_user_id = b.blog_user_id  AND c.blog_cat_id = d.blog_cat_id AND d.blog_id = $id";
                    $result = mysqli_query($conn, $sql_sel);
                    while ($row = mysqli_fetch_array($result)) 
                    {
                               
                    ?>

                <div class="blog-items">
                    <div class="blog-content col-md-10 col-md-offset-1">
                        <div class="single-item">
                            <div class="item">
                                <!-- Start Post Thumb -->
                                <div class="thumb">
                                    <a href="#">
                                        <img src="../admin/blog_img/<?php echo $row['blog_img'];?>" alt="Blog Img">

                                    </a>
                                </div>
                                <!-- Start Post Thumb -->

                                <div class="info">
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fas fa-user"></i><?php echo $row['blog_fname']." ".$row['blog_lname']; ?></a>
                                                </li>
                                            <li>
                                                <i class="fas fa-calendar-alt"></i><?php $str= $row['created_at']; echo date("d M, Y", strtotime($str)); ?> </li>
                                            </ul>
                                    </div>
                                    
                                    <div class="content">
                                        <div class="tags share">
                                            <div class="items">
                                                <span>Type :: </span>
                                                <span><?php echo $row['cat_nm']; ?></span>
                                            </div>
                                            <div class="social-share">
                                                <ul>
                                                    <!-- <li> -->
                                                        <!-- <i class="fas fa-share-alt"></i> -->
                                                    <!-- </li> -->
                                                    <li class="facebook">
                                                        <a href="https://www.facebook.com/">
                                                            <i class="fab fa-facebook-f"></i>
                                                        </a>
                                                    </li>
                                                    <li class="twitter">
                                                        <a href="https://twitter.com/">
                                                            <i class="fab fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li class="linkedin">
                                                        <a href="https://www.linkedin.com/company/linkedin">
                                                            <i class="fab fa-linkedin-in"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <h3><?php echo $row['blog_title']; ?></h3>
                                        <p>
                                            <?php echo $row['blog_detailmore'];   ?>
 
                                        </p>
                                        
                                        <?php
}
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
    <?php
        include ('footer.php');
    ?>