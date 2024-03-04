<?php
    include 'adminheader.php';
  
    session_start();
    if (!isset($_SESSION['userid'])) {
    // Redirect to the login page
    header('Location: auth-signin.php');
    // Make sure to exit to prevent further execution
}  else{
    $id=$_SESSION['userid'];
    $qe="select * from user where id=$id";
    $db=mysqli_query($connn,$qe);
    $data=mysqli_fetch_assoc($db);

 $id=$_GET['editid'];
    $qmb="select * from courses where id=$id";
    $dab=mysqli_query($connn,$qmb);
    $da=mysqli_fetch_assoc($dab);
}
?>

 
        
        
    
   
 
 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Add Course</title>
 </head>
 <body>
 <form method="GET" action="ViewCourses.php">
<!-- [ Main Content ] start -->
<section class="pcoded-main-container" style="margin-top: -700px;">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
         <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Edit Courses</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                         
                            <li class="breadcrumb-item"><a href="#!">Edit Courses</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        
                    </div>
                    <div class="card-body">
                        <h5>Edit Courses</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                 <div class="form-group">
                                    <input type="hidden" name="editid" value="<?php echo $da["id"] ?>">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="namee" value="<?php echo $da["name"] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input class="form-control" name="description" rows="3" value="<?php echo $da["des"] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Duration</label>
                                        <input type="discription" class="form-control" name="Duration" value="<?php echo $da["duration"] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Certificate</label>
                                        <input type="discription" class="form-control" name="Certificate" value="<?php echo $da["certificate"] ?>" >
                                    </div>
                                    
                                    
                            </div>
                            <div class="col-md-6">
                               
                                    <div class="form-group">
                                        <label>Requirements</label>
                                        <input type="text" class="form-control" name="Requirements" value="<?php echo $da["req"] ?>">
                                    </div>
                                   <div class="form-group">
                                        <label>Emphases</label>
                                        <input type="text" class="form-control" name="Emphases" value="<?php echo $da["emphasis"] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Moftraining</label>
                                        <input type="text" class="form-control" name="Moftraining" value="<?php echo $da["moftraining"] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Target Groups</label>
                                        <input type="text" class="form-control" name="TargetGroups" value="<?php echo $da["tgroups"] ?>">
                                    </div>
                                    
                                   
                         
                            </div>
                        </div>
                        <button type="submit" class="btn  btn-primary" name="update" value="update">Submit</button>
                       
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ form-element ] end -->
        </div>
        <!-- [ Main Content ] end -->

    </div>
              </form>         
    <!-- Warning Section start -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>




</body>

</html>

