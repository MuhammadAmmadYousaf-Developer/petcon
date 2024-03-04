<?php

include 'adminheader.php';

if (!isset($_SESSION['userid'])) {
    // Redirect to the login page
    header('Location: auth-signin.php');
    // Make sure to exit to prevent further execution
}  else{
if(isset($_GET['submit'])){

        $code=$_GET['code']; 
        $Trainee_Name=$_GET['Trainee_name']; 
        $name=$_GET['name'];
        $duration=$_GET['duration'];
         
        $Query="INSERT INTO `hse`(`code`, `name`, `duration`) VALUES('$code','$name','$duration')";
        
        
      $rm=mysqli_query($connn,$Query);
        if($rm){
           
           
   echo "<script>alert('Data Saved');</script>";

        }
        else{
            echo "<script>alert('Error in Saving');</script>";
        }
    
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add HEC Training</title>
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
                            <h5 class="m-b-10">Add HEC Training</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                         
                            <li class="breadcrumb-item"><a href="#!">Add HEC Training</a></li>
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
                                        <input type="discription" class="form-control" name="code">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Name</label>
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Duration</label>
                                        <input type="text" class="form-control" name="duration">
                                    
                                    
                                    
                            </div>
                            <button type="submit" class="btn  btn-primary" name="submit">Submit</button>
                        </div>
                       
</body>
</html>