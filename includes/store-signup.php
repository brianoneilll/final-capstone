<?php
    include_once 'connect.php';

    $name = $_POST['Name'];
    $street = $_POST['Street'];
    $barangay = $_POST['Barangay'];
    $city = $_POST['City'];
    $province = $_POST['Province'];



    $sql = "INSERT INTO store (Name, Street, Barangay, City, Province) VALUES ('$name', '$street', '$barangay', '$city', '$province');";

    mysqli_query($conn, $sql);

    header("Location: ../vendor/vendor-dashboard.php");
?>