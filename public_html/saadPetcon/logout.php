<?php

if (isset($_SESSION['userid'])) {
    // Unset all session variables
    
    session_destroy();

    
}
?>