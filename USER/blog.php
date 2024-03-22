    <?php
        include ('header.php');
        
    ?>
        <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(assets/img/banner/28.jpeg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1 style="margin-top: 45px;">Our Latest Blog</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Blog</a></li>
                        <!-- <li class="active">All Blog</li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area single full-blog right-sidebar full-blog default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <div class="blog-content col-md-8">

                        <div class="content-items">
                <?php
                    include ('conn.php');
                    if(isset($_GET['blog'])){
                        $cat_nm = $_GET['blog'];
                        $sql_sel = "SELECT * FROM tbl_blog_detail as d INNER JOIN tbl_blog_user as b  INNER JOIN tbl_blog_cat as c WHERE d.blog_user_id = b.blog_user_id AND c.cat_nm = '$cat_nm'  AND c.blog_cat_id = d.blog_cat_id ORDER BY d.blog_id DESC";
                    }
                    else{
                        $sql_sel = "SELECT * FROM tbl_blog_detail as d INNER JOIN tbl_blog_user as b INNER JOIN tbl_blog_cat as c WHERE d.blog_user_id = b.blog_user_id  AND c.blog_cat_id = d.blog_cat_id ORDER BY d.blog_id DESC";
                    }
                    $result = mysqli_query($conn, $sql_sel);
                    echo $result;
                    while ($row = mysqli_fetch_array($result)) 
                    {     
                    ?>
                            <!-- Single Item -->
                            <div class="single-item">
                                <div class="item">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="../admin/blog_img/<?php echo $row['blog_img']; ?>" alt="Blog Img">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <div class="meta">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="fas fa-user"></i><?php echo $row['blog_fname']." ".$row['blog_lname']; ?></a>
                                                </li>
                                                <li><i class="fas fa-calendar-alt"></i><?php $str= $row['created_at']; echo date("d M, Y", strtotime($str)); ?> </li>
                                            </ul>
                                        </div>

                                        <div class="content">
                                            <div class="tags">
                                                <span>Type :: </span>
                                                <span><?php echo $row['cat_nm']; ?></span>
                                            </div>
                                            <h4>
                                                <a href="#"><?php echo $row['blog_title']; ?></a>
                                            </h4>
                                                <p>
                                                    <?php 
                                                            $str = substr($row['blog_description'],0,200) . "....."; 
                                                            echo $str;
                                                      ?>
                                                </p>

                                            <a href="blog_detail.php?id=<?php echo $row['blog_id']; ?>">
                                                <i class="fas fa-plus"></i>Read More</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        <?php
                            }
                        ?>
                        </div>
                        <!-- End Blog Items -->
                       
                        <!-- Pagination -->
                        <!-- <div class="row">
                            <div class="col-md-12 pagi-area">
                                <nav aria-label="navigation">
                                    <ul class="pagination">
                                        <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div> -->
                    </div>

                    <!-- Start Sidebar -->
                    <div class="sidebar col-md-4">
                        <aside>
                            <div class="sidebar-item search">
                                <div class="title">
                                    <h4>Become a Blogger!!</h4>
                                    <br>
                                </div>
                                <div class="sidebar-info">
                                    <!-- <form> -->
                                        <!-- <input class="form-control"> -->
                                        <!-- <input type="submit" value="Login"> -->
                                        <a href="login.php" class="btn btn-primary">LogIn</a>
                                    <!-- </form> -->
                                </div>
                            </div>
                            <div class="sidebar-item category">
                                <div class="title">
                                    <h4>category list</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                    <?php
                                        include ('conn.php');
                                        $sql_sel = "SELECT * FROM tbl_blog_cat";
                                        $result = mysqli_query($conn, $sql_sel);

                                        $count = 0;
                                        while ($row = mysqli_fetch_array($result)) 
                                        {
                                            echo '<li>
                                            <a href="blog.php?id='.$row['blog_cat_id'].'&blog='.$row['cat_nm'].'">'.$row['cat_nm'];
                                            
                                            $sql_sel1 = "SELECT count(*) AS count FROM tbl_blog_detail WHERE blog_cat_id=".$row['blog_cat_id'];
                                            $result1 = mysqli_query($conn, $sql_sel1);   
                                            $row1 = mysqli_fetch_array($result1);
                                            $count += $row1['count'];
                                            echo '<span>'.$row1['count'].'</span>';

                                            echo '</a> </li>';
                                        }
                                        echo '<li><a href="blog.php"> All <span>'.$count.'</span></a></li>';
                            ?>

                                    </ul>
                                </div>
                            </div>
                            
                            <div class="sidebar-item gallery">
                                <div class="title">
                                    <h4>Gallery</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/gallery/9.jpg" alt="thumb">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/gallery/10.jpg" alt="thumb">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/gallery/11.jpg" alt="thumb">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/gallery/3.jpg" alt="thumb">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/gallery/4.jpg" alt="thumb">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/gallery/1.jpg" alt="thumb">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-item social-sidebar">
                                <div class="title">
                                    <h4>follow us</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        <li class="facebook">
                                            <a href="http://facebook.com" target="_blank">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="twitter">
                                            <a href="http://twitter.com" target="_blank">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="pinterest">
                                            <a href="http://pinterest.com" target="_blank">
                                                <i class="fab fa-pinterest"></i>
                                            </a>
                                        </li>
                                        <li class="instagram">
                                            <a href="https://www.instagram.com/" target="_blank">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="linkedin">
                                            <a href="http://linkedin.com" target="_blank">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <!-- End Start Sidebar -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->

    <?php
        include ('footer.php');
    ?>
