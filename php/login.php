<?php
    require './conn.php';
    session_start();
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $account = "SELECT username, fullName FROM `accounts` WHERE username = '$username'";
        $query = mysqli_query($conn, $account);
        if($query){
            $loggedInUser = $username;
            $loggedInPassword = $password;
            if(mysqli_num_rows($query) > 0){
                $row = mysqli_fetch_assoc($query);
                if($username === $loggedInUser && $password === $loggedInPassword){
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['fullName'] = $row['fullName'];
                    header("location: ../dashboard.php");
                }else {
                    header('location: ../adminLogin.php');
                }
            }else {
                header('location: ../adminLogin.php');
            }
        }else {
            header('location: ../adminLogin.php');
        }
    }else {
        header('location: ../adminLogin.php');
    }
?>