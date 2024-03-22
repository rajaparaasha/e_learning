<?php
    //Add Header File
    include('header.php');

    //Add Sidemenu File
    include('sidemenu.php');

?>
  
    <section class="content">

        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text" style="font-size: 20px;">COURSE</div>
                            <?php
                                    include 'connection.php';
                                    $res = mysqli_query($conn,"SELECT count(*) as count FROM tbl_course");
                                    
                                    $r = mysqli_fetch_array($res);
                                    echo '<strong>'.$r['count'].'</strong>';
                            ?>
                            <!-- <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">
                            <div class="text" style="font-size: 20px;">
                            SUB_COURSE</div>
                            <!-- <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
                        </div> -->
                        <?php
                                    include 'connection.php';
                                    $res = mysqli_query($conn,"SELECT count(*) as count FROM tbl_sub_course");
                                    
                                    $r = mysqli_fetch_array($res);
                                    echo '<strong>'.$r['count'].'</strong>';
                            ?>
                          </div>  
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text" style="font-size: 20px;">BLOG</div>
                            <!-- <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                        </div> -->
                         <?php
                                    include 'connection.php';
                                    $res = mysqli_query($conn,"SELECT count(*) as count FROM tbl_blog_user");
                                    
                                    $r = mysqli_fetch_array($res);
                                    echo '<strong>'.$r['count'].'</strong>';
                            ?>
                         </div>   
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text" style="font-size: 20px;">QUIZ</div>
                            <!-- <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
                        </div> -->
                        <?php
                                include 'connection.php';
                                $res = mysqli_query($conn,"SELECT count(*) as count FROM tbl_quiz_user");
                                    
                                $r = mysqli_fetch_array($res);
                                echo '<strong>'.$r['count'].'</strong>';
                            ?>
                       </div>     
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
            <div class="row clearfix">
                
                <!-- Latest Social Trends -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="body bg-cyan">
                            <div class="m-b--35 font-bold" style="font-size: 20px;">COURSE</div>
                            <?php
                                include 'connection.php';
                                $res1=mysqli_query($conn,"SELECT * FROM tbl_course");

                            ?>
                            <ul class="dashboard-stat-list">
                                <?php
                                    while ($row1= mysqli_fetch_array($res1)) {
                                        echo '<li>'.$row1['course_name'].'</li>';
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Latest Social Trends -->
                <!-- Answered Tickets -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="body bg-teal">
                            <div class="font-bold m-b--35" style="font-size: 20px;">BLOGER</div>
                            <ul class="dashboard-stat-list">
                                <?php
                                    include 'connection.php';
                                    $res2 = mysqli_query($conn,"SELECT * FROM tbl_blog_user");
                                    while ($row2 = mysqli_fetch_array($res2)) {
                                    
                                ?>
                                <li>
                                    <?php echo $row2['blog_fname'].' '.$row2['blog_lname']; ?>
                                    <span class="pull-right">
                                        <!-- <b>12</b> <small>TICKETS</small> -->
                                        <?php
                                            $blog_user_id = $row2['blog_user_id'];
                                            $res = mysqli_query($conn,"SELECT 
                                                count(*) as count FROM tbl_blog_detail where blog_user_id =$blog_user_id ");
                                            $r = mysqli_fetch_array($res);
                                            echo '<strong>'.$r['count'].'</strong>';
                                            ?>                      
                                    </span>
                                </li>
                                <?php
                                    }
                                ?>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Answered Tickets -->
            </div>

            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card  bg-light-green hover-expand-effect">

                        <div class="header">
                            <h2 style="color: white;"><B >COURSE INFOS</B></h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="course.php">Course</a></li>
                                        <li><a href="subcourse.php">Subcourse</a></li>
                                        <li><a href="subcourse_detail.php">Sub Course Detail</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table style="color: white;" class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            
                                            <th>Course</th>
                                            <th>Sub Course</th>
                                                                                       
                                        </tr>
                                    </thead>
                                    <tbody>                                    
                                    <?php                                            include 'connection.php';
                                        $res3 = mysqli_query($conn,"SELECT * FROM tbl_course");  
                                    ?>                   
                                    <?php
                                        while ($row2= mysqli_fetch_array($res3)) 
                                        {
                                        echo '<tr>';
                                        echo '<td>'.$row2['course_name'].'</td>';
                                         $sub_course_id= $row2['course_id'];
                                            $res4 = mysqli_query($conn,"SELECT 
                                                count(*) as count FROM tbl_sub_course where course_id =$sub_course_id ");
                                            $r = mysqli_fetch_array($res4);
                                        echo '<td>'.$r['count'].'</td>';
                                        echo '</tr>';
                                    }
                                ?>                    
                                
                            <!-- <td><span class="label bg-green">C++</span></td>
                                                                                        
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            
                                            <td><span class="label bg-blue">phpmyadmin</span></td>
                                                                                        
                                        </tr>
                                        
                             -->                                                            
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
                <!-- Browser Usage -->
                            </div>
        </div>
    </section>


<?php
    //Add Footer File
    include('footer.php');
?>