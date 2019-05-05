<?php
    session_start();
    header('location:../views/financement.php');
    
    $_SESSION['price'] = $_GET['price'];
    
    exit;
?>