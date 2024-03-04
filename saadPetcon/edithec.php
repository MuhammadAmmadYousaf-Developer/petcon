<?php
include 'adminheader.php';
    include 'connection.php';
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

    $qa="select * from courses";
  $rb=mysqli_query($connn,$qa);


 $idd=$_GET['editid'];
$Q="select * from add_hec_training where code='$idd'";
 $da=mysqli_query($connn,$Q);
 $RESULTY=mysqli_fetch_assoc($da);
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit HEC Training</title>
</head>
<body>
<form method="GET">
<!-- [ Main Content ] start -->
<section class="pcoded-main-container" style="margin-top: -700px;">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
         <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Edit HEC Training</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                         
                            <li class="breadcrumb-item"><a href="#!">Edit HEC Training</a></li>
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
                        <h5>Add HEC Training</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                
                                     <div class="form-group">
                                         

                                        <label for="exampleInputPassword1">Code</label>
                                        <input type="text" class="form-control" name="code"  value="<?php echo $RESULTY['code']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Name</label>
                                        <input type="text" class="form-control" name="name"  value="<?php echo $RESULTY['name']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Duration</label>
                                        <input type="text" class="form-control" name="duration"  value="<?php echo $RESULTY['duration']?>">
                                    
                                    
                                    
                            </div>
                           
                        <button type="submit" class="btn  btn-primary" name="update" value="update">Submit</button>
                       
                        </div>
                       
</body>
</html>