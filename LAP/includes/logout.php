<?php session_start(); ?>

<?php

        
        $_SESSION['id'] = null;
        $_SESSION['email'] = null;
        $_SESSION['password'] = null;
        $_SESSION['role'] = null;
        
        header("Location: ../index.php")
        
 
?>


