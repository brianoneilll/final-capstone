<?php
// Initialize the session
session_start();
 

 
// Include config file
require_once "../includes/connect.php";

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
    <title>Vendor | Pull Orders</title>
    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/reservoir.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/reservoir.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/reservoir.png">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/reservoir.png">
    <link rel="manifest" href="../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../assets/img/reservoir.png">
    <meta name="theme-color" content="#ffffff">
    <script src="../assets/js/config.js"></script>
    <script src="../vendors/overlayscrollbars/OverlayScrollbars.min.js"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="../vendors/fullcalendar/main.min.css" rel="stylesheet">
    <link href="../vendors/flatpickr/flatpickr.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="../vendors/overlayscrollbars/OverlayScrollbars.min.css" rel="stylesheet">
    <link href="../assets/css/theme.min.css" rel="stylesheet" id="style-default">
    <link href="../assets/css/user.min.css" rel="stylesheet" id="user-style-default">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    
    


    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
      var isRTL = JSON.parse(localStorage.getItem('isRTL'));
      if (isRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
      } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
      }
    </script>

  </head>

  <body>

<!--Add Customer Modal -->
<div class="modal fade" id="addCustomerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Customer</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id ="saveCustomer" method="POST">
        <div class="modal-body">
          <div class="alert">
              <div id="errorMessage" class="alert alert-warning d-none"></div>
          </div>
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
            <input type="text" name="phone" class="form-control">
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
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add Customer</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Edit Customer Modal -->
<div class="modal fade" id="customerEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Customer</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id ="updateCustomer" method="POST">
        <div class="modal-body">
          <div class="alert">
              <div id="errorMessageUpdate" class="alert alert-warning d-none"></div>
              <input type="hidden" name="cust_id" id="cust_id">
          </div>
          <div class="mb-3">
            <label>First Name</label>
              <input type="text" name="fname" id="fname" class="form-control">
          </div>
          <div class="mb-3">
            <label>Last Name</label>
            <input type="text" name="lname" id="lname" class="form-control">
          </div>
          <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="phone" id="phone" class="form-control">
          </div>
          <div class="mb-3">
            <label>Street</label>
            <input type="text" name="street" id="street" class="form-control">
          </div>
          <div class="mb-3">
            <label>Barangay</label>
            <input type="text" name="barangay" id="barangay" class="form-control">
          </div>
          <div class="mb-3">
            <label>City</label>
            <input type="text" name="city" id="city" class="form-control">
          </div>
          <div class="mb-3">
            <label>Province</label>
            <input type="text" name="province" id="province" class="form-control">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update Customer</button>
        </div>
      </form>
        </div>
    </div>
</div>

<!-- View Customer Modal -->
<div class="modal fade" id="customerViewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Customer</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <div class="mb-3">
            <label>First Name</label>
            <p id="view_fname"class="form-control"></p>
          </div>
          <div class="mb-3">
            <label>Last Name</label>
            <p id="view_lname"class="form-control"></p>
          </div>
          <div class="mb-3">
            <label>Phone</label>
            <p id="view_phone"class="form-control"></p>
          </div>
          <div class="mb-3">
            <label>Street</label>
            <p id="view_street"class="form-control"></p>
          </div>
          <div class="mb-3">
            <label>Barangay</label>
            <p id="view_barangay"class="form-control"></p>
          </div>
          <div class="mb-3">
            <label>City</label>
            <p id="view_city"class="form-control"></p>
          </div>
          <div class="mb-3">
            <label>Province</label>
            <p id="view_province"class="form-control"></p>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="container" data-layout="container">
        <script>
          var isFluid = JSON.parse(localStorage.getItem('isFluid'));
          if (isFluid) {
            var container = document.querySelector('[data-layout]');
            container.classList.remove('container');
            container.classList.add('container-fluid');
          }
        </script>
        <nav class="navbar navbar-light navbar-vertical navbar-expand-xl" style="display: none;">
          <script>
            var navbarStyle = localStorage.getItem("navbarStyle");
            if (navbarStyle && navbarStyle !== 'transparent') {
              document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
            }
          </script>
          <div class="d-flex align-items-center">
            <div class="toggle-icon-wrapper">
              <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            </div><a class="navbar-brand" href="#.html">
              <div class="d-flex align-items-center py-3"><span class="font-sans-serif">Reservoir</span></div>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
            <div class="navbar-vertical-content scrollbar">
              <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                
                <!---------------------------------------- START OF REVISED NAVBAR CONTENT------------------------------------------>

                <li class="nav-item">
                  <a class="nav-link" href="vendor-dashboard.PHP" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-pie">
                    </span></span><span class="nav-link-text ps-1">Dashboard</span></div>
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link active" href="push-sched.php" role="button" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-day">             
                    </span></span><span class="nav-link-text ps-1">Push Schedule</span></div>
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="pull-sched.php" role="button" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-bell">    
                    </span></span><span class="nav-link-text ps-1">Pull Orders</span></div>
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="products.php" role="button" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-burn">
                    </span></span><span class="nav-link-text ps-1">Add Product</span></div>
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="clients.php" role="button" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-users">
                    </span></span><span class="nav-link-text ps-1">Clients</span></div>
                  </a>
                </li>
            </div>
          </div>
        </nav>
                        <!---------------------------------------- END OF REVISED NAVBAR CONTENT-------------------------------------------->
        <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-xl" style="display: none;">
          <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
        </nav>
        <div class="content">
          <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand" style="display: none;">
          <!--START OF SEARCH BAR-->
            <ul class="navbar-nav align-items-center d-none d-lg-block">
              <li class="nav-item">
                <div class="search-box" data-list='{"valueNames":["title"]}'>
                  <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input fuzzy-search" type="search" placeholder="Search..." aria-label="Search" />
                    <span class="fas fa-search search-box-icon"></span>
                  </form>
                  <div class="btn-close-falcon-container position-absolute end-0 top-50 translate-middle shadow-none" data-bs-dismiss="search">
                    <div class="btn-close-falcon" aria-label="Close"></div>
                  </div>
                  <div class="dropdown-menu border font-base start-0 mt-2 py-0 overflow-hidden w-100">
                    <div class="scrollbar list py-3" style="max-height: 24rem;">
                      <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">Recently Browsed</h6><a class="dropdown-item fs--1 px-card py-1 hover-primary" href="../app/events/event-detail.html">
                        <div class="d-flex align-items-center">
                          <span class="fas fa-circle me-2 text-300 fs--2"></span>
                          <div class="fw-normal title">Pages <span class="fas fa-chevron-right mx-1 text-500 fs--2" data-fa-transform="shrink-2"></span> Events</div>
                        </div>
                      </a>
                      <a class="dropdown-item fs--1 px-card py-1 hover-primary" href="../app/e-commerce/customers.html">
                        <div class="d-flex align-items-center">
                          <span class="fas fa-circle me-2 text-300 fs--2"></span>
                          <div class="fw-normal title">E-commerce <span class="fas fa-chevron-right mx-1 text-500 fs--2" data-fa-transform="shrink-2"></span> Customers</div>
                        </div>
                      </a>
                      <hr class="bg-200 dark__bg-900" />
                      <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">Suggested Filter</h6><a class="dropdown-item px-card py-1 fs-0" href="../app/e-commerce/customers.html">
                        <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-soft-warning">customers:</span>
                          <div class="flex-1 fs--1 title">All customers list</div>
                        </div>
                      </a>
                      <a class="dropdown-item px-card py-1 fs-0" href="../app/events/event-detail.html">
                        <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-soft-success">events:</span>
                          <div class="flex-1 fs--1 title">Latest events in current month</div>
                        </div>
                      </a>
                      <a class="dropdown-item px-card py-1 fs-0" href="../app/e-commerce/product/product-grid.html">
                        <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-soft-info">products:</span>
                          <div class="flex-1 fs--1 title">Most popular products</div>
                        </div>
                      </a>
                      <hr class="bg-200 dark__bg-900" />
                      <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">Files</h6><a class="dropdown-item px-card py-2" href="#!">
                        <div class="d-flex align-items-center">
                          <div class="file-thumbnail me-2"><img class="border h-100 w-100 fit-cover rounded-3" src="../assets/img/sample-pp.png" alt="" /></div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">iPhone</h6>
                            <p class="fs--2 mb-0 d-flex"><span class="fw-semi-bold">Antony</span><span class="fw-medium text-600 ms-2">27 Sep at 10:30 AM</span></p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item px-card py-2" href="#!">
                        <div class="d-flex align-items-center">
                          <div class="file-thumbnail me-2"><img class="img-fluid" src="../assets/img/icons/zip.png" alt="" /></div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">Reservoir</h6>
                            <p class="fs--2 mb-0 d-flex"><span class="fw-semi-bold">John</span><span class="fw-medium text-600 ms-2">30 Sep at 12:30 PM</span></p>
                          </div>
                        </div>
                      </a>
                      <hr class="bg-200 dark__bg-900" />
                      <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">Members</h6><a class="dropdown-item px-card py-2" href="../pages/user/profile.html">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-l status-online me-2">
                            <img class="rounded-circle" src="../assets/img/team/1.jpg" alt="" />
                          </div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">Anna Karinina</h6>
                            <p class="fs--2 mb-0 d-flex">Technext Limited</p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item px-card py-2" href="../pages/user/profile.html">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-l me-2">
                            <img class="rounded-circle" src="../assets/img/team/2.jpg" alt="" />
                          </div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">Antony Hopkins</h6>
                            <p class="fs--2 mb-0 d-flex">Brain Trust</p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item px-card py-2" href="../pages/user/profile.html">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-l me-2">
                            <img class="rounded-circle" src="../assets/img/team/3.jpg" alt="" />
                          </div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">Emma Watson</h6>
                            <p class="fs--2 mb-0 d-flex">Google</p>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="text-center mt-n3">
                      <p class="fallback fw-bold fs-1 d-none">No Result Found.</p>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
            <!--END OF SEARCH BAR-->
            <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>

            <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
              <li class="nav-item dropdown">
                <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait" id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-bell" data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-card dropdown-menu-notification" aria-labelledby="navbarDropdownNotification">
                  <div class="card card-notification shadow-none">
                    <div class="card-header">
                      <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                          <h6 class="card-header-title mb-0">Notifications</h6>
                        </div>
                        <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal" href="#">Mark all as read</a></div>
                      </div>
                    </div>
                    <div class="scrollbar-overlay" style="max-height:19rem">
                      <div class="list-group list-group-flush fw-normal fs--1">
                        <div class="list-group-title border-bottom">NEW</div>
                        <div class="list-group-item">
                          <a class="notification notification-flush notification-unread" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-2xl me-3">
                                <img class="rounded-circle" src="../assets/img/team/1-thumb.png" alt="" />
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>Brian Galang</strong> replied to your comment : "Hello world 😍"</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">💬</span>Just now</span>
                            </div>
                          </a>
                        </div>
                        <div class="list-group-item">
                          <a class="notification notification-flush notification-unread" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-2xl me-3">
                                <div class="avatar-name rounded-circle"><span>AB</span></div>
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>Jeffrey Canlas</strong> reacted to <strong>Ilah Zamora's</strong> status</p>
                              <span class="notification-time"><span class="me-2 fab fa-gratipay text-danger"></span>9hr</span>
                            </div>
                          </a>
                        </div>
                        <div class="list-group-title border-bottom">EARLIER</div>
                        <div class="list-group-item">
                          <a class="notification notification-flush" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-2xl me-3">
                                <img class="rounded-circle" src="../assets/img/icons/weather-sm.jpg" alt="" />
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1">The forecast today shows a low of 20&#8451; in Philippines. See today's weather.</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🌤️</span>1d</span>
                            </div>
                          </a>
                        </div>
                        <div class="list-group-item">
                          <a class="border-bottom-0 notification-unread  notification notification-flush" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-xl me-3">
                                <img class="rounded-circle" src="../assets/img/logos/oxford.png" alt="" />
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>City College of Angeles</strong> created an event : "Causal Inference Hilary 2019"</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">✌️</span>1w</span>
                            </div>
                          </a>
                        </div>
                        <div class="list-group-item">
                          <a class="border-bottom-0 notification notification-flush" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-xl me-3">
                                <img class="rounded-circle" src="../assets/img/team/10.jpg" alt="" />
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>Elthon Cayetano</strong> invited to join the group: United Nations International Children's Fund</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🙋‍</span>2d</span>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-center border-top"><a class="card-link d-block" href="notifications.html">View all</a></div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link pe-0" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-xl">
                    <img class="rounded-circle" src="../assets/img/sample-pp.png" alt="" />
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                  <div class="bg-white dark__bg-1000 rounded-2 py-2">
                    <a class="dropdown-item fw-bold text-warning" href="#!"><span class="fas fa-crown me-1"></span><span>Go Pro</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="profile.php">Profile &amp; account</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="settings.html">Settings</a>
                    <a class="dropdown-item" href="../logout.php">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </nav>
          <script>
            var navbarPosition = localStorage.getItem('navbarPosition');
            var navbarVertical = document.querySelector('.navbar-vertical');
            var navbarTopVertical = document.querySelector('.content .navbar-top');
            var navbarTop = document.querySelector('[data-layout] .navbar-top');
            var navbarTopCombo = document.querySelector('.content [data-navbar-top="combo"]');
            if (navbarPosition === 'top') {
              navbarTop.removeAttribute('style');
              navbarTopVertical.remove(navbarTopVertical);
              navbarVertical.remove(navbarVertical);
              navbarTopCombo.remove(navbarTopCombo);
            } else if (navbarPosition === 'combo') {
              navbarVertical.removeAttribute('style');
              navbarTopCombo.removeAttribute('style');
              navbarTop.remove(navbarTop);
              navbarTopVertical.remove(navbarTopVertical);
            } else {
              navbarVertical.removeAttribute('style');
              navbarTopVertical.removeAttribute('style');
              navbarTop.remove(navbarTop);
              navbarTopCombo.remove(navbarTopCombo);
            }
          </script>
          <!-----------------------------------START OF MAIN CONTENT------------------------------------>
  <div class="card mb-3" id="ordersTable">
    <div class="card-header">
      <?php include ('./customer-add-alert.php');?>
      <div class="row flex-between-center">
        <div class="col-4 col-sm-auto d-flex align-items-center pe-0">
          <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">Push Orders</h5>
        </div>
        <div class="col-4 col-sm-2 d-flex align pe-0 mb-3 ml-2">
          <a href ="./cust_pull_add.php" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addCustomerModal">Add Customer</a>
        </div>
      </div>
      <div class="tab-content">
        <?php include('customer-add-alert.php')?>
        <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-1495d2ac-c29e-4883-b8fb-8c2ddb50f5c8" id="dom-1495d2ac-c29e-4883-b8fb-8c2ddb50f5c8">
          <div class="table-responsive scrollbar">
            <table id ="pull-table" class="table table-bordered table-striped fs--1 mb-0">
              <thead class="bg-200 text-900">
                
                <tr>
                    <th class="sort pe-1 align-middle white-space-nowrap" data-sort="first_name">ID</th>
                    <th class="sort pe-1 align-middle white-space-nowrap" data-sort="first_name">First Name</th>
                    <th class="sort pe-1 align-middle white-space-nowrap" data-sort="last_name">Last Name</th>
                    <th class="sort pe-1 align-middle white-space-nowrap" data-sort="phone">Phone Number</th>
                    <th class="sort pe-1 align-middle white-space-nowrap" data-sort="street">Street</th>
                    <th class="sort pe-1 align-middle white-space-nowrap" data-sort="barangay">Barangay</th>
                    <th class="sort pe-1 align-middle white-space-nowrap" data-sort="city">City</th>
                    <th class="sort pe-1 align-middle white-space-nowrap" data-sort="province">Province</th>
                    <th class="sort pe-1 align-middle white-space-nowrap" data-sort="status">Actions</th>
                </tr>
              </thead>
              <tbody class="list" id="table-orders-body">
                <tr class="btn-reveal-trigger">  
                  <?php
                    $sql = "SELECT * FROM customer";
                    $result = mysqli_query($conn, $sql);
                    while($row=mysqli_fetch_array($result)){   
                  ?>
                  <tr>
                    <td><?= $row['cust_id']; ?></td>
                    <td><?= $row['first_name']; ?></td>
                    <td><?= $row['last_name']; ?></td>
                    <td><?= $row['phone_number']; ?></td>
                    <td><?= $row['street']; ?></td>
                    <td><?= $row['barangay']; ?></td>
                    <td><?= $row['city']; ?></td>
                    <td><?= $row['province']; ?></td>
                    <td>
                      
                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
                      <div class="btn-group" role="group">
                        <button type="button" value="<?= $row['cust_id'];?>" class="viewCustomerBtn btn btn-outline-success btn-sm" style="display:inline-block;vertical-align:middle; margin-right:6px;">View</a>
                      </div>
                      <div class="btn-group" role="group">
                        <button type="button" value="<?= $row['cust_id'];?>" class="editCustomerBtn btn btn-outline-info btn-sm" style="display:inline-block;vertical-align:middle; margin-right:6px;">Edit</a>
                      </div>
                      <div class="btn-group" role="group">
                        <button type="button" value="<?= $row['cust_id'];?>" class="deleteCustomerBtn btn btn-outline-danger btn-sm" style="display:inline-block;vertical-align:middle; margin-right:6px;">Delete</a>
                      </div>
                      </form>
                    </td>
                  </tr>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    </div>
    <footer class="footer">
      <div class="row g-0 justify-content-between fs--1 mt-4 mb-0" style="margin-left: 50px">
        <div class="col-12 col-sm-auto text-center">
          <p class="mb-0 text-600">Thank you for using Reservoir <span class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2022 &copy;</p>
        </div>
      </div>
    </footer>
    </main>

    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->
    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->

    <script src="../vendors/popper/popper.min.js"></script>
    <script src="../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../vendors/anchorjs/anchor.min.js"></script>
    <script src="../vendors/is/is.min.js"></script>
    <script src="../vendors/fontawesome/all.min.js"></script>
    <script src="../vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="../vendors/list.js/list.min.js"></script>
    <script src="../assets/js/theme.js"></script>
    <script src="../vendors/list.js/list.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
    <script> src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"</script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>


  <script>
    $(document).on('submit', '#saveCustomer', function (e) {
      e.preventDefault();
      $(".modal-backdrop").remove();
      var formData = new FormData(this);
      formData.append("add_customer", true);
      $.ajax({
        type: "POST",
        url: "./customer-pull-config.php",
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) {

          var res = jQuery.parseJSON(response);
          if(res.status == 422){
            $('#errorMessage').removeClass('d-none');
            $('#errorMessage').text(res.message);
          }else if(res.status == 200){
            $('#errorMessage').addClass('d-none');
            $("#addCustomerModal").modal('hide');
            $('#saveCustomer')[0].reset();
            alertify.set('notifier','position', 'top-right');
            alertify.success(res.message);

            $('#pull-table').load(location.href + " #pull-table");
          }
        }
      });
    });


      $(document).on('click', '.editCustomerBtn', function () {
        
        var cust_id = $(this).val();
        $.ajax({
          type: "GET",
          url: "customer-pull-config.php?cust_id=" + cust_id,
          success: function (response) {
            
            var res =jQuery.parseJSON(response);
            if(res.status == 422){

              alert(res.message);
          }else if(res.status == 200){

            $('#cust_id').val(res.data.cust_id);
            $('#fname').val(res.data.first_name);
            $('#lname').val(res.data.last_name);
            $('#phone').val(res.data.phone_number);
            $('#street').val(res.data.street);
            $('#barangay').val(res.data.barangay);
            $('#city').val(res.data.city);
            $('#province').val(res.data.province);

            $("#customerEditModal").modal('show');

            $('#pull-table').load(location.href + " #pull-table");
          }
          }
        });
      });


    $(document).on('submit', '#updateCustomer', function (e) {
      e.preventDefault();

      $(".modal-backdrop").remove();

      var formData = new FormData(this);
      formData.append("update_customer", true);

      $.ajax({
        type: "POST",
        url: "customer-pull-config.php",
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) {

          var res = jQuery.parseJSON(response);
          if(res.status == 422){
            $('#errorMessageUpdate').removeClass('d-none');
            $('#errorMessageUpdate').text(res.message);
          }else if(res.status == 200){

            $('#errorMessageUpdate').addClass('d-none');
            alertify.set('notifier','position', 'top-right');
            alertify.success(res.message);

            $("#customerEditModal").modal('hide');
            $('#updateCustomer')[0].reset();
            

            $('#pull-table').load(location.href + " #pull-table");
          }
        }
      });
    });


    $(document).on('click', '.viewCustomerBtn', function () {
        
        var cust_id = $(this).val();
        $.ajax({
          type: "GET",
          url: "customer-pull-config.php?cust_id=" + cust_id,
          success: function (response) {
            
            var res =jQuery.parseJSON(response);
            if(res.status == 422){

              alert(res.message);
          }else if(res.status == 200){

            $('#view_fname').text(res.data.first_name);
            $('#view_lname').text(res.data.last_name);
            $('#view_phone').text(res.data.phone_number);
            $('#view_street').text(res.data.street);
            $('#view_barangay').text(res.data.barangay);
            $('#view_city').text(res.data.city);
            $('#view_province').text(res.data.province);

            $("#customerViewModal").modal('show');

          }
          }
        });
    });

    $(document).on('click', '.deleteCustomerBtn', function (e) {
      e.preventDefault();

      if(confirm('Are you sure you want to delete this data?')){
        var cust_id = $(this).val();
        $.ajax({
          type: "POST",
          url: "customer-pull-config.php",
          data: {
              'delete_customer': true,
              'cust_id': cust_id
          },
          success: function (response) {
            var res =jQuery.parseJSON(response);
            if(res.status == 500){

              alert(res.message);
            }else{
              alert(res.message);

              $('#pull-table').load(location.href + " #pull-table");
            }
          } 
        });
      }
    });
    
    //


  

  </script>








  </body>

</html>