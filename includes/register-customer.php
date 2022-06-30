<?php
    include_once 'connect.php';

    $Fname = $_POST['Fname'];
    $Lname = $_POST['Lname'];
    $Phonenumber = $_POST['Phonenumber'];
    $Street = $_POST['Street'];
    $Barangay = $_POST['Barangay'];
    $City = $_POST['City'];
    $Province = $_POST['Province'];





    $sql = "INSERT INTO customer (first_name, last_name, phone_number, password, street, barangay, city, province) VALUES ('$Fname', '$Lname', '$Phonenumber', '$password', '$Street', '$Barangay', '$City', '$Province');";

    mysqli_query($conn, $sql);

    header("Location: ../customer-login.php");
?>