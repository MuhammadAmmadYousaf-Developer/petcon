<?php 
    include 'connection.php';
    $n=$_GET['id'];
    $qeary="select * from courses where id='$n'";
    $dbms=mysqli_query($connn,$qeary);
    $mohsin=mysqli_fetch_assoc($dbms);
   
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
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>

<body style="font-family: 'Arial';">
  <?php include 'header.php'; ?>
 




    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.01s">

                    <div class="d-flex" >
                        <img class="img-fluid w-75 align-self-end" src="<?php echo $mohsin['img']; ?>" alt="" >
                        
                    </div>
                </div>

                <div class="wow fadeIn" data-wow-delay="0.5s">
                   
                    <h1 class="text-uppercase mb-4" style="color: #ffc107;  font-family: 'Raleway';"><?php echo $mohsin['name']; ?></h1>
                    <p style="color: white; font-family: 'Raleway';"><?php echo $mohsin['des']; ?></p>
                    <div class="row g-4">
                        <div class="col-md-6">
                           
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                
                                                
                            <table>
                              <tr>
                                <th style="color: white">Course duration:</th>
                                <th style="color: white"> <?php echo $mohsin['duration']; ?></th>
                              </tr>
                              <tr>
                                <td style="color: black;">Certificate:</td>
                                <td style="color: black;"><?php echo $mohsin['certificate']; ?></td>
                              </tr>
                              <tr>
                                <td style="color: white">Target groups:</td>
                                <td style="color: white"><?php echo $mohsin['tgroups']; ?></td>
                              </tr>
                              <tr>
                                <td style="color: black;">Requirements:</td>
                                <td style="color: black;"><?php echo $mohsin['req']; ?></td>
                              </tr>
                              <tr>
                                <td style="color: white">Emphasis:</td>
                                <td style="color: white"><?php echo $mohsin['emphasis']; ?></td>
                              </tr>
                              <tr>
                                <td style="color: black;">Method of Training:</td>
                                <td style="color: black;"><?php echo $mohsin['moftraining']; ?></td>
                              </tr>
                             
                            </table>
                </div>
            </div>
        </div>
    </div>
<center>

<form>
<button style="background-color: #ffc107;height: 50px; width: 150px" formaction="https://www.petconservices.com/about.php">
    Book Now
</button>
</form>
</center>
      

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