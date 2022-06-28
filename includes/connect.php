<?php
    
    
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "reservoir";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    // Check connection
    if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>