<?php 
$connn = new mysqli("localhost","i9030221_wp2","Pakistan@12345","i9030221_wp2");
 if ($connn) {
    $ip = $_SERVER['REMOTE_ADDR'];
    $timestamp = date('Y-m-d H:i:s');

    // Insert visitor data into the database
    $query = "INSERT INTO visitors (timestamp, ip_address) VALUES ('$timestamp', '$ip')";
    mysqli_query($connn, $query);
    


    $qeary="SELECT * FROM courses LIMIT 4";
    $dbms=mysqli_query($connn,$qeary);
      $qe="select * from courses";
    $db=mysqli_query($connn,$qe);
        mysqli_close($connn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Petcon Services</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/oil.png" rel="icon">

    <!-- Google Web Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
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
        /* Define the container for the logo slider */
        .logo-slider {
            width: 100%;
            overflow: hidden;
            white-space: nowrap;
        }

        /* Define the individual logo items */
       
        /* Define the animation for moving the logos */
         

        body {
    font-family: 'Raleway';font-size: 22px;
}

    .image-container {
      width: 25%; /* Each container takes up 25% of the parent's width */
      float: left; /* Allows the containers to appear in a row */
      box-sizing: border-box; /* Includes padding and border in the width calculation */
      padding: 10px; /* Add padding for spacing */
    }

    .image-container img {
      max-width: 100%; /* Ensure images don't exceed the container width */
      height: auto; /* Maintain image aspect ratio */
    }
    

      
    </style>
</head>

<body background="black" style="font-family: Verdana, sans-serif;">
    <?php include 'header.php'; ?>

 
 <img src="img/20240118_125252.jpg" width="100%" height="70%" style="position: relative;
  display: inline-block;"> 
<!--
<img src="img/backk.jpg" width="100%" height="70%" style="position: relative;
  display: inline-block;">
<div class="overlay-text" style=" position: absolute;

  top: 65%;
  left: 50%;
  width: 100%;
  height: 100%;
  transform: translate(-50%, -50%);
  background-color: rgba(0, 0, 0, 0.7); /* Background color for the overlay */
  color: white; /* Text color on the overlay */
  padding: 10px; 
 ">
    <h1 style="font-family: 'Raleway'; font-size: 70px; margin-left: 7%; margin-top: 10%;">We Provide You The Best <br> Training Services</h1><br><br><br><br>





<img class="logo-item" src="img/iwcflogo.png" alt=""  style=" 
            display: inline-block;
               height: 13%;
            color: #fff;
             background-color: rgba(255,255,255,0.2);
            text-align: center;
            line-height: 100px;
            margin-left: 7%;
            margin-right: 10px;
            animation: moveLogo 20s linear infinite; ">

<img class="logo-item" src="img/cap.png" alt=""  style=" 
            display: inline-block;
               height: 13.3%;
               width: 1.7%;
            color: #fff;
            margin-left: -1.05%;
            opacity: 0.2;
            height: 4
             background-color: rgba(255,255,255,0.2);
            text-align: center;
            line-height: 100px;
            margin-right: 10px;
            animation: moveLogo 20s linear infinite; ">
            <img class="logo-item" src="img/IADC_Logo.png" alt=""  style=" 
            display: inline-block;
              margin-left: -1.05%;
              height: 13%;
                background-color: rgba(255,255,255,0.2);
            color: #fff;
            text-align: center;
            line-height: 100px;
            margin-right: 10px;
            animation: moveLogo 20s linear infinite; ">
            <img class="logo-item" src="img/cap.png" alt=""  style=" 
            display: inline-block;
               height: 13.3%;
               width: 1.7%;
            color: #fff;
            margin-left: -1.05%;
            opacity: 0.2;
            height: 4
             background-color: rgba(255,255,255,0.2);
            text-align: center;
            line-height: 100px;
            margin-right: 10px;
            animation: moveLogo 20s linear infinite; ">
     <img class="logo-item" src="img/Approved-training-provider-IOSH-logo-02-transparent-640w.png" alt="" style=" 
            display: inline-block;
           background-color: rgba(255,255,255,0.2);
             height: 13%;
      margin-left: -1.03%;
            color: #fff;
            text-align: center;
            line-height: 100px;
            margin-right: 10px;
            animation: moveLogo 20s linear infinite; ">
            <img class="logo-item" src="img/cap.png" alt=""  style=" 
            display: inline-block;
               height: 13.3%;
               width: 1.7%;
            color: #fff;
            margin-left: -1%;
            opacity: 0.2;
            height: 4
             background-color: rgba(255,255,255,0.2);
            text-align: center;
            line-height: 100px;
            margin-right: 10px;
            animation: moveLogo 20s linear infinite; ">
           
            
            
            <img class="logo-item" src="img/Nebosh-Silver-Large.png" alt=""  style=" 
            display: inline-block;
    background-color: rgba(255,255,255,0.2);
    margin-left: -1.05%;
                height: 13%;
            color: #fff;
            text-align: center;
            line-height: 100px;
            margin-right: 10px;
            animation: moveLogo 20s linear infinite; ">
            
            <img class="logo-item" src="img/iirsm-logo.png" alt=""  style=" 
            display: inline-block;
      background-color: rgba(255,255,255,0.2);
                height: 13%;
      margin-left: -1.01%;
            color: #fff;
            text-align: center;
            line-height: 100px;
            margin-right: 10px;
            animation: moveLogo 20s linear infinite; ">
            <img class="logo-item" src="img/RSoPA_Dark.png" alt=""  style=" 
            display: inline-block;
     background-color: rgba(255,255,255,0.2);
                height: 13%;
      margin-left: -1.05%;
            color: #fff;
            text-align: center;
            line-height: 100px;
            margin-right: 10px;
            animation: moveLogo 20s linear infinite; ">
            <img class="logo-item" src="img/cap.png" alt=""  style=" 
            display: inline-block;
               height: 13.3%;
               width: 1.7%;
            color: #fff;
            margin-left: -1.05%;
            opacity: 0.2;
            height: 4
             background-color: rgba(255,255,255,0.2);
            text-align: center;
            line-height: 100px;
            margin-right: 10px;
            animation: moveLogo 20s linear infinite; ">
            <img class="logo-item" src="img/habc.png" alt=""  style=" 
            display: inline-block;
   background-color: rgba(255,255,255,0.2);
                height: 13%;
             margin-left: -1.05%;
            color: #fff;
            text-align: center;
            line-height: 100px;
            margin-right: 10px;
            animation: moveLogo 20s linear infinite; ">
            
   
  
                    
                   
        
    </div></div>
  </div>
</div>

    <!-- Carousel End -->

    <!-- Carousel End -->

<div class="container-xxl py-5 ">
 <h1 class="" style="color: #c79c1a;  font-family: 'Raleway';"><br>A company with a mission to help clients  reach their <br> goals.</h1>
                     
</div>
    
    <div class="container-xxl py-5" style="margin-top=0%;">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.01s">
                    <div class="h-100">
                        <img class="img-fluid h-100" src="img/img1.jpg" alt="" style="height: 100px;">
                    </div>

                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.01s">
                    <div class="bg-secondary h-100 d-flex flex-column justify-content-center p-5">
                       <h1 class="mb-4" style="color: #c79c1a;  font-family: 'Raleway';">Who Are We</h1>
                        
                        <div>
                            <div class="d-flex justify-content-between  py-2">
                                <p class="mb-0" style="color: white;">A unique educational platform comprises of profound range of additional educational and training programs for the oil and gas industry under one umbrella. We are committed to provide the state-of-the-art trainings in order to perform in a safe and efficient manner through a range of internationally certified IADC, IWCF & customized PETCON courses.</p>
                               
                            </div>
                             <br>
                             <form>
                                 <button type="submit" formaction="https://www.petconservices.com/about.php" style="">Read More</button>
                              </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- About Start -->
    
    <!-- Price Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.01s">
                    <div class="bg-secondary h-100 d-flex flex-column justify-content-center p-5">
                       <h1 class="mb-4" style="color: #c79c1a;  font-family: 'Raleway';">Man Power Consultancy</h1>
                        
                        <div>
                            <div class="d-flex justify-content-between  py-2">
                                <p class="mb-0" style="color: white;font-size:15px;">"PETCON, a top Manpower Consultancy in Iraq & UAE for over 2 years, specializes in Board Search, Executive Recruitment, Middle Management Hiring, Project Based Hiring, and Recruitment Process Outsourcing. We're committed to nurturing future leaders and delivering competent personnel to foster professional growth for both clients and candidates."</p>
                               
                            </div>
                             <br>
                             <form>
                                 <button type="submit" formaction="https://www.petconservices.com/about.php">Read More</button>
                              </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.01s">
                    <div class="h-100">
                        <img class="img-fluid h-100" src="img/pexels-kateryna-babaieva-2760241 (1).jpg" alt="" style="height: 100px;">
                    </div>

                </div>
            </div>
        </div>
    </div>
    <br><br>
    <!-- Price End -->
    <center>
    <div style="width: 90%; background-color: #627478;"><br>
        <h2 style="font-family: 'Raleway';">What Our Founder Says</h2><br>
        <p style="color: white;">PETCON Oil & Gas Services is specialized in Accredited Training and certifications, Man Power provision, Drilling Equipment supply, and <br>maintenance. We strive to contribute to the quality assurance of personnel involved in operations worldwide while ensuring an <br> outstanding training experience for our clients.</p>
       <div class="user-icon">
    <i class="fas fa-user" style="color: #ABB0B3;"></i> <a style="color:#ABB0B3;">Mussab Lodhi</a>
  </div><br> 
    </div></center>

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
               </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.01s">
                    <div class="service-item position-relative overflow-hidden d-flex h-100 p-5 ps-0" style="background-color: #282F2D">
                        
                        <div class="ps-4">
                            <img class="img-fluid" src="img/c1.png" alt="" width="70">
                            <h3 class=" mb-3" style="font-family: 'Raleway';"><br>Class Room</h3> <br>
                            <p style="color: white;">Trainings are conducted in Petcon training halls by an instructor to students in an organized manner utilizing a lesson plan.</p>
                            
                        </div>
                       
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.01ss">
                    <div class="service-item position-relative overflow-hidden d-flex h-100 p-5 ps-0" style="background-color: #282F2D">
                        <div class="ps-4">
                             <img class="img-fluid" src="img/c2.png" alt="" width="130" style="margin-top: -30px;">
                            <h3 class=" mb-3" style="font-family: 'Raleway';margin-top: -30px;" > <br>Online Trainings</h3> <br>
                            <p style="color: white;">Petcon has ability to provide trainings by instructors over the internet via a computer, smartphone and other devices.</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.01s">
                    <div class="service-item position-relative overflow-hidden  d-flex h-100 p-5 ps-0" style="background-color: #282F2D">
                        
                        <div class="ps-4">
                            <img class="img-fluid" src="img/c33.png" alt="" width="70">
                            <h3 class="mb-3" style="font-family: 'Raleway';"><br>Onsite Trainings</h3><br>
                            <p style="color: white;">Petcon also provides professional trainings to organization employees at well site and corporation offices.</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Service End -->
   <center><b><h3 style="font-family:'Raleway';font-size=10px;" >Our Popular Courses</h3></center> </b>
<div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.01s">
                        <div class="h-100" style="border: solid black 10px;">
                            <img class="img-fluid" src="img/pexels-fauxels-3183153.jpg" alt="" style="height: 50%px;">
                        </div>
                        <table>
                            <tr>
                                <td>
                                    <div style="margin-top: -30%; margin-left: 3%;">
    <h5 style="font-family:'Raleway'; margin-top: 0%; font-size:15px; white-space: nowrap;">IWCF Well Control</h5>

</div>

                                </td>
                                <td>
                                    <img class="" src="img/image.png" alt="" style="margin-top: -20%; height:30%; width:30%;margin-left: 70%;"> 
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.01s">
                        <div class="h-100" style="border: solid black 10px;">
                            <img class="img-fluid" src="img/pexels-kevin-bidwell-3013676-1.jpg" alt="" style="height: 50%px;">
                        </div>
                        <table>
                            <tr>
                                <td>
                                    <div style="margin-top: -30%;margin-left: 3%;font-size:15px; white-space: nowrap;"><h5 style="font-family:'Raleway';font-size:15px">Stuck pipe training</h5></div>
                                </td>
                                <td>
                                    <img class="" src="img/image.png" alt="" style="margin-top: -20%; height:30%; width:30%;margin-left: 70%;"> 
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.01s" style="margin-top: 2%;">
                        <div class="h-100" style="border: solid black 10px;">
                            <img class="img-fluid" src="img/pexels-yury-kim-585419.jpg" alt="" style="height: 50%px;">
                        </div>
                        <table>
                            <tr>
                                <td>
                                    <div style="margin-top: -35%;margin-left: 3%;font-size:15px; white-space: nowrap;"><h5 style="font-family:'Raleway';font-size:15px">IADC Well Sharp
                                        </h5></div>
                                </td>
                                <td>
                                    <img class="" src="img/image.png" alt="" style="margin-top: -20%; height:30%; width:30%;margin-left: 70%;"> 
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.01s" style="margin-top: 2%;">
                        <div class="h-100" style="border: solid black 10px;">
                            <img class="img-fluid" src="img/pexels-magda-ehlers-2569842.jpg" alt="" style="height: 50%px;">
                        </div>
                        <table>
                            <tr>
                                <td>
                                    <div style="margin-top: -20%;margin-left: 3%;"><h5 style="font-family:'Raleway';font-size:15px">Stuck pipe training including drills simulator practice
                                        </h5></div>
                                </td>
                                <td>
                                    <img class="" src="img/image.png" alt="" style="margin-top: -28%; height:40%; width:40%;margin-left: 55%;"> 
                                </td>
                            </tr>
                        </table>
                    </div>
               
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <!-- Team Start -->
   
    <!-- Team End -->




    <center>
        <div class="h-100">
                        <img class="img-fluid" src="img/map.png" alt="" style="height: 30%;">
                    </div>
        
  
 
   <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.01s" style="max-width: 600px;">
                
                <br><br><a href="courses.php" style="color: #ffc107; font-size: 20px;" >See All Courses</a>
            </div> 
            <!--
            
     <div class="logo-slider" style=" height: 100px;background-color: rgba(255,255,255,0.5)" >
        <!-- Repeat the logo item 7 times for the seven logos 
         <img class="logo-item" src="img/IADC_Logo.png" alt=""  style=" 
            display: inline-block;
            height: 70px;
            color: #fff;
            text-align: center;
            line-height: 100px;
            margin-right: 10px;
            animation: moveLogo 29s linear infinite; ">
        <img class="logo-item" src="img/Approved-training-provider-IOSH-logo-02-transparent-640w.png" alt="" style=" 
            display: inline-block;
         
            height: 100px;
     
            color: #fff;
            text-align: center;
            line-height: 100px;
            margin-right: 10px;
            animation: moveLogo 25s linear infinite; ">
            
            
            
            <img class="logo-item" src="img/iwcflogo.png" alt=""  style=" 
            display: inline-block;
            height: 70px;
            color: #fff;
            text-align: center;
            line-height: 100px;
            margin-right: 10px;
            animation: moveLogo 20s linear infinite; ">
            <img class="logo-item" src="img/Nebosh-Silver-Large.png" alt=""  style=" 
            display: inline-block;
   
            height: 70px;
            
            color: #fff;
            text-align: center;
            line-height: 100px;
            margin-right: 10px;
            animation: moveLogo 20s linear infinite; ">
            <img class="logo-item" src="img/ae5c15b785894274858ec532c9dd158b.png" alt=""  style=" 
            display: inline-block;
   
            height: 70px;
            
            color: #fff;
            text-align: center;
            line-height: 100px;
            margin-right: 10px;
            animation: moveLogo 20s linear infinite; ">
           
    </div> 
    
    -->
    <img src="img/abcd.PNG" width="100%" height="40%" style="position: relative;
  display: inline-block;"> 
</center>
<?php include 'canvas.php'; ?>
<?php include 'footer.php'; ?>


    
   
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000); // Change image every 7 seconds
}
</script>
    <!-- JavaScript Libraries -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

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