<?php
    require 'conn.php';
    session_start();
    $logout = session_destroy();
    if($logout){
        header('location:../adminLogin.php');
    }else {
        header('location: ../dashboard.php');
    }
?>