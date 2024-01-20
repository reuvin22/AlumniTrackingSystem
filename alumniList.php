<?php
    require './php/conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Tracking System</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="flex">
        <?php require 'navbar.php'?>
        <div class=" w-screen flex justify-center place-items-center">
            <div class="tableContainer  w-[90%] h-[700px] max-[1024]:w-[20%]">
                    <div class="text-center text-4xl font-bold mb-5">List of University Alumni</div>
                    <table class="">
                        <thead>
                            <tr>
                                <th>Student Number</th>
                                <th>Full Name</th>
                                <th>Gender</th>
                                <th>Course</th>
                                <th>Year Graduated</th>
                                <th>Civil Status</th>
                                <th>Employment Status</th>
                                <th>Related/Not</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "SELECT * FROM `alumni`";
                                $query = mysqli_query($conn, $sql);
                                if($query){
                                    if(mysqli_num_rows($query) > 0){
                                        while($row = mysqli_fetch_assoc($query)){
                                            echo "<tr>
                                            <td>". $row['studentNumber']."</td>
                                            <td>". $row['firstName']. " ".$row['middleName']. " ". $row['lastName']."</td>
                                            <td>".$row['gender']."</td>
                                            <td>".$row['course']."</td>
                                            <td>". $row['years']."</td>
                                            <td>". $row['civilStatus']."</td>
                                            <td>".$row['employmentStatus']."</td>
                                            <td>".$row['relatedOrNot']."</td>
                                            <td>
                                                <div class='buttonsCrud'>
                                                    <a href='./php/deleteData.php?id=".$row['id']."'>
                                                        <button class='bg-red-500 text-white px-5 py-2 rounded-xl hover:bg-red-800'>Delete</button>
                                                    </a>
                                                </div>
                                            </td>
                                            </tr>";
                                        }
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</body>
</html>