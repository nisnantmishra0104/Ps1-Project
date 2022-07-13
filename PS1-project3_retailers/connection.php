<?php
//Mysqli or PDO
    $conn = mysqli_connect('localhost','nishant','test1234','login');

    // Checking connection
    if(!$conn){
        die('connection error');
    }
?>