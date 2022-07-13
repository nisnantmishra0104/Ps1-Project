<?php
session_start();

$conn = mysqli_connect('localhost','nishant','test1234','inventory');

if(isset($_POST['update'])){
    $productname = $_POST['productname'];
    $company = $_POST['company'];
    $quantity = $_POST['quantity'];

    $query = "UPDATE products SET quantity = '$quantity' WHERE (productname = '$productname' AND company = '$company') ";
    $query_run = mysqli_query($conn,$query);
    if($query_run){
        $_SESSION['status'] = "Updated";
        echo 'update complete';
    }
    else{
        $_SESSION['status'] = "Not Updated";
        echo 'update incomplete';
    }
  }
?>