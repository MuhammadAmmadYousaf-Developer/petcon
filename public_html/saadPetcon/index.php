<?php
    session_start();
    include 'connection.php';
  if (isset($_GET['signin'])) {
      $username=$_GET['username'];
      $password=$_GET['password'];
      $query="SELECT * from user where email='$username' and password='$password' ";
     
      $r=mysqli_query($connn,$query);
      if(mysqli_num_rows($r)>0){
        $row=mysqli_fetch_assoc($r);
        $_SESSION['userid']=$row['id'];
       
        header("location:Home.php");
      }
      else {
          echo "<script>alert('Invalid Username or Password');</script>";
      }
  }
  ?>
<!DOCTYPE html>
<html lang="en">

<head>

	<title>Admin-Petcon</title>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="assets/images/logo1.png" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="assets/css/style.css">
	
	


</head>
<body >
<!-- [ auth-signin ] start -->
<div style="
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    min-width: 100%;
    min-height: 100vh;
    background: black;
    background-image: url('img/back.jpg');
    background-size: cover;
    background-attachment: fixed;
    background-position: center; "

>
<form action="index.php" method="GET">
	<div class="auth-content text-center" >
		<a href="index.html" class="logo me-auto"><img src="img/logo.png" alt="" class="img-fluid" style="height: 60px; background-color: black"></a>
		<div class="card borderless" style="width: 370px;">
			<div class="row align-items-center ">
				<div class="col-md-12">
					<div class="card-body">
						<h4 class="mb-3 f-w-400">Signin</h4>
						<hr>
						<div class="form-group mb-3">
							<input type="text" class="form-control"  name="username" placeholder="Email address">
						</div>
						<div class="form-group mb-4">
							<input type="password" class="form-control" name="password" placeholder="Password">
						</div>
						
						<button name="signin" style="background-color: black; color: #e2af2c; padding: 10px 20px; border: none; cursor: pointer;"
        onmouseover="this.style.backgroundColor='#e2af2c'; this.style.color='black';"onmouseout="this.style.backgroundColor='black'; this.style.color='white';">
    Sign In
</button>
						<hr>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="assets/js/plugins/bootstrap.min.js"></script>

<script src="assets/js/pcoded.min.js"></script>



</body>

</html>
