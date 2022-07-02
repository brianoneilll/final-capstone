<?php
    include_once 'connect.php';

    $Fname = $_POST['fname'];
    $Lname = $_POST['lname'];
    $pass = $_POST['password'];
    $street = $_POST['street'];
    $Barangay = $_POST['barangay'];
    $City = $_POST['city'];
    $Province = $_POST['province'];
    $Phonenumber = $_POST['phone'];

    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);





    $sql = "INSERT INTO customer (first_name, last_name, phone_number, pass, street, barangay, city, province) VALUES ('$Fname', '$Lname', '$Phonenumber', '$hashed_password', '$street', '$Barangay', '$City', '$Province');";
    
    mysqli_query($conn, $sql);

    header("Location: ../customer-login.php");
?>