<?php
include 'adminheader.php';
   include 'connection.php';
  
session_start();

$id=$_SESSION['userid'];
$qe="select * from user where id=$id";
$db=mysqli_query($connn,$qe);
$data=mysqli_fetch_assoc($db);
$qastry="select * from courses";
$rb=mysqli_query($connn,$qastry); 

if(isset($_POST['submit'])){
    $target_file="uploads/";
    $target_file1=$target_file.basename($_FILES["fileupload1"]["name"]);
    move_uploaded_file($_FILES["fileupload1"]["tmp_name"], $target_file1);
    $Certificate_Number=$_POST['cnum']; 
    $Trainee_Name=$_POST['Trainee_name']; 
    $Course_Name=$_POST['Course_Name'];
    $tp=$_POST['tp'];
    $pid=$_POST['Provider_ID_Number'];
    $Completion_Date=$_POST['Completion_Date'];
    $Expiraion_Date=$_POST['Expiraion_Date'];
    $Delivery_Mehod=$_POST['Delivery_Mehod'];
    $Instructor_Name=$_POST['Instructor_Name'];
    $Training_Provider_Telephone_Number=$_POST['Training_Provider_Telephone_Number'];
    $cd=$_POST['cd'];

    $Queryyyyyy="INSERT INTO `certificate`(`Certificate_Number`, `Trainee_name`, `Course_Name`,`Training_Provider`, `rovider_ID_Number`, `Completion_Date`, `Expiraion_Date`, `Delivery_Mehod`, `Instructor_Name`, `Training_Provider_Telephone_Number`,`img`,`cd`) VALUES('$Certificate_Number','$Trainee_Name','$Course_Name','$tp','$pid','$Completion_Date','$Expiraion_Date','$Delivery_Mehod','$Instructor_Name','$Training_Provider_Telephone_Number','saadPetcon/$target_file1','$cd')";

    $rmjk=mysqli_query($connn,$Queryyyyyy);
    
    if($rmjk){
        echo "<script>alert('Data Saved');</script>";
    }
    else{
        echo "<script>alert('Error in Saving');</script>";
    }
}

       
        
    
   
 ?>
 
<!DOCTYPE html>
<html lang="en">


    
    
<form method="POST" enctype="multipart/form-data">
<!-- [ Main Content ] start -->
<section class="pcoded-main-container" style="margin-top: -650px;">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
         <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Add Certificate</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                         
                            <li class="breadcrumb-item"><a href="#!">Add Certificate</a></li>
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
                        <h5>Add Certificate</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                   
                                    <div class="form-group">
                                        <label>Picture </label>
                                        <br>
                                        <input type="file" name="fileupload1">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Certicate_number</label>
                                        <input type="Certicate_number" class="form-control" name="cnum" aria-describedby="emailHelp" placeholder="Enter Number">
                                        
                                    </div>
                                    <div class="form-group col-md-4">
                                    <label for="inputState">Course_Name</label>
                                    <select id="inputState" name="Course_Name" class="form-control" >
                                        
                                         <?php while($row=mysqli_fetch_assoc($rb))
                                            {?>
                                               <option><?php echo $row['name']?></option>
                                          <?php } ?>
                                        
                                    </select>
                                </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Trainee_name</label>
                                        <input type="text" class="form-control" name="Trainee_name"  placeholder="Enter Number">
                                    </div>
                                    
                                   
                                     
                                
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Training_Provider</label>
                                        <input type="text" class="form-control" name="tp" >
                                    </div>
                                     <div class="form-group">
                                        <label for="exampleInputPassword1">Instructor_Name</label>
                                        <input type="text" class="form-control" name="Instructor_Name" >
                                    </div>
                                    
                                    
                                    
                                    
                            </div>
                            <div class="col-md-6">
                              
                                    <div class="form-group">
                                        <label>Provider_ID-Number</label>
                                        <input type="text" class="form-control" name="Provider_ID_Number">
                                    </div>
                                     <div class="form-group">
                                        <label for="exampleInputPassword1">Course Duration</label>
                                        <input type="text" class="form-control" name="cd" >
                                    </div>
                                    
                                   <div class="form-group">
                                        <label>Completion_Date</label>
                                        <input type="text" class="form-control" name="Completion_Date">
                                    </div>
                                    <div class="form-group">
                                        <label>Expiration_Date</label>
                                        <input type="text" class="form-control" name="Expiraion_Date">
                                    </div>
                                    <div class="form-group">
                                        <label>Delivery_Method</label>
                                        <input type="text" class="form-control" name="Delivery_Mehod">
                                    </div>
                                    <div class="form-group">
                                        <label>Training_Providr_Telephone_Number</label>
                                        <input type="text" class="form-control" name="Training_Provider_Telephone_Number">
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
