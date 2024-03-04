<?php
if (!isset($_SESSION['userid'])) {
    // Redirect to the login page
    header('Location: login.php');
    // Make sure to exit to prevent further execution
}  else{
if(isset($_GET['submit'])){
	include 'connection.php';
        $name=$_GET['name']; 
        $description=$_GET['description']; 
        $Duration=$_GET['Duration'];
         $Duration=$_GET['Duration'];
         $Certificate=$_GET['Certificate'];
        
         $Requirements=$_GET['Requirements'];
          $Emphases=$_GET['Emphases'];
           $TargetGroups=$_GET['TargetGroups'];
            $Moftraining=$_GET['Moftraining'];
        
        $Query="INSERT INTO `courses`(`name`, `des`, `duration`, `certificate`, `req`, `emphasis`, `moftraining`, `tgroups`) VALUES ('$name','$Description','$Duration','$Certificate','$Requirements','$Emphases','$TargetGroups','$Moftraining')";
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">
    
	<title></title>
</head>
<body>

	<?php include 'adminheader.php'; ?>
	<form method="GET">
	
	

<!-- [ Main Content ] start -->

</form>
</body>
</html>