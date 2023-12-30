<?php
    require './conn.php';
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $mname = mysqli_real_escape_string($conn, $_POST['mname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $studentNumber = mysqli_real_escape_string($conn, $_POST['studentNumber']);
    $occupation = mysqli_real_escape_string($conn, $_POST['occupation']);
    $company = mysqli_real_escape_string($conn, $_POST['company']);
    $civilStatus = mysqli_real_escape_string($conn, $_POST['civilStatus']);
    $year = mysqli_real_escape_string($conn, $_POST['year']);
    $currentWork = mysqli_real_escape_string($conn, $_POST['currentWork']);
    $relatedOrNot = mysqli_real_escape_string($conn, $_POST['relatedOrNot']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);

    if(isset($_POST['submit'])){
        $sql = "INSERT INTO `alumni`(`studentNumber`, `firstName`, `middleName`, `lastName`, `occupation`, `company`, `civilStatus`, `course`, `relatedOrNot`, `year`, `currentWork`) VALUES ('$studentNumber','$fname', '$mname', '$lname', '$occupation', '$company', '$civilStatus', '$course', '$relatedOrNot', '$year', '$currentWork')";

        $query = mysqli_query($conn, $sql);

        if(!$query){
            echo 'Data Not Inserted!';
        }
    }
    $conn->close();
?>