 <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/admin.jpg" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php  
                            // error_reporting(0);
                            echo ucwords($_SESSION['name']);
                        ?></div>
                    <div class="email">
                                <?php 
                                    echo $_SESSION['admin_email'];
                                ?>
                                    
                                </div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                           <!--  <li><a href="profile.php"><i class="material-icons">person</i>Profile</a></li> -->
                            <!-- <li role="separator" class="divider"></li> -->
                            <li><a href="logout.php"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="dashbord.php">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Course</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="course.php">Add Course</a>
                            </li>
                            <li>
                                <a href="show_course.php">Show Course</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Sub Course</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="subcourse.php">Add Sub Course</a>
                            </li>
                            <li>
                                <a href="show_subcourse.php">Show Sub Course</a>
                            </li>
                        </ul>
                    </li>
                     <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Sub Course Detail</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="subcourse_detail.php">Add Sub Course Detail</a>
                            </li>
                            <li>
                                <a href="show_subcoursedetail.php">Show Sub Course Detail</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Quiz</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="manage_quiz.php">Add Quiz</a>
                            </li>
                            <li>
                                <a href="show_quiz.php">Show Quiz</a>
                            </li>
                            <li>
                                <a href="show_quizuser.php">Show QuizUser</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Blog</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="blog_category.php">Add Category</a>
                            </li>
                            <li>
                                <a href="show_blog.php">Show Blog Category</a>
                            </li>
                                                       
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Feedback</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="show_feedback.php">Show Feedback</a>
                            </li>
                           
                                                       
                        </ul>
                    </li>
                   
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2021 - 2022 <a href="javascript:void(0);">LearnZilla - Jotangiya Kavita <br> Rajapara Asha </a>.
                </div>
               <!--  <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
             --></div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        
    </section>