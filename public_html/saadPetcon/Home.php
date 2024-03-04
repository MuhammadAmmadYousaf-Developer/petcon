
<?php
    include 'adminheader.php';
	include 'connection.php';
      session_start();

// Check if the session ID exists
if (!isset($_SESSION['userid'])) {
    // Redirect to the login page
    header('Location: auth-signin.php');
    // Make sure to exit to prevent further execution
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

	hey

<!-- [ Main Content ] start -->

</form>
</body>
</html>