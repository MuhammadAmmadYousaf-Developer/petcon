<?php 
    include 'connection.php';
    $qeary="select * from courses";
    $dbms=mysqli_query($connn,$qeary);
    
   
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Courses-Petcon</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/oil.png" rel="icon">
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
    
</head>

<body >
  <?php include 'header.php'; ?>
  <form action="ViewCourse.php" method="POST">
  <div style="border: black;height: 100px;width: 100px;"></div>
    <!-- Page Header Start -->
    
        <div class="container text-center py-5"  style="margin-top: -5%;">
             <p class="slideInDown" style="color:#e2af2c;">Courses</p>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home / Courses</a></li> 
                    
                    <li></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Team Start -->
    <div class="container-xxl py-5" style="margin-top: -5%;">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.01s" style="max-width: 600px;">
                <p class="d-inline-block bg-secondary text-primary py-1 px-4"></p>
                <h1 class="text-uppercase"></h1>
            </div>
            <div class="row g-4">

                <?php while($mohsin=mysqli_fetch_assoc($dbms))  { ?>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.01s">
                    <div class="team-item">
                        <div class="">
                            <img class="img-fluid" src=" <?php echo $mohsin['img']; ?>" alt="">
                            
                        </div>
                        <div class="bg-secondary text-center p-4">
                            <h5 class="text-uppercas\e" style="color:#e2af2c;font-family: 'Arial'; font-family: 'Raleway';"> <?php echo $mohsin['name']; ?></h5>
                             <br>
                             <input type="hidden" name="id" value="<?php echo $mohsin['id'] ?>">
                             <center>
                             <div style="background-color:#e2af2c;height: 7%;width: 30%" >
                             <a href="ViewCourse.php?id=<?php echo $mohsin['id'] ?>"><font style="color: black;">Details</b></font> </a></div>
                          </center>
                        </div>
                    </div>
                </div>
                
                 <?php } ?>
               
            </div>
        </div>
    </div>
    <!-- Team End -->


      

    <!-- Footer Start -->
    <?php include 'footer.php'; ?>
    <!-- Footer End -->


   

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</form>
</body>

</html>