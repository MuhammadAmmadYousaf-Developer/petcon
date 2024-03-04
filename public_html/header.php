<?php 
    include 'connection.php';
    $qe="select * from courses";
    $db=mysqli_query($connn,$qe);
 ?>
<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
    <title>Petcon Company</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
	<title>
		
	</title>
    <style>
        body {
    font-family: 'Raleway';font-size: 22px;
}
    </style>
</head>
<body >
<nav class="navbar navbar-expand-lg navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s" style="background-color: black;">
    

    <a href="index.php" class="navbar-brand ms-4 ms-lg-0">
        <a href="index.php" class="logo me-auto"><img src="img/Logo-File.png" alt="" class="img-fluid" style="height: 75px;"></a>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="about.php" class="nav-item nav-link" style="color: white;font-family: 'Raleway';" onmouseover="this.style.color='#e2af2c'" onmouseout="this.style.color='white'">ABOUT US</a>
            
                <div class="nav-item dropdown">
                    <a href="courses.php" class="nav-link" style="color: white;font-family: 'Raleway';" data-bs-toggle="dropdown" onmouseover="this.style.color='#e2af2c'" onmouseout="this.style.color='white'">COURSES ↓ </a>
                    <div class="dropdown-menu m-0" style="background-color: black;width: 400px;">
                        <a href="courses.php"  style="color: white;font-family: 'Raleway';"  onmouseover="this.style.color='#e2af2c'" onmouseout="this.style.color='white' "><b>&#160 View All Courses<br><br></a></b>
                        <?php while($row=mysqli_fetch_assoc($db)) { ?>
                        <div style="">
                                
                            <a href="ViewCourse.php?id=<?php echo $row['id']?>"  style="color: white;font-family: 'Raleway';"  onmouseover="this.style.color='#e2af2c'" onmouseout="this.style.color='white' "> &#160 <?php echo $row['name']?><br><br></a>
                            </div>
                        <?php } ?>
                         
                            </div>
                    </div>
                </div>
           
            <a href="hseTraining.php" class="nav-item nav-link" style="color: white;font-family: 'Raleway'; font-size:18px;" onmouseover="this.style.color='#e2af2c'" onmouseout="this.style.color='white'">ONLINE HSE TRAINING</a>
            <a href="index.php" class="nav-item nav-link" style="color: white;font-family: 'Raleway';font-size:18px;" onmouseover="this.style.color='#e2af2c'" onmouseout="this.style.color='white'" >HOME</a>
           
        </div>
    </div>
</nav>
</body>
</html>