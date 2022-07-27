<?php
session_start();
// Include config file
require_once "../includes/connect.php";
if(isset($_POST['delete_customer'])){
    $cust_id = mysqli_real_escape_string($conn, $_POST['delete_customer']);

    $query = "DELETE FROM customer WHERE cust_id = '$cust_id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run){
        $_SESSION['message'] = "Customer Deleted Successfully";
        header("Location: ./pull-sched.php");
        exit(0);
    }else{
        $_SESSION['message'] = "Customer Not Deleted";
        header("Location: ./pull-sched.php");
        exit(0);
    }
}


if(isset($_POST['update_customer'])){
    $cust_id = mysqli_real_escape_string($conn, $_POST['cust_id']);
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $street = mysqli_real_escape_string($conn, $_POST['street']);
    $barangay = mysqli_real_escape_string($conn, $_POST['barangay']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $province = mysqli_real_escape_string($conn, $_POST['province']);

    $query = "UPDATE customer SET first_name='$fname', last_name='$lname', phone_number='$phone', street='$street',
    barangay='$barangay', city='$city', province='$province' WHERE cust_id='$cust_id'";

    $query_run = mysqli_query($conn, $query);

    if($query_run){
        $_SESSION['message'] = "Customer Updated Successfully";
        header("Location: ./pull-sched.php");
        exit(0);
    }else{
        $_SESSION['message'] = "Customer Not Updated";
        header("Location: ./pull-sched.php");
        exit(0);
    }
}

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