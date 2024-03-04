

<!DOCTYPE html>
<html lang="en">

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
     <script>
        function validateInput() {
            const inputField = document.getElementById('inputField');
            const inputValue = inputField.value;

            // Define a regular expression pattern to allow only letters, numbers, and hyphens
            const pattern = /^[A-Za-z0-9\-]+$/;

            if (!pattern.test(inputValue)) {
                alert('Special characters are not allowed in the input field.');
                return false; // Prevent form submission
            }

            return true; // Allow form submission
        }
    </script>
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
    <br><br><br><br>

<center>
    <form onsubmit="return validateInput();" action="viewC.php">
        <label for="inputField" style="color: white; ">Enter Valid Certificate Number (without dashes):</label>
        <input type="text" id="inputField" name="inputField" required>
        <input type="submit" value="Submit" style="color: black;background-color:#e2af2c;">
    </form><br><br><br><br><br><br>
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