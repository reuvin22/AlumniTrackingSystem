<?php
    require 'conn.php';

    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $id = $_GET['id'];
    
        $deleteQuery = "DELETE FROM `alumni` WHERE id = $id";
        $result = mysqli_query($conn, $deleteQuery);
    

        if($result){
            header("location: ../alumniList.php");
        }
    }
?>