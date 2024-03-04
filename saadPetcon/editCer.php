<?php
include 'adminheader.php';
    include 'connection.php';
    session_start();
    $id=$_SESSION['userid'];
    $qe="select * from user where id=$id";
    $db=mysqli_query($connn,$qe);
    $data=mysqli_fetch_assoc($db);
    $qa="select * from courses";
  $rb=mysqli_query($connn,$qa);
 $id=$_GET['editid'];
$QWERY12345="SELECT * FROM `certificate` where Certificate_Number='$id' ";
 $datares=mysqli_query($connn,$QWERY12345);
 $RESULTYYYYYYY=mysqli_fetch_assoc($datares);

 ?>
<!DOCTYPE html>
<html lang="en">


    
    
<form method="GET" action="viewcertificate.php">
<!-- [ Main Content ] start -->
<section class="pcoded-main-container" style="margin-top: -650px;">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
         <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Edit Certificate</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                         
                            <li class="breadcrumb-item"><a href="#!">Edit Certificate</a></li>
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
                                        <label for="exampleInputEmail1">Certicate_number</label>
                                        <input type="Certicate_number" class="form-control" name="cnum" aria-describedby="emailHelp" 
                                         value="<?php echo  $RESULTYYYYYYY['Certificate_Number']?>">
                                        
                                    </div>
                                    <div class="form-group col-md-4">
                                    <label for="inputState">Course_Name</label>
                                    <select id="inputState" name="Course_Name" class="form-control" value="<?php echo $RESULTYYYYYYY['Course_Name']?>" >
                                        <option> <?php echo $data['Course_Name']?></option>
                                         <?php while($row=mysqli_fetch_assoc($rb))
                                            {?>
                                                 
                                               <option><?php echo $row['name']?></option>
                                          <?php } ?>
                                        
                                    </select>
                                </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Trainee_name</label>
                                        <input type="text" class="form-control" name="Trainee_name"  placeholder="Enter Number" value="<?php echo $RESULTYYYYYYY['Trainee_name']?>">
                                    </div>
                                    
                                   
                                     
                                
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Training_Provider</label>
                                        <input type="text" class="form-control" name="tp" value="<?php echo $RESULTYYYYYYY['Training_Provider']?>">
                                    </div>
                                     <div class="form-group">
                                        <label for="exampleInputPassword1">Instructor_Name</label>
                                        <input type="text" class="form-control" name="Instructor_Name" value="<?php echo $RESULTYYYYYYY['Instructor_Name']?>" >
                                    </div>
                                    
                                    
                            </div>
                            <div class="col-md-6">
                              
                                    <div class="form-group">
                                        <label>Provider_ID-Number</label>
                                        <input type="text" class="form-control" name="Provider_ID_Number" 
                                        value="<?php echo $RESULTYYYYYYY['Provider_ID_Number']?>">
                                    </div>
                                   <div class="form-group">
                                        <label>Completion_Date</label>
                                        <input type="text" class="form-control" name="Completion_Date" value="<?php echo $RESULTYYYYYYY['Completion_Date']?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Expiration_Date</label>
                                        <input type="text" class="form-control" name="Expiraion_Date" value="<?php echo $RESULTYYYYYYY['Expiraion_Date']?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Delivery_Method</label>
                                        <input type="text" class="form-control" name="Delivery_Mehod" 
                                        value="<?php echo $RESULTYYYYYYY['Delivery_Mehod']?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Training_Providr_Telephone_Number</label>
                                        <input type="text" class="form-control" name="Training_Provider_Telephone_Number" 
                                        value="<?php echo $RESULTYYYYYYY['Training_Provider_Telephone_Number']?>">
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
   
    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>




</body>

</html>
