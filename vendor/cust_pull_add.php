<?php
// Initialize the session
session_start();
 
// Include config file
require_once "../includes/connect.php";

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
    <link href="../vendors/fullcalendar/main.min.css" rel="stylesheet">
    <link href="../vendors/flatpickr/flatpickr.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="../vendors/overlayscrollbars/OverlayScrollbars.min.css" rel="stylesheet">
    <link href="../assets/css/theme.min.css" rel="stylesheet" id="style-default">
    <link href="../assets/css/user.min.css" rel="stylesheet" id="user-style-default">
  
  </head>
  <body>
  
  <div class="container mt-5 mb-5">

    <?php include('customer-add-alert.php') ?>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Add Customer
            <a href="./pull-sched.php" class="btn btn-danger float-right">Back</a></h4>
          </div>
          <div class="card-body">
            <form action="./customer-pull-config.php" method="POST">

              <div class="mb-3">
                <label>First Name</label>
                <input type="text" name="fname" class="form-control">
              </div>
              <div class="mb-3">
                <label>Last Name</label>
                <input type="text" name="lname" class="form-control">
              </div>
              <div class="mb-3">
                <label>Phone</label>
                <input type="number" name="phone" class="form-control">
              </div>
              <div class="mb-3">
                <label>Street</label>
                <input type="text" name="street" class="form-control">
              </div>
              <div class="mb-3">
                <label>Barangay</label>
                <input type="text" name="barangay" class="form-control">
              </div>
              <div class="mb-3">
                <label>City</label>
                <input type="text" name="city" class="form-control">
              </div>
              <div class="mb-3">
                <label>Province</label>
                <input type="text" name="province" class="form-control">
              </div>
              <div class="mb-3">
                <button type="submit" name="add_customer" class="btn btn-primary">Add Customer</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>