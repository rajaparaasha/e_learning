<?php
        include('header.php');
    include ('sidemenu.php');

?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    MANAGE SUBCOURSE 
                    <small class="text-capitalize">Add new sub courses here. </small>
                </h2>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>SUB COUESE FORM </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">

                            <form id="" method="POST">
                              <h2 class="card-inside-title">Select Course</h2>
                              <div class="row clearfix">
                                <div class="col-sm-12">
                                    <select class="form-control">
                                        <option value="">-- Please select --</option>
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                        <option value="40">40</option>
                                        <option value="50">50</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">

                                    <div class="form-group">
                                        <div class="form-line">
                                            <h5>Enter sub course</h5>
                                            <input type="text" class="form-control" placeholder="Enter subcourse" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h5>Select Image</h5>
                                             <input type="file" nmae="sub_img" class="form-control" placeholder="Enter subcourse" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h5>Description</h5>
                                            <textarea rows="4" name="des" class="form-control no-resize" placeholder="Add description about subcourse ..."></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h5>More Description</h5>
                                            <textarea rows="4" name="des2" class="form-control no-resize" placeholder="Add more description..."></textarea>
                                        </div>
                                    </div>
                                    
                                    <div>
                                        <div>
                                            <button class="btn btn-primary">ADD</button>
                                        </div>
                                    </div>

                                </div>
                            </div>  
                            </form>
                        </div>
        </div>
    </section>
<?php
    include ('footer.php');
?>