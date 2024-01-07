<?php
    session_start();
    if(!isset($_SESSION['fullName'])){
        header('location:index.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type='text/css' href="./serverSIdeCss/style.php">
</head>
<body>
    <div class="nav-container">
        <div class="navbar">
            <h1><?php echo $_SESSION['fullName']; ?></h1>
            <div class="navImage1">
            <a href="./dashboard.php"><img src="./images/home.png" alt="Dashboard" class='logo'></a>
                <a href="./dashboard.php" class="links">Dashboard</a>
            </div>
            <div class="navImage2">
            <a href="./alumniList.php"><img src="./images/alumni.png" alt="Alumni Info" class='logo'></a>
                <a href="./alumniList.php" class="links">Alumni info</a>
            </div>
            <div class="navImage">
                <a href="./php/logout.php"><img src="./images/logout.png" alt="Logout" class='logo'></a>
                <a href="./php/logout.php" class="links">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>