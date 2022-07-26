<?php
session_start();
// Include config file
require_once "../includes/connect.php";

if(isset($_POST['add_customer'])){
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $street = mysqli_real_escape_string($conn, $_POST['street']);
    $barangay = mysqli_real_escape_string($conn, $_POST['barangay']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $province = mysqli_real_escape_string($conn, $_POST['province']);

    $sql = "INSERT INTO customer (first_name, last_name, phone_number, street, barangay, city, province) VALUES 
    ('$fname', '$lname', '$phone', '$street', '$barangay' ,'$city', '$province')";

    $result = mysqli_query($conn, $sql);

    if($result){
        $_SESSION['message'] = "Customer Inserted Successfully";
        header("Location: ./cust_pull_add.php");
        exit(0);
    }else{
        $_SESSION['message'] = "Customer not Created";
        header("Location: ./cust_pull_add.php");
        exit(0);
    }
}   
?>