<?php
// Initialize the session
session_start();
 

 
// Include config file
require_once "../includes/connect.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
        $(document).ready (function(){
            $("#checkAll").click(function(){
                if($(this).is(":checked")){
                    $(".checkItem").prop('checked',true);
                }else{
                    $(".checkItem").prop('checked',false);
                }
            });
        });
    </script>
    <title>Delete</title>
</head>
<body class ="bg-info">
    <?php
        if(isset($_POST['submit'])){
            if(isset($_POST['id'])){
                foreach($_POST['id'] as $id){
                    $query="DELETE from customer WHERE cust_id='$id'";
                    mysqli_query($conn,$query);
                }
            }
        }
        $sql = "SELECT * FROM customer";
        $result = mysqli_query($conn, $sql);
        
    ?>
    <form action="sample-delte.php" method="POST">
        <div class="container">
            <div class="row-justify-content-center mt-2">
                <div class="col-md-12 bg-light rounded p-3">
                    <h2 class="text-center">heading</h2>
                    <table class="table">
                        <thead>
                            <tr>

                                <td>
                                    <input type="submit" name="submit" value="Delete" onclick="return confirm('are u sure u want to delete')" class="btn btn-danger">
                                </td>
                            </tr>
                        <tr>
                            <th><input type="checkbox" id="checkAll"></th>
                            <th>id</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Phone</th>
                            <th>Street</th>
                            <th>Barangay</th>
                            <th>City</th>
                            <th>Province</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                                while($row=mysqli_fetch_array($result)){

                                
                            ?>
                        <tr>
                            <td><input type="checkbox" class="checkItem" value="<?= $row['cust_id']?>" name ="id[]"></td>
                            <td><?= $row['cust_id']; ?></td>
                            <td><?= $row['first_name']; ?></td>
                            <td><?= $row['last_name']; ?></td>
                            <td><?= $row['phone_number']; ?></td>
                            <td><?= $row['street']; ?></td>
                            <td><?= $row['barangay']; ?></td>
                            <td><?= $row['city']; ?></td>
                            <td><?= $row['province']; ?></td>
                        </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>                
            </div>
        </div>
    </form>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>