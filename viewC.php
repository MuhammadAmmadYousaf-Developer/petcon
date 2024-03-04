
<?php
error_reporting(0);


include 'connection.php';
            $r=$_GET['inputField'];
            $query="SELECT * from certificate where Certificate_Number='$r' ";
      $r=mysqli_query($connn,$query);
       $rowww=mysqli_fetch_assoc($r);
      if(mysqli_num_rows($r)>0){
      
      }
      else {

          echo "<script>alert('Please Enter Valid Certificate Number');</script>";
           header("location:certificate.php");
      }
        






    session_start();
    include 'connection.php';
  $id= $_SESSION['checkid'];
echo $id;
     $qmb="select * from certificate where Certificate_Number='$id' ";
    $dab=mysqli_query($connn,$qmb);
    $da=mysqli_fetch_assoc($dab);
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta charset="utf-8">
    <title>Petcon</title>
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

<body>
  <?php include 'header.php'; ?>
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-uppercase mb-3 animated slideInDown" style="color:#e2af2c;">E-Certificate</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home / </a></li> 
                    
                    <li><a style="color:#e2af2c;">   Certificate</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <br><br>

<center>
    <div class="">
    <img class="img-fluid" src="<?php echo $rowww['img']; ?>" alt="" style="width:40mm; height:50mm;">
</div>

    
    
  <a style="color: white;">
     <h1 class="display-3 text-uppercase mb-3 animated slideInDown" style="color:#e2af2c;"><?php echo $rowww["Trainee_name"] ?></h1>
</center>
<div>
<table>
  <tr>
    <th>Certificate Number:</th>
    <th > <?php echo $rowww["Certificate_Number"] ?> </th>
  </tr>
  <tr>
    <td style="color: black;">Trainee Name:</td>
    <td style="color: black;"><?php echo $rowww["Trainee_name"] ?></td>
  </tr>
  <tr>
    <td>Course Name:</td>
    <td><?php echo $rowww["Course_Name"] ?></td>
  </tr>
  <tr>
    <td style="color: black;">Training Provider:</td>
    <td style="color: black;"><?php echo $rowww["Training_Provider"] ?></td>
  </tr>
  <tr>
    <td>Provider ID Number:</td>
    <td><?php echo $rowww["rovider_ID_Number"] ?></td>
  </tr>
  <tr>
    <td style="color: black;">Course Duration:</td>
    <td style="color: black;"> <?php echo $rowww["cd"] ?></td>
  </tr>
  <tr>
    <td style="color: white;">Completion Date:</td>
    <td style="color: white;"> <?php echo $rowww["Completion_Date"] ?></td>
  </tr>
  <tr>
    <td style="color: black;">Expiration Date:</td>
    <td style="color: black;"> <?php echo $rowww["Expiraion_Date"] ?></td>
  </tr>
  <tr>
    <td>Delivery Method:</td>
    <td> <?php echo $rowww["Delivery_Mehod"] ?></td>
  </tr>
  <tr>
    <td style="color: black;">Instructor Name:</td>
    <td style="color: black;"><?php echo $rowww["Instructor_Name"] ?></td>
  </tr>
  <tr>
    <td>Training Provider Telephone Number:</td>
    <td> <?php echo $rowww["Training_Provider_Telephone_Number"] ?></td>
  </tr>
  
</table>
 </div>
   </a>
   <center>
   	<br>
<img class="" src="img/verified-3d-gold-badge-with-red-ribbon-vector-16734320-removebg-preview.png" alt="" style="height:17%; width:17%;"> <b style="color: white;">
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