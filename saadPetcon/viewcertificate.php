<?php

   include 'connection.php';

if (isset($_GET['delid'])) {
  $Certificate_Number=$_GET['delid'];

  $q="delete from certificate where Certificate_Number='$Certificate_Number'";
  
  $r=mysqli_query($connn,$q);
  if ($r) {
           echo '<script type ="text/JavaScript">';  
           echo 'alert("Data Deleted")';  
           echo '</script>'; 
  }else
  {
      echo '<script type ="text/JavaScript">';  
           echo 'alert("Data Could Not Delete")';  
           echo '</script>';
   }
}

if(isset($_GET['update'])){
  
     $Certificate_Number=$_GET['cnum']; 
        $Trainee_Name=$_GET['Trainee_name']; 
        $Course_Name=$_GET['Course_Name'];
        $tp=$_GET['tp'];
         $pid=$_GET['Provider_ID_Number'];
         $Completion_Date=$_GET['Completion_Date'];
         $Expiraion_Date=$_GET['Expiraion_Date'];
          $Delivery_Mehod=$_GET['Delivery_Mehod'];
           $Instructor_Name=$_GET['Instructor_Name'];
           $Training_Provider_Telephone_Number=$_GET['Training_Provider_Telephone_Number'];

        $qwertyy="UPDATE `certificate` SET `Certificate_Number`='$Certificate_Number',`Trainee_name`='$Trainee_Name',
        `Course_Name`='$Course_Name',`Training_Provider`='$tp',`Provider_ID_Number`='$pid',`Completion_Date`='$Completion_Date',
        `Expiraion_Date`='$Expiraion_Date',`Delivery_Mehod`='$Delivery_Mehod',`Instructor_Name`='$Instructor_Name',
        `Training_Provider_Telephone_Number`='$Training_Provider_Telephone_Number' WHERE Certificate_Number='$Certificate_Number'";
       
         $rbm=mysqli_query($connn,$qwertyy);
         echo $rbm;
         if ($rbm) {
           echo '<script type ="text/JavaScript">';  
           echo 'alert("Data Updated Successfully")';  
           echo '</script>'; 
  }else
  {
      echo '<script type ="text/JavaScript">';  
           echo 'alert("Data Could Not Updated")';  
           echo '</script>';
   }

}

     


     include 'adminheader.php';
    $qa="select * from certificate";
  $rb=mysqli_query($connn,$qa);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> View Certificate</title>
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
                            <h5 class="m-b-10">View Certificate</h5>
                        </div>
                        <ul class="breadcrumb"  style="margin-top: 50px;">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                         
                            <li class="breadcrumb-item"><a href="#!">View Certificate</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
       
         <div class="col-md-6">
                <div>
                    <div >
                        <h5>View Certificates</h5>
                    </div>
                    
                        
                            <table class="table table-dark" style="height: 200px;width: -50px;">
                                <thead>
                                    <tr>
                                        <th>Certificate_Number</th>
                                        <th>Trainee_Picture</th>
                                        <th>Trainee_Name</th>
                                        <th>Course_Name</th>
                                        <th>Training_provider</th>
                                        <th>Provider_ID_Number</th>
                                        <th>Completion_Date</th>
                                        <th>Expirtaion_Date</th>
                                        <th>Delivery_Method</th>
                                        <th>Instructor_Name</th>
                                        <th>Training_Provider_Telephone_No</th>
                                        <th>Action</th>
                                      
                                    </tr>
                                </thead>
                               <?php while($data=mysqli_fetch_assoc($rb)) {
            ?>
            <tr>
        <td><?php echo $data["Certificate_Number"] ?></td>
       <td>
                
    <img class="img-fluid" src="<?php 
            $string = $data['img'];
                $array = explode("/", $string);
    
    echo $array[1]."/".$array[2]; ?>" alt="" style="width:30mm; height:30mm;">
</td>

        <td><?php echo $data["Trainee_name"] ?></td>
        <td><?php echo $data["Course_Name"] ?></td>
        <td><?php echo $data["Training_Provider"] ?></td>
        <td><?php echo $data["Provider_ID_Number"] ?></td>
        <td><?php echo $data["Completion_Date"] ?></td>
        <td><?php echo $data["Expiraion_Date"] ?></td>
        <td><?php echo $data["Delivery_Mehod"] ?></td> 
        <td><?php echo $data["Instructor_Name"] ?></td>
        <td><?php echo $data["Training_Provider_Telephone_Number"] ?></td>
        <td><div style="height:25px;background-color: white;">
            <a href="editCer.php?editid=<?php echo $data["Certificate_Number"] ?>" style="color:black;">Edit   !</a>
            <a href="viewcertificate.php?delid=<?php echo $data["Certificate_Number"] ?>" style="color:black;">Delete</a></td></div>

    <?php } ?>
 </tr>
</table>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
                                    
                                   
                         
                            </div>
                        </div>
                       
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