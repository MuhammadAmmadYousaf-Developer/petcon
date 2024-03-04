<?php
  session_start();
if (!isset($_SESSION['userid'])) {
    // Redirect to the login page
    header('Location: auth-signin.php');
    // Make sure to exit to prevent further execution
}  else{
if (isset($_GET['delid'])) {
  $code=$_GET['delid'];
  $q="delete from hse where code='$code'";
  $r=mysqli_query(mysqli_connect("localhost","root","","petcon"),$q);
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
  
        $code=$_GET['code']; 
        $name=$_GET['name'];
        $duration=$_GET['duration'];

        $qq="UPDATE `hse` SET `code`='$code',`name`='$name',
        `duration`='$duration' WHERE code=$code";
       
         $rbm=mysqli_query($connn,$qq);
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
$qa="select * from hse";
  $rb=mysqli_query($connn,$qa);
}
?>
<html>
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
                            <h5 class="m-b-10">View HEC</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                         
                            <li class="breadcrumb-item"><a href="#!">View HEC</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
       
         <div class="col-md-6">
                <div>
                    <div >
                        <h5>View HEC</h5>
                    </div>
                    
                        
                            <table class="table table-dark" style="height: 200px;">
                                <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th>Name</th>
                                        <th>Duration</th>
                                        <th>Action</th>
                                        
                                      
                                    </tr>
                                </thead>
                               <?php while($data=mysqli_fetch_assoc($rb)) {
            ?>
            <tr>
        <td><?php echo $data["code"] ?></td>
        <td><?php echo $data["name"] ?></td>
        <td><?php echo $data["duration"] ?></td>
        <td><div style="height:25px;background-color: white;">
            <a href="edithec.php?editid=<?php echo $data["code"] ?>" style="color:black;">Edit   !</a>
        <a href="View_HEC.php?delid=<?php echo $data["code"] ?>" style="color:black;">Delete</a></td></div>
    

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
