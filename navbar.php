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
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="grid">
        <div class="bg-blue-900 h-screen w-52 grid place-content-center gap-12
        max-[639px]:w-[20%]
        max-[639px]:h-screen
        max-[1024px]:w-[25%]
        max-[1024px]:h-[screen]
        ">
            <h1 class="text-2xl font-bold text-center text-white 
            max-[639px]:hidden"><?php echo $_SESSION['fullName']; ?></h1>
            <div class="flex justify-center items-center gap-5">
            <a href="./dashboard.php"><img src="./images/home.png" alt="Dashboard" class='w-10'></a>
                <a href="./dashboard.php" class="text-white font-bold hover:text-blue-500 
                max-[639px]:hidden">Dashboard</a>
            </div>
            <div class="flex justify-center items-center gap-5">
            <a href="./alumniList.php"><img src="./images/alumni.png" alt="Alumni Info" class='w-10'></a>
                <a href="./alumniList.php" class="text-white font-bold hover:text-blue-500 
                max-[639px]:hidden">Alumni info</a>
            </div>
            <div class="flex justify-center items-center gap-8">
                <a href="./php/logout.php"><img src="./images/logout.png" alt="Logout" class='w-10'></a>
                <a href="./php/logout.php" class="text-white font-bold hover:text-blue-500
                max-[639px]:hidden
                ">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>