<?php
include 'connection.php';

if (isset($_GET['delid'])) {
  $id=$_GET['delid'];
  $q="delete from courses where id='$id'";
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
   $idd=$_GET['editid']; 
    $name=$_GET['namee']; 
    $description=$_GET['description']; 
      $Duration=$_GET['Duration'];
         $Certificate=$_GET['Certificate'];
        $Requirements=$_GET['Requirements'];
          $Emphases=$_GET['Emphases'];
           $TargetGroups=$_GET['TargetGroups'];
            $Moftraining=$_GET['Moftraining'];
        $Query="UPDATE `courses` SET `name`='$name',`des`='$description',`duration`='$Duration',`certificate`='$Certificate',`req`='$Requirements',`emphasis`='$Emphases',`moftraining`='$Moftraining',`tgroups`='$TargetGroups' WHERE id=$idd";
         $rbm=mysqli_query($connn,$Query);
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
    $qa="select * from courses";
  $rb=mysqli_query($connn,$qa);

?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
<form method="GET">
<!-- [ Main Content ] start -->
<section class="pcoded-main-container" style="margin-top: -630px;">
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
       
         <div class="col-md-6">
                <div>
                    <div >
                        <h5>View Courses</h5>
                    </div>
                    
                        
                            <table class="table table-dark" style="height: 200px;">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                         <th>Name</th>
                                        <th>Description</th>
                                        <th>Duration</th>
                                       
                                        <th>Certificate</th>
                                        <th>Requirements</th>
                                        <th>Emphasis</th>
                                        <th>Moftraining</th>
                                        <th>Tgroups</th>
                                        <th>Action</th>
                                        

                                      
                                    </tr>
                                </thead>
                               <?php while($data=mysqli_fetch_assoc($rb)) {
            ?>
            <tr>
        <td ><?php echo $data["id"] ?></td>
        <td><?php echo $data["name"] ?></td>
        <td><?php echo $data["des"] ?></td>
        <td><?php echo $data["duration"] ?></td>
        
        <td><?php echo $data["certificate"] ?></td>
        <td><?php echo $data["req"] ?></td>
         <td><?php echo $data["emphasis"] ?></td>
        <td><?php echo $data["moftraining"] ?></td>
        <td><?php echo $data["tgroups"] ?></td>

        <td><div style="height:25px;background-color: white;">
            <a href="editcourse.php?editid=<?php echo $data["id"] ?>" style="color:black;">Edit   !</a>
        <a href="ViewCourses.php?delid=<?php echo $data["id"] ?>" style="color:black;">Delete</a></td></div>
        

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

