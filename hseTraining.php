<?php 
    include 'connection.php';
    $qeary="select * from hse";
    $dbms=mysqli_query($connn,$qeary);
  
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Online HSE Training-Petcon</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
<link href="img/oil.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Oswald:wght@600&display=swap" rel="stylesheet">

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
    <style>
  /* Style for the text overlay */
  .image-container {
    position: relative;
    display: inline-block;
  }

  .text-overlay {
    position: absolute;
    top: 90px; /* Adjust the top position as needed */
    
    font-size: 18px; /* Adjust the font size as needed */
    color: white; /* Adjust the text color as needed */
    background-color: rgba(0, 0, 0, 0.5); /* Adjust the background color and opacity as needed */
    padding: 5px; /* Adjust the padding as needed */
  }
</style>

</head>

<body style="font-family: Verdana, sans-serif;">
  <?php include 'header.php'; ?>
  <div style="border: black;height: 100px;width: 100px;"></div>
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="
          background: linear-gradient(rgba(0, 0, 0, .85), rgba(0, 0, 0, .85)), url() center center no-repeat;
             background-size: cover;

    ">
        <div class="container text-center py-5" style="margin-top: -10%;">
            <p class="slideInDown" style="color:#e2af2c;">Online HSE Training</p>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home / HSE Training</a></li> 
                    
                    <li></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    
        <center>
            <img src="img/20231005_175928.jpg" style="height: 50%;width: 70%;">
  
  </center>

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.01s" style="max-width: 600px;">
                <p class="d-inline-block bg-secondary text-primary py-1 px-4"></p>
                <h1 class="text-uppercase"></h1>
            </div>
            <div class="row g-4">

                <?php while($mohsin=mysqli_fetch_assoc($dbms))  { ?>
                <div class="col-lg-3 col-md-6 wow fadeInUp hover-div" data-wow-delay="0.01s">
                    <div class="team-item">
                        
                        <div class="text-center p-4" style="
                                  border-radius: 25px;
                                  background-color: #282F2D;
                                  background-position: left top;
                                  background-repeat: repeat;
                                  padding: 20px;
                                  height: 220px;
                                  ">
                                  <?php  include 'canvas.php'; ?>
                          <b style="color: white; font-family: 'Raleway'">  Code : <?php echo $mohsin['code']; ?> </b><hr>
                            <h6 class="text-uppercas\e" style="color:#e2af2c; font-family: 'Arial';font-family: 'Raleway';"> <?php echo $mohsin['name']; ?></h5>
                             <hr>
                            <img src="img/c.png" alt="" class="img-fluid" style="height: 25px;"><b style="color: white; font-family: 'Raleway';margin-left: 5%;"><?php echo $mohsin['duration']; ?> </b><br>
                            
                        </div>
                    </div>
                </div>
                
                 <?php } ?>
               
            </div>
        </div>
    </div>
    <!-- Team End -->
<center>
     <img src="img/pexels-martin-damboldt-799096.jpg" width="60%" height="70%" style="position: relative;
  display: inline-block;"> </center>


      

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
</body>

</html>