<?php
    require './conn.php';
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $mname = mysqli_real_escape_string($conn, $_POST['mname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $studentNumber = mysqli_real_escape_string($conn, $_POST['studentNumber']);
    $civilStatus = mysqli_real_escape_string($conn, $_POST['civilStatus']);
    $year = mysqli_real_escape_string($conn, $_POST['year']);
    $relatedOrNot = mysqli_real_escape_string($conn, $_POST['relatedOrNot']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);
    $employmentStatus = mysqli_real_escape_string($conn, $_POST['employmentStatus']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);

    if(isset($_POST['submit'])){
        $sql = "INSERT INTO `alumni`(`studentNumber`, `firstName`, `middleName`, `lastName`,  `gender`, `civilStatus`, `course`, `relatedOrNot`, `years`, `employmentStatus`) VALUES ('$studentNumber','$fname', '$mname', '$lname', '$gender', '$civilStatus', '$course', '$relatedOrNot', '$year', '$employmentStatus')";

        $query = mysqli_query($conn, $sql);

        if(!$query){
            echo 'Data Not Inserted!';
        }else {
            header('location: ../index.php');
        }
    }
    $conn->close();
?>