<?php
    session_start();
    session_destroy();
     
    // We redirect them to the login page 
    header("Location: index.php"); 
    die("Redirecting to: index.php");
?>