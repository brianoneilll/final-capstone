<?php
session_start();
// Include config file
require "../includes/connect.php";

if(isset($_POST['delete_customer'])){
    $cust_id = mysqli_real_escape_string($conn, $_POST['cust_id']);

    $query = "DELETE FROM customer WHERE cust_id='$cust_id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run){
        $res = [
            "status" => 200,
            "message" => "Customer Deleted Successfully"
        ];
        echo json_encode($res);
        return false;
    }else{
        $res = [
            "status" => 500,
            "message" => "Customer Not Deleted"
        ];
        echo json_encode($res);
        return false;
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


    if($fname == NULL || $lname == NULL || $phone == NULL || $street == NULL || $barangay == NULL || $city == NULL || $province == NULL){
        $res = [
            "status" => 422,
            "message" => "All fields are mandatory"
        ];
        echo json_encode($res);
        return false;
    }

    $sql = "UPDATE customer SET first_name='$fname', last_name='$lname', phone_number='$phone', street='$street', barangay='$barangay', 
    city='$city', province='$province'  WHERE cust_id='$cust_id'";  

    $result = mysqli_query($conn, $sql);

    if($result){
        $res = [
            "status" => 200,
            "message" => "Customer Updated"
        ];
        echo json_encode($res);
        return false;
    }else{
        $res = [
            "status" => 500,
            "message" => "Customer Not Updated"
        ];
        echo json_encode($res);
        return false;
    }
}


if(isset($_GET['cust_id'])){
    $cust_id = mysqli_real_escape_string($conn, $_GET['cust_id']);

    $query =  "SELECT * FROM customer WHERE cust_id='$cust_id'";
    $query_run = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($query_run) == 1){

        $customer = mysqli_fetch_array($query_run);

        $res = [
            "status" => 200,
            "message" => "Customer Fetch Successfully by ID",
            'data' => $customer
        ];
        echo json_encode($res);
        return false;
    }else{
        $res = [
            "status" => 404,
            "message" => "Customer ID Not Found"
        ];
        echo json_encode($res);
        return false;
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


    if($fname == NULL || $lname == NULL || $phone == NULL || $street == NULL || $barangay == NULL || $city == NULL || $province == NULL){
        $res = [
            "status" => 422,
            "message" => "All fields are mandatory"
        ];
        echo json_encode($res);
        return false;
    }

    $sql = "INSERT INTO customer (first_name, last_name, phone_number, street, barangay, city, province) VALUES 
    ('$fname', '$lname', '$phone', '$street', '$barangay' ,'$city', '$province')";

    $result = mysqli_query($conn, $sql);

    if($result){
        $res = [
            "status" => 200,
            "message" => "Customer Added Successfully"
        ];
        echo json_encode($res);
        return false;
    }else{
        $res = [
            "status" => 500,
            "message" => "Customer Not Created"
        ];
        echo json_encode($res);
        return false;
    }
}


if(isset($_POST['update_customer'])){
        $customer_id = mysqli_real_escape_string($con, $_POST['cust_id']);
        $fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $lname = mysqli_real_escape_string($conn, $_POST['lname']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $street = mysqli_real_escape_string($conn, $_POST['street']);
        $barangay = mysqli_real_escape_string($conn, $_POST['barangay']);
        $city = mysqli_real_escape_string($conn, $_POST['city']);
        $province = mysqli_real_escape_string($conn, $_POST['province']);

        if($fname == NULL || $lname == NULL || $phone == NULL || $street == NULL || $barangay == NULL || $city == NULL || $province == NULL)
        {
            $res = [
                'status' => 422,
                'message' => 'All fields are mandatory'
            ];
            echo json_encode($res);
            return;
        }
    
        $query = "UPDATE customer SET first_name='$fname', last_name='$lname', phone_number='$phone', street='$street', barangay='$barangay', city='$city', province='$province' 
                    WHERE cust_id='$customer_id'";
        $query_run = mysqli_query($con, $query);
    
        if($query_run)
        {
            $res = [
                'status' => 200,
                'message' => 'Student Updated Successfully'
            ];
            echo json_encode($res);
            return;
        }
        else
        {
            $res = [
                'status' => 500,
                'message' => 'Student Not Updated'
            ];
            echo json_encode($res);
            return;
        }
    
    }

?>