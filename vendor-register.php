<?php

session_start();
// Include config file
require_once "includes/connect.php";
// Define variables and initialize with empty values
$username = $password = $confirm_password = $storename = $storeadd = $phone = $dc = "";
$username_err = $password_err = $confirm_password_err = $storename_err = $storeadd_err = $phone_err = $dc_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9]+$/', trim($_POST["username"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT vendor_id FROM vendor WHERE username = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
        // Validate store name
        if(empty(trim($_POST["storename"]))){
          $username_err = "Please enter a Store name.";
      } elseif(!preg_match('/^[a-zA-Z0-9_ -]+$/', trim($_POST["storename"]))){
          $storename_err = "store name can only contain letters, numbers, and underscores.";
      } else{
          // Prepare a select statement
          $sql = "SELECT vendor_id FROM vendor WHERE storename = ?";
          
          if($stmt = mysqli_prepare($conn, $sql)){
              // Bind variables to the prepared statement as parameters
              mysqli_stmt_bind_param($stmt, "s", $param_storename);
              
              // Set parameters
              $param_storename = trim($_POST["storename"]);
              
              // Attempt to execute the prepared statement
              if(mysqli_stmt_execute($stmt)){
                  /* store result */
                  mysqli_stmt_store_result($stmt);
                  
                  if(mysqli_stmt_num_rows($stmt) == 1){
                      $storename_err = "This store name is already taken.";
                  } else{
                      $storename = trim($_POST["storename"]);
                  }
              } else{
                  echo "Oops! Something went wrong. Please try again later.";
              }
  
              // Close statement
              mysqli_stmt_close($stmt);
          }
      }
      
              // Validate store address
              if(empty(trim($_POST["storeadd"]))){
                $storeadd_err = "Please enter a Store address.";
            } elseif(!preg_match('/^[a-zA-Z0-9 -]+$/', trim($_POST["storeadd"]))){
                $storeadd_err = "store address can only contain letters, numbers.";
            } else{
                // Prepare a select statement
                $sql = "SELECT vendor_id FROM vendor WHERE storeadd = ?";
                
                if($stmt = mysqli_prepare($conn, $sql)){
                    // Bind variables to the prepared statement as parameters
                    mysqli_stmt_bind_param($stmt, "s", $param_storeadd);
                    
                    // Set parameters
                    $param_storeadd = trim($_POST["storeadd"]);
                    
                    // Attempt to execute the prepared statement
                    if(mysqli_stmt_execute($stmt)){
                        /* store result */
                        mysqli_stmt_store_result($stmt);
                        
                        if(mysqli_stmt_num_rows($stmt) == 1){
                            $storeadd_err = "This store address is already taken.";
                        } else{
                            $storeadd = trim($_POST["storeadd"]);
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
        
                    // Close statement
                    mysqli_stmt_close($stmt);
                }
            }
            // Validate phone
            if(empty(trim($_POST["phone"]))){
              $phone_err = "Please enter a dcription.";
          } elseif(!preg_match('/^[0-9+]+$/', trim($_POST["phone"]))){
              $phone_err = "phone can only contain numbers.";
          } else{
            $sql = "SELECT vendor_id FROM vendor WHERE phone = ?";
          
            if($stmt = mysqli_prepare($conn, $sql)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "s", $param_phone);
                
                // Set parameters
                $param_phone = trim($_POST["phone"]);
                
                // Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt)){
                    /* store result */
                    mysqli_stmt_store_result($stmt);
                    if(mysqli_stmt_num_rows($stmt) == 1){
                      $dc_err = "This phone is already taken.";
                  } else{
                      $phone = trim($_POST["phone"]);
                  }
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }
    
                // Close statement
                mysqli_stmt_close($stmt);
            }
        }
            // Validate dcription 
            if(empty(trim($_POST["dc"]))){
              $dc_err = "Please enter a dcription.";
          } elseif(!preg_match('/^[a-zA-Z0-9 -]+$/', trim($_POST["dc"]))){
              $dc_err = "description can only contain letters and numbers.";
          } else{
            $sql = "SELECT vendor_id FROM vendor WHERE dc = ?";
          
            if($stmt = mysqli_prepare($conn, $sql)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "s", $param_dc);
                
                // Set parameters
                $param_dc = trim($_POST["dc"]);
                
                // Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt)){
                    /* store result */
                    mysqli_stmt_store_result($stmt);
                    if(mysqli_stmt_num_rows($stmt) == 1){
                      $dc_err = "This description is already taken.";
                  } else{
                      $dc = trim($_POST["dc"]);
                  }
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }
    
                // Close statement
                mysqli_stmt_close($stmt);
            }
        }
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
      
        $user = mysqli_real_escape_string($conn, $_POST['username']);
        $pwd = mysqli_real_escape_string($conn, $_POST['password']); 
        $strname = mysqli_real_escape_string($conn, $_POST['storename']);
        $des = mysqli_real_escape_string($conn, $_POST['dc']);
        $phne = mysqli_real_escape_string($conn, $_POST['phone']);
        // Prepare an insert statement
        $sql = "INSERT INTO vendor (username, password, storename, storeadd, phone, dc) VALUES (?, ?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssss", $param_username, $param_password, $param_storename, $param_storeadd, $param_phone, $param_dc);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_storename = $storename;
            $param_storeadd = $storeadd;
            $param_dc = $dc;
            $param_phone = $phone;
            
            // Store data in session variables
            $_SESSION["storename"] = $storename;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: vendor-login.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($conn);
}
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
                      <h3>Vendor Registration</h3>
                      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                            <span class="invalid-feedback"><?php echo $username_err; ?></span>
                        </div>    
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                            <span class="invalid-feedback"><?php echo $password_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                            <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Store Name</label>
                            <input type="text" name="storename" class="form-control <?php echo (!empty($storename_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $storename; ?>">
                            <span class="invalid-feedback"><?php echo $storename_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Store Address</label>
                            <input type="text" name="storeadd" class="form-control <?php echo (!empty($storeadd_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $storeadd; ?>">
                            <span class="invalid-feedback"><?php echo $storeadd_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>phone</label>
                            <input type="text" name="phone" class="form-control <?php echo (!empty($phone_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $phone; ?>">
                            <span class="invalid-feedback"><?php echo $phone_err; ?></span>
                          </div>
                        <div class="form-group">
                            <label>decription</label>
                            <input type="text" name="dc" class="form-control <?php echo (!empty($dc_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $dc; ?>">
                            <span class="invalid-feedback"><?php echo $dc_err; ?></span>
                          </div><br>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Register">
                            <input type="reset" class="btn btn-secondary ml-2" value="Reset">
                        </div>
                        <p>Already have an account? <a href="vendor-login.php">Login here</a></p>
                    </form>
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

</html>