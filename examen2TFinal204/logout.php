<?php 
    session_start(); 
    $_SESSION['cliente'] = null;
    unset($_SESSION['cliente']);
    $url = "index.php";
    header("Location:".$url);
?>
    
