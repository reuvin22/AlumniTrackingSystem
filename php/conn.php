<?php
    $conn = mysqli_connect('localhost', 'root', '', 'ats');

    if(!$conn){
        echo 'Connection Error';
    }
?>