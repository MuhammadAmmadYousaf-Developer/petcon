<?php
    include 'adminheader.php';
      include 'connection.php';
    session_start();
     $id=$_SESSION['userid'];
    $qe="select * from user where id=$id";
    $db=mysqli_query($connn,$qe);
    $data=mysqli_fetch_assoc($db);

if(isset($_POST['submit'])){
    $target_file="uploads/";
        $target_file1=$target_file.basename($_FILES["fileupload1"]["name"]);
         move_uploaded_file($_FILES["fileupload1"]["tmp_name"], $target_file1);
        $name=$_POST['namee']; 
        $description=$_POST['description'];
        $Duration=$_POST['Duration'];
         $Duration=$_POST['Duration'];
         $Certificate=$_POST['Certificate'];
         $Requirements=$_POST['Requirements'];
          $Emphases=$_POST['Emphases'];
           $TargetGroups=$_POST['TargetGroups'];
            $Moftraining=$_POST['Moftraining'];
        
        $Query="INSERT INTO `courses`(`name`, `des`, `duration`, `certificate`, `req`, `emphasis`, `moftraining`, `tgroups`,`img`) VALUES ('$name','$description','$Duration','$Certificate','$Requirements','$Emphases','$TargetGroups','$Moftraining','saadPetcon/$target_file1')";
       
       $rm=mysqli_query($connn,$Query);
         
        if($rm){
           
           
   echo "<script>alert('Data Saved');</script>";

        }
        else{
            echo "<script>alert('Error in Saving');</script>";
        }
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
 <form method="POST" enctype="multipart/form-data">
<!-- [ Main Content ] start -->
<section class="pcoded-main-container" style="margin-top: -700px;">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
         <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Add Course</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                         
                            <li class="breadcrumb-item"><a href="#!">Add Course</a></li>
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
                        <h5>Add Course</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                
                                     <div class="form-group">
                                        <label for="exampleInputPassword1">Name</label>
                                        <input type="discription" class="form-control" name="namee">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Description</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Duration</label>
                                        <input type="discription" class="form-control" name="Duration">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Certificate</label>
                                        <input type="discription" class="form-control" name="Certificate" >
                                    </div>
                                    
                                    
                            </div>
                            <div class="col-md-6">
                               
                                    <div class="form-group">
                                        <label>Requirements</label>
                                        <input type="text" class="form-control" name="Requirements">
                                    </div>
                                   <div class="form-group">
                                        <label>Emphases</label>
                                        <input type="text" class="form-control" name="Emphases">
                                    </div>
                                    <div class="form-group">
                                        <label>Moftraining</label>
                                        <input type="text" class="form-control" name="Moftraining">
                                    </div>
                                    <div class="form-group">
                                        <label>Target Groups</label>
                                        <input type="text" class="form-control" name="TargetGroups">
                                    </div>
                                     <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" name="fileupload1">
                                    </div>
                                   
                                                                    
                                   
                         
                            </div>
                        </div>
                        <button type="submit" class="btn  btn-primary" name="submit">Submit</button>
                       
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
   
    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>




</body>

</html>

