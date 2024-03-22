<?php
        include('header.php');
    include ('sidemenu.php');

?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    MANAGE BLOG CATEGORY
                    <small class="text-capitalize">Add Blog category...</small>
                </h2>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>BLOG CATEGORY</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="show_blog.php">Show Blog</a></li>
                                        
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    <div class="body">
                        <form id="form_validation" method="POST" enctype="multipart/form-data">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h5>Enter Category</h5>
                                            <input type="text" name="cat_nm" class="form-control" placeholder="Enter Category Name"/>
                                        </div>
                                    </div>
                                    <div>
                                        <div>
                                            <button class="btn btn-primary" type="submit" name="add_cat" >Add Category</button>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </form>
                    </div>
        </div>
    </section>

    <?php

        if (isset($_POST['add_cat'])) 
        {
            $cat_nm = $_POST['cat_nm'];

            include ('connection.php');

            $sql_ins = "INSERT INTO tbl_blog_cat(`cat_nm`,`created_at`)
                                                VALUES('$cat_nm',NOW())";

            $result = mysqli_query($conn,$sql_ins);

            if ($result > 0) 
            {
                echo '<script>Record Inserted...</script>';
            }                                    
        }
    ?>
<?php
    include ('footer.php');
?>