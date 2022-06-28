<?php 
        include_once 'connect.php';
        

        $first = mysqli_real_escape_string($conn,  $_POST['Firstname']);
        $last = mysqli_real_escape_string($conn, $_POST['Lastname']);
        $storename = mysqli_real_escape_string($conn, $_POST['Storename']);
        $phonenumber = mysqli_real_escape_string($conn, $_POST['Phonenumber']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pass = mysqli_real_escape_string($conn, $_POST['pwd']);
        $age = mysqli_real_escape_string($conn, $_POST['Age']);
        $address = mysqli_real_escape_string($conn, $_POST['Address']);

        $sql = "INSERT INTO `vendor`(`First_Name`, `Last_Name`, `Store_Name`, `Phone_Number`, `Email`, `Pass`, `Age`, `Address`) VALUES ('$first','$last','$storename','$phonenumber','$email','$pass','$age','$address')";
        mysqli_query($conn, $sql);

        header("location: ../index.php?signup=success");


    
    

      ?>