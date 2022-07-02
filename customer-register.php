<?php

session_start();
// Include config file
require_once "includes/connect.php";

?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Reservoir | Registration</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="../../../assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../../assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../../assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../assets/img/favicons/favicon.ico">
    <link rel="manifest" href="../../../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../../../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="../../../assets/js/config.js"></script>
    <script src="../../../vendors/overlayscrollbars/OverlayScrollbars.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="./vendors/overlayscrollbars/OverlayScrollbars.min.css" rel="stylesheet">
    <link href="./assets/css/theme.min.css" rel="stylesheet" id="style-default">
    <link href="assets/css/user.min.css" rel="stylesheet" id="user-style-default">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>


  </head>
  <body>
  
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="container-fluid">
        <div class="row min-vh-100 flex-center g-0">
          <div class="col-lg-8 col-xxl-5 py-3 position-relative"><img class="bg-auth-circle-shape" src="../../../assets/img/icons/spot-illustrations/bg-shape.png" alt="" width="250"><img class="bg-auth-circle-shape-2" src="../../../assets/img/icons/spot-illustrations/shape-1.png" alt="" width="150">
            <div class="card overflow-hidden z-index-1">
              <div class="card-body p-0">
                <div class="row g-0 h-100">
                  <div class="col-md-5 text-center bg-card-gradient">
                    <div class="position-relative p-4 pt-md-5 pb-md-7 light">
                      <div class="bg-holder bg-auth-card-shape" style="background-image:url(../../../assets/img/icons/spot-illustrations/half-circle.png);"></div>
                      <!--/.bg-holder-->
                      <div class="z-index-1 position-relative"><a class="link-light mb-4 font-sans-serif fs-4 d-inline-block fw-bolder" href="index.php">Reservoir</a>
                        <p class="opacity-75 text-white">With the power of Reservoir, you can now purchase water, while you are on your comfort zone!</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-7 d-flex flex-center">
                    <div class="p-4 p-md-5 flex-grow-1">
                      <h3>Customer Registration</h3>
                    <form action="includes/register-customer.php" method="post">
                          <div class="form-group">
                              <label>First Name</label>
                              <input type="text" name="fname" class="form-control">
                              <span class="invalid-feedback"></span>
                          </div>    
                          <div class="form-group">
                              <label>Last Name</label>
                              <input type="text" name="lname" class="form-control">
                              <span class="invalid-feedback"></span>
                          </div>   
                          <div class="form-group">
                              <label>Password</label>
                              <input type="password" name="password" class="form-control">
                              <span class="invalid-feedback"></span>
                          </div>
                          <div class="form-group">
                              <label>Street</label>
                              <input type="text" name="street" class="form-control">
                              <span class="invalid-feedback"></span>
                          </div> 
                          <div class="form-group">
                              <label>Barangay</label>
                              <input type="text" name="barangay" class="form-control">
                              <span class="invalid-feedback"></span>
                          </div> 
                          <div class="form-group">
                              <label>City</label>
                              <input type="text" name="city" class="form-control">
                              <span class="invalid-feedback"></span>
                          </div> 
                          <div class="form-group">
                              <label>Province</label>
                              <input type="text" name="province" class="form-control">
                              <span class="invalid-feedback"></span>
                          </div> <br>
                          <div class="form-group">
                              <label>Phone Number</label>
                              <input type="tel" id="phone" name="phone" class="form-control">
                              <span class="invalid-feedback"></span>
                          </div><br>
                          <div class="form-group">
                              <input type="submit" class="btn btn-primary" value="Register">
                          </div><br>
                          <p>Already have an account? <a href="customer-login.php">Login Here</a>.</p>
                      </form>
                      <div class="alert alert-info" style="display: none;"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="../../../vendors/popper/popper.min.js"></script>
    <script src="../../../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../../../vendors/anchorjs/anchor.min.js"></script>
    <script src="../../../vendors/is/is.min.js"></script>
    <script src="../../../vendors/fontawesome/all.min.js"></script>
    <script src="../../../vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="../../../vendors/list.js/list.min.js"></script>
    <script src="../../../assets/js/theme.js"></script>
  </body>

  <script>
   const phoneInputField = document.querySelector("#phone");
   const phoneInput = window.intlTelInput(phoneInputField, {
     utilsScript:
       "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
   });

    const info = document.querySelector(".alert-info");

    function process(event) {
    event.preventDefault();

    const phoneNumber = phoneInput.getNumber();

    info.style.display = "";
    info.innerHTML = `Phone number in E.164 format: <strong>${phoneNumber}</strong>`;
    }
   </script>

</html>