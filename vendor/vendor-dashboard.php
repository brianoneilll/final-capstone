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
    <title>Vendor | Dashboard</title>
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
                  <a class="nav-link active" href="vendor-dashboard.php" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-pie">
                    </span></span><span class="nav-link-text ps-1">Dashboard</span></div>
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="push-sched.html" role="button" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-day">             
                    </span></span><span class="nav-link-text ps-1">Push Schedule</span></div>
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="order-list.html" role="button" aria-expanded="false">
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
                      <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">Members</h6><a class="dropdown-item px-card py-2" href="profile.php">
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
                      <a class="dropdown-item px-card py-2" href="profile.php">
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
                      <a class="dropdown-item px-card py-2" href="profile.php">
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
                    <a class="dropdown-item" href="./settings.php">Settings</a>
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
          <div class="row g-3 mb-3">
            <div class="col-xxl-6 col-xl-12">
              <div class="row g-3">
                <div class="col-12">
                  <div class="card bg-transparent-50 overflow-hidden">
                    <div class="card-header position-relative">
                      <div class="bg-holder d-none d-md-block bg-card z-index-1" style="background-image:url(./assets/img/illustrations/ecommerce-bg.png);background-size:230px;background-position:right bottom;z-index:-1;"></div>
                      <!--/.bg-holder-->
                      <div class="position-relative z-index-2">
                        <div>
                          <h3 class="text-primary mb-1">Good Afternoon, 
                          <?= $_SESSION['username']; ?>
                            </h3>
                          <p>Here’s what happening with your store today </p>
                        </div>
                        <div class="d-flex py-3">
                          <div class="pe-3">
                            <p class="text-600 fs--1 fw-medium">Today's visit </p>
                            <h4 class="text-800 mb-0">14,209</h4>
                          </div>
                          <div class="ps-3">
                            <p class="text-600 fs--1">Today’s total sales </p>
                            <h4 class="text-800 mb-0">$21,349.29 </h4>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-body p-0">
                      <ul class="mb-0 list-unstyled">
                        <li class="alert mb-0 rounded-0 py-3 px-card alert-warning border-x-0 border-top-0">
                          <div class="row flex-between-center">
                            <div class="col">
                              <div class="d-flex">
                                <div class="fas fa-circle mt-1 fs--2"></div>
                                <p class="fs--1 ps-2 mb-0"><strong>5 orders</strong> are still pending</p>
                              </div>
                            </div>
                            <div class="col-auto d-flex align-items-center"><a class="alert-link fs--1 fw-medium" href="#!">View products<i class="fas fa-chevron-right ms-1 fs--2"></i></a></div>
                          </div>
                        </li>
                        <li class="alert mb-0 rounded-0 py-3 px-card greetings-item border-top border-x-0 border-top-0">
                          <div class="row flex-between-center">
                            <div class="col">
                              <div class="d-flex">
                                <div class="fas fa-circle mt-1 fs--2 text-primary"></div>
                                <p class="fs--1 ps-2 mb-0"><strong>7 orders</strong> have payments that need to be captured</p>
                              </div>
                            </div>
                            <div class="col-auto d-flex align-items-center"><a class="alert-link fs--1 fw-medium" href="#!">View payments<i class="fas fa-chevron-right ms-1 fs--2"></i></a></div>
                          </div>
                        </li>
                        <li class="alert mb-0 rounded-0 py-3 px-card greetings-item border-top  border-0">
                          <div class="row flex-between-center">
                            <div class="col">
                              <div class="d-flex">
                                <div class="fas fa-circle mt-1 fs--2 text-primary"></div>
                                <p class="fs--1 ps-2 mb-0"><strong>50+ orders</strong> need to be fulfilled</p>
                              </div>
                            </div>
                            <div class="col-auto d-flex align-items-center"><a class="alert-link fs--1 fw-medium" href="#!">View orders<i class="fas fa-chevron-right ms-1 fs--2"></i></a></div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="row g-3">
                    <div class="col-md-6">
                      <div class="card h-md-100 ecommerce-card-min-width">
                        <div class="card-header pb-0">
                          <h6 class="mb-0 mt-2 d-flex align-items-center">Weekly Sales<span class="ms-1 text-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Calculated according to last week's sales"><span class="far fa-question-circle" data-fa-transform="shrink-1"></span></span></h6>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-end">
                          <div class="row">
                            <div class="col">
                          <p class="font-sans-serif lh-1 mb-1 fs-2">$47K</p><span class="badge badge-soft-success rounded-pill fs--2">+3.5%</span> 
                            </div>
                            <div class="col-auto ps-0">
                              <div class="echart-bar-weekly-sales h-100 echart-bar-weekly-sales-smaller-width"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="card product-share-doughnut-width">
                        <div class="card-header pb-0">
                          <h6 class="mb-0 mt-2 d-flex align-items-center">Product Share</h6>
                        </div>
                        <div class="card-body">
                          <div class="d-flex justify-content-between">
                            <div class="d-flex flex-column justify-content-between">
                              <p class="font-sans-serif lh-1 mb-1 fs-2">34.6%</p><span class="badge badge-soft-warning rounded-pill fs--2"><span class="fas fa-caret-up me-1"></span>3.5%</span>
                            </div>
                            <div><canvas class="my-n5" id="marketShareDoughnut" width="112"></canvas>
                              <p class="mb-0 text-center fs--2 mt-4 text-500"> <span class="text-800"> </span></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="card h-md-100 h-100">
                        <div class="card-body">
                          <div class="row h-100 justify-content-between g-0">
                            <div class="col-5 col-sm-6 col-xxl pe-2">
                              <h6 class="mt-1">Market Share</h6>
                              <div class="fs--2 mt-3">
                                <div class="d-flex flex-between-center mb-1">
                                  <div class="d-flex align-items-center"><span class="dot bg-primary"></span><span class="fw-semi-bold">Reservoir</span></div>
                                  <div class="d-xxl-none">57%</div>
                                </div>
                                <div class="d-flex flex-between-center mb-1">
                                  <div class="d-flex align-items-center"><span class="dot bg-info"></span><span class="fw-semi-bold">Reservoir</span></div>
                                  <div class="d-xxl-none">20%</div>
                                </div>
                                <div class="d-flex flex-between-center mb-1">
                                  <div class="d-flex align-items-center"><span class="dot bg-warning"></span><span class="fw-semi-bold">Reservoir</span></div>
                                  <div class="d-xxl-none">22%</div>
                                </div>
                              </div>
                            </div>
                            <div class="col-auto position-relative">
                              <div class="echart-product-share"></div>
                              <div class="position-absolute top-50 start-50 translate-middle text-dark fs-2">26M</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="card h-100">
                        <div class="card-header pb-0">
                          <h6 class="mb-0 mt-2 d-flex align-items-center">Total Order</h6>
                        </div>
                        <div class="card-body">
                          <div class="row align-items-end">
                            <div class="col">
                              <p class="font-sans-serif lh-1 mb-1 fs-2">58.4K</p>
                              <div class="badge badge-soft-primary rounded-pill fs--2"><span class="fas fa-caret-up me-1"></span>13.6%</div>
                            </div>
                            <div class="col-auto ps-0">
                              <div class="total-order-ecommerce" data-echarts='{"series":[{"type":"line","data":[110,100,250,210,530,480,320,325]}],"grid":{"bottom":"-10px"}}'></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-6 col-xl-12">
              <div class="card py-3 mb-3">
                <div class="card-body py-3">
                  <div class="row g-0">
                    <div class="col-6 col-md-4 border-200 border-bottom border-end pb-4">
                      <h6 class="pb-1 text-700">Orders </h6>
                      <p class="font-sans-serif lh-1 mb-1 fs-2">15,450 </p>
                      <div class="d-flex align-items-center">
                        <h6 class="fs--1 text-500 mb-0">13,675 </h6>
                        <h6 class="fs--2 ps-3 mb-0 text-primary"><span class="me-1 fas fa-caret-up"></span>21.8%</h6>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 border-200 border-md-200 border-bottom border-md-end pb-4 ps-3">
                      <h6 class="pb-1 text-700">Items sold </h6>
                      <p class="font-sans-serif lh-1 mb-1 fs-2">1,054 </p>
                      <div class="d-flex align-items-center">
                        <h6 class="fs--1 text-500 mb-0">13,675 </h6>
                        <h6 class="fs--2 ps-3 mb-0 text-warning"><span class="me-1 fas fa-caret-up"></span>21.8%</h6>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 border-200 border-bottom border-end border-md-end-0 pb-4 pt-4 pt-md-0 ps-md-3">
                      <h6 class="pb-1 text-700">Refunds </h6>
                      <p class="font-sans-serif lh-1 mb-1 fs-2">$145.65 </p>
                      <div class="d-flex align-items-center">
                        <h6 class="fs--1 text-500 mb-0">13,675 </h6>
                        <h6 class="fs--2 ps-3 mb-0 text-success"><span class="me-1 fas fa-caret-up"></span>21.8%</h6>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 border-200 border-md-200 border-bottom border-md-bottom-0 border-md-end pt-4 pb-md-0 ps-3 ps-md-0">
                      <h6 class="pb-1 text-700">Gross sale </h6>
                      <p class="font-sans-serif lh-1 mb-1 fs-2">$100.26 </p>
                      <div class="d-flex align-items-center">
                        <h6 class="fs--1 text-500 mb-0">$109.65 </h6>
                        <h6 class="fs--2 ps-3 mb-0 text-danger"><span class="me-1 fas fa-caret-up"></span>21.8%</h6>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 border-200 border-md-bottom-0 border-end pt-4 pb-md-0 ps-md-3">
                      <h6 class="pb-1 text-700">Shipping </h6>
                      <p class="font-sans-serif lh-1 mb-1 fs-2">$365.53 </p>
                      <div class="d-flex align-items-center">
                        <h6 class="fs--1 text-500 mb-0">13,675 </h6>
                        <h6 class="fs--2 ps-3 mb-0 text-success"><span class="me-1 fas fa-caret-up"></span>21.8%</h6>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 pb-0 pt-4 ps-3">
                      <h6 class="pb-1 text-700">Processing </h6>
                      <p class="font-sans-serif lh-1 mb-1 fs-2">861 </p>
                      <div class="d-flex align-items-center">
                        <h6 class="fs--1 text-500 mb-0">13,675 </h6>
                        <h6 class="fs--2 ps-3 mb-0 text-info"><span class="me-1 fas fa-caret-up"></span>21.8%</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header">
                  <div class="row flex-between-center g-0">
                    <div class="col-auto">
                      <h6 class="mb-0">Total Sales</h6>
                    </div>
                    <div class="col-auto d-flex">
                      <div class="form-check mb-0 d-flex"><input class="form-check-input form-check-input-primary" id="ecommerceLastMonth" type="checkbox" checked="checked" /><label class="form-check-label ps-2 fs--2 text-600 mb-0" for="ecommerceLastMonth">Last Month<span class="text-dark d-none d-md-inline">: $32,502.00</span></label></div>
                      <div class="form-check mb-0 d-flex ps-0 ps-md-3"><input class="form-check-input ms-2 form-check-input-warning opacity-75" id="ecommercePrevYear" type="checkbox" checked="checked" /><label class="form-check-label ps-2 fs--2 text-600 mb-0" for="ecommercePrevYear">Prev Year<span class="text-dark d-none d-md-inline">: $46,018.00</span></label></div>
                    </div>
                    <div class="col-auto">
                      <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-total-sales-ecomm" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                        <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-total-sales-ecomm"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body pe-xxl-0">
                  <!-- Find the JS file for the following chart at: src/js/charts/echarts/total-sales-ecommerce.js-->
                  <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
                  <div class="echart-line-total-sales-ecommerce" data-echart-responsive="true" data-options='{"optionOne":"ecommerceLastMonth","optionTwo":"ecommercePrevYear"}'></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row g-3 mb-3">
            <div class="col-xxl-3 col-md-6 col-lg-5">
              <div class="card shopping-cart-bar-min-height h-100">
                <div class="card-header d-flex flex-between-center">
                  <h6 class="mb-0">Shopping Cart</h6>
                  <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-shopping-cart-bar" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                    <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-shopping-cart-bar"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </div>
                <div class="card-body py-0 d-flex align-items-center h-100">
                  <div class="flex-1">
                    <div class="row g-0 align-items-center pb-3">
                      <div class="col pe-4">
                        <h6 class="fs--2 text-600">Initiated</h6>
                        <div class="progress" style="height:5px">
                          <div class="progress-bar rounded-3 bg-primary" role="progressbar" style="width: 50% " aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                      <div class="col-auto text-end">
                        <p class="mb-0 text-900 font-sans-serif"><span class="me-1 fas fa-caret-up text-success"></span>43.6%</p>
                        <p class="mb-0 fs--2 text-500 fw-semi-bold"> Session: <span class ="text-600">6817</span> </p>
                      </div>
                    </div>
                    <div class="row g-0 align-items-center pb-3 border-top pt-3">
                      <div class="col pe-4">
                        <h6 class="fs--2 text-600">Abandonment rate</h6>
                        <div class="progress" style="height:5px">
                          <div class="progress-bar rounded-3 bg-danger" role="progressbar" style="width: 25% " aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                      <div class="col-auto text-end">
                        <p class="mb-0 text-900 font-sans-serif"><span class="me-1 fas fa-caret-up text-danger"></span>13.11%</p>
                        <p class="mb-0 fs--2 text-500 fw-semi-bold"><span class ="text-600">44</span> of 61</p>
                      </div>
                    </div>
                    <div class="row g-0 align-items-center pb-3 border-top pt-3">
                      <div class="col pe-4">
                        <h6 class="fs--2 text-600">Bounce rate</h6>
                        <div class="progress" style="height:5px">
                          <div class="progress-bar rounded-3 bg-primary" role="progressbar" style="width: 35% " aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                      <div class="col-auto text-end">
                        <p class="mb-0 text-900 font-sans-serif"><span class="me-1 fas fa-caret-up text-success"></span>12.11%</p>
                        <p class="mb-0 fs--2 text-500 fw-semi-bold"><span class ="text-600">8</span> of 61</p>
                      </div>
                    </div>
                    <div class="row g-0 align-items-center pb-3 border-top pt-3">
                      <div class="col pe-4">
                        <h6 class="fs--2 text-600">Completion rate</h6>
                        <div class="progress" style="height:5px">
                          <div class="progress-bar rounded-3 bg-primary" role="progressbar" style="width: 43% " aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                      <div class="col-auto text-end">
                        <p class="mb-0 text-900 font-sans-serif"><span class="me-1 fas fa-caret-down text-danger"></span>43.6%</p>
                        <p class="mb-0 fs--2 text-500 fw-semi-bold"><span class ="text-600">18</span> of 179</p>
                      </div>
                    </div>
                    <div class="row g-0 align-items-center pb-3 border-top pt-3">
                      <div class="col pe-4">
                        <h6 class="fs--2 text-600">Revenue Rate</h6>
                        <div class="progress" style="height:5px">
                          <div class="progress-bar rounded-3 bg-primary" role="progressbar" style="width: 60% " aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                      <div class="col-auto text-end">
                        <p class="mb-0 text-900 font-sans-serif"><span class="me-1 fas fa-caret-up text-success"></span>60.5%</p>
                        <p class="mb-0 fs--2 text-500 fw-semi-bold"><span class ="text-600">18</span> of 179</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-4 col-md-6 col-lg-7 order-xxl-1">
              <div class="card h-100">
                <div class="card-header bg-light py-2 d-flex flex-between-center">
                  <h6 class="mb-0">Top Products</h6>
                  <div class="d-flex"><a class="btn btn-link btn-sm me-2" href="#!">View Details</a>
                    <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-top-products" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                      <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-top-products"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body d-flex h-100 flex-column justify-content-end">
                  <div class="echart-bar-top-products echart-bar-top-products-ecommerce" data-echart-responsive="true"> </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-9 col-md-12">
              <div class="card z-index-1" id="recentPurchaseTable" data-list='{"valueNames":["name","email","product","payment","amount"],"page":7,"pagination":true}'>
                <div class="card-header">
                  <div class="row flex-between-center">
                    <div class="col-6 col-sm-auto d-flex align-items-center pe-0">
                      <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">Recent Purchases </h5>
                    </div>
                    <div class="col-6 col-sm-auto ms-auto text-end ps-0">
                      <div class="d-none" id="table-purchases-actions">
                        <div class="d-flex"><select class="form-select form-select-sm" aria-label="Bulk actions">
                            <option selected="">Bulk actions</option>
                            <option value="Refund">Refund</option>
                            <option value="Delete">Delete</option>
                            <option value="Archive">Archive</option>
                          </select><button class="btn btn-falcon-default btn-sm ms-2" type="button">Apply</button></div>
                      </div>
                      <div id="table-purchases-replace-element"><button class="btn btn-falcon-default btn-sm" type="button"><span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span><span class="d-none d-sm-inline-block ms-1">New</span></button><button class="btn btn-falcon-default btn-sm mx-2" type="button"><span class="fas fa-filter" data-fa-transform="shrink-3 down-2"></span><span class="d-none d-sm-inline-block ms-1">Filter</span></button><button class="btn btn-falcon-default btn-sm" type="button"><span class="fas fa-external-link-alt" data-fa-transform="shrink-3 down-2"></span><span class="d-none d-sm-inline-block ms-1">Export</span></button></div>
                    </div>
                  </div>
                </div>
                <div class="card-body px-0 py-0">
                  <div class="table-responsive scrollbar">
                    <table class="table table-sm fs--1 mb-0 overflow-hidden">
                      <thead class="bg-200 text-900">
                        <tr>
                          <th class="white-space-nowrap">
                            <div class="form-check mb-0 d-flex align-items-center"><input class="form-check-input" id="checkbox-bulk-purchases-select" type="checkbox" data-bulk-select='{"body":"table-purchase-body","actions":"table-purchases-actions","replacedElement":"table-purchases-replace-element"}' /></div>
                          </th>
                          <th class="sort pe-1 align-middle white-space-nowrap" data-sort="name">Customer</th>
                          <th class="sort pe-1 align-middle white-space-nowrap" data-sort="email">Email</th>
                          <th class="sort pe-1 align-middle white-space-nowrap" data-sort="product">Product</th>
                          <th class="sort pe-1 align-middle white-space-nowrap text-center" data-sort="payment">Payment</th>
                          <th class="sort pe-1 align-middle white-space-nowrap text-end" data-sort="amount">Amount</th>
                          <th class="no-sort pe-1 align-middle data-table-row-action"></th>
                        </tr>
                      </thead>
                      <tbody class="list" id="table-purchase-body">
                        <tr class="btn-reveal-trigger">
                          <td class="align-middle" style="width: 28px;">
                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox" id="recent-purchase-0" data-bulk-select-row="data-bulk-select-row" /></div>
                          </td>
                          <th class="align-middle white-space-nowrap name"><a href="../app/e-commerce/customer-details.html">Elthon Jon</a></th>
                          <td class="align-middle white-space-nowrap email">ejcayetano@cca.edu.ph</td>
                          <td class="align-middle white-space-nowrap product">Distilled Water</td>
                          <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-success">Success<span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span></span></td>
                          <td class="align-middle text-end amount">₱25.00</td>
                          <td class="align-middle white-space-nowrap text-end">
                            <div class="dropstart font-sans-serif position-static d-inline-block"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown0" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown0"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="btn-reveal-trigger">
                          <td class="align-middle" style="width: 28px;">
                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox" id="recent-purchase-1" data-bulk-select-row="data-bulk-select-row" /></div>
                          </td>
                          <th class="align-middle white-space-nowrap name"><a href="../app/e-commerce/customer-details.html">jeffey Canlas</a></th>
                          <td class="align-middle white-space-nowrap email">jecanlas@cca.edu.ph</td>
                          <td class="align-middle white-space-nowrap product">Alkaline Water</td>
                          <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-success">Success<span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span></span></td>
                          <td class="align-middle text-end amount">₱35.00</td>
                          <td class="align-middle white-space-nowrap text-end">
                            <div class="dropstart font-sans-serif position-static d-inline-block"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown1" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown1"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="btn-reveal-trigger">
                          <td class="align-middle" style="width: 28px;">
                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox" id="recent-purchase-2" data-bulk-select-row="data-bulk-select-row" /></div>
                          </td>
                          <th class="align-middle white-space-nowrap name"><a href="../app/e-commerce/customer-details.html">Brian Galang</a></th>
                          <td class="align-middle white-space-nowrap email">bogalang@cca.edu.ph</td>
                          <td class="align-middle white-space-nowrap product">Purified Water</td>
                          <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-secondary">Blocked<span class="ms-1 fas fa-ban" data-fa-transform="shrink-2"></span></span></td>
                          <td class="align-middle text-end amount">₱20.00</td>
                          <td class="align-middle white-space-nowrap text-end">
                            <div class="dropstart font-sans-serif position-static d-inline-block"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown2" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="btn-reveal-trigger">
                          <td class="align-middle" style="width: 28px;">
                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox" id="recent-purchase-3" data-bulk-select-row="data-bulk-select-row" /></div>
                          </td>
                          <th class="align-middle white-space-nowrap name"><a href="../app/e-commerce/customer-details.html">Ilah Zamora</a></th>
                          <td class="align-middle white-space-nowrap email">izamora@cca.edu.ph</td>
                          <td class="align-middle white-space-nowrap product">Mineral Water</td>
                          <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-success">Success<span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span></span></td>
                          <td class="align-middle text-end amount">₱25.00</td>
                          <td class="align-middle white-space-nowrap text-end">
                            <div class="dropstart font-sans-serif position-static d-inline-block"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown3" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown3"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="btn-reveal-trigger">
                          <td class="align-middle" style="width: 28px;">
                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox" id="recent-purchase-4" data-bulk-select-row="data-bulk-select-row" /></div>
                          </td>
                          <th class="align-middle white-space-nowrap name"><a href="../app/e-commerce/customer-details.html">Taguro</a></th>
                          <td class="align-middle white-space-nowrap email">taguro@yahoo.com</td>
                          <td class="align-middle white-space-nowrap product">Tap Water</td>
                          <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-secondary">Blocked<span class="ms-1 fas fa-ban" data-fa-transform="shrink-2"></span></span></td>
                          <td class="align-middle text-end amount">₱15.00</td>
                          <td class="align-middle white-space-nowrap text-end">
                            <div class="dropstart font-sans-serif position-static d-inline-block"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown4" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown4"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="btn-reveal-trigger">
                          <td class="align-middle" style="width: 28px;">
                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox" id="recent-purchase-5" data-bulk-select-row="data-bulk-select-row" /></div>
                          </td>
                          <th class="align-middle white-space-nowrap name"><a href="../app/e-commerce/customer-details.html">BJ Perez</a></th>
                          <td class="align-middle white-space-nowrap email">bjperez@cca.edu.ph</td>
                          <td class="align-middle white-space-nowrap product">Purified Water</td>
                          <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-warning">Pending<span class="ms-1 fas fa-stream" data-fa-transform="shrink-2"></span></span></td>
                          <td class="align-middle text-end amount">₱20.00</td>
                          <td class="align-middle white-space-nowrap text-end">
                            <div class="dropstart font-sans-serif position-static d-inline-block"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown5" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown5"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="btn-reveal-trigger">
                          <td class="align-middle" style="width: 28px;">
                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox" id="recent-purchase-6" data-bulk-select-row="data-bulk-select-row" /></div>
                          </td>
                          <th class="align-middle white-space-nowrap name"><a href="../app/e-commerce/customer-details.html">Cong TV</a></th>
                          <td class="align-middle white-space-nowrap email">congcong@gmail.com</td>
                          <td class="align-middle white-space-nowrap product">Alkaline Water</td>
                          <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-success">Success<span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span></span></td>
                          <td class="align-middle text-end amount">₱35.00</td>
                          <td class="align-middle white-space-nowrap text-end">
                            <div class="dropstart font-sans-serif position-static d-inline-block"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown6" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown6"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="btn-reveal-trigger">
                          <td class="align-middle" style="width: 28px;">
                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox" id="recent-purchase-7" data-bulk-select-row="data-bulk-select-row" /></div>
                          </td>
                          <th class="align-middle white-space-nowrap name"><a href="../app/e-commerce/customer-details.html">Oscar Wilde</a></th>
                          <td class="align-middle white-space-nowrap email">oscar@hotmail.com</td>
                          <td class="align-middle white-space-nowrap product">Munchkin 6 Piece Fork and Spoon Set</td>
                          <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-success">Success<span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span></span></td>
                          <td class="align-middle text-end amount">$43</td>
                          <td class="align-middle white-space-nowrap text-end">
                            <div class="dropstart font-sans-serif position-static d-inline-block"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown7" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown7"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="btn-reveal-trigger">
                          <td class="align-middle" style="width: 28px;">
                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox" id="recent-purchase-8" data-bulk-select-row="data-bulk-select-row" /></div>
                          </td>
                          <th class="align-middle white-space-nowrap name"><a href="../app/e-commerce/customer-details.html">John Doe</a></th>
                          <td class="align-middle white-space-nowrap email">doe@gmail.com</td>
                          <td class="align-middle white-space-nowrap product">Falcon - Responsive Dashboard Template</td>
                          <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-success">Success<span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span></span></td>
                          <td class="align-middle text-end amount">$57</td>
                          <td class="align-middle white-space-nowrap text-end">
                            <div class="dropstart font-sans-serif position-static d-inline-block"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown8" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown8"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="btn-reveal-trigger">
                          <td class="align-middle" style="width: 28px;">
                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox" id="recent-purchase-9" data-bulk-select-row="data-bulk-select-row" /></div>
                          </td>
                          <th class="align-middle white-space-nowrap name"><a href="../app/e-commerce/customer-details.html">Emma Watson</a></th>
                          <td class="align-middle white-space-nowrap email">emma@gmail.com</td>
                          <td class="align-middle white-space-nowrap product">Apple iPhone XR (64GB)</td>
                          <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-secondary">Blocked<span class="ms-1 fas fa-ban" data-fa-transform="shrink-2"></span></span></td>
                          <td class="align-middle text-end amount">$999</td>
                          <td class="align-middle white-space-nowrap text-end">
                            <div class="dropstart font-sans-serif position-static d-inline-block"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown9" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown9"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="btn-reveal-trigger">
                          <td class="align-middle" style="width: 28px;">
                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox" id="recent-purchase-10" data-bulk-select-row="data-bulk-select-row" /></div>
                          </td>
                          <th class="align-middle white-space-nowrap name"><a href="../app/e-commerce/customer-details.html">Sylvia Plath</a></th>
                          <td class="align-middle white-space-nowrap email">plath@yahoo.com</td>
                          <td class="align-middle white-space-nowrap product">All-New Fire HD 8 Kids Edition Tablet</td>
                          <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-warning">Pending<span class="ms-1 fas fa-stream" data-fa-transform="shrink-2"></span></span></td>
                          <td class="align-middle text-end amount">$199</td>
                          <td class="align-middle white-space-nowrap text-end">
                            <div class="dropstart font-sans-serif position-static d-inline-block"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown10" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown10"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="btn-reveal-trigger">
                          <td class="align-middle" style="width: 28px;">
                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox" id="recent-purchase-11" data-bulk-select-row="data-bulk-select-row" /></div>
                          </td>
                          <th class="align-middle white-space-nowrap name"><a href="../app/e-commerce/customer-details.html">Rabindranath Tagore</a></th>
                          <td class="align-middle white-space-nowrap email">Rabindra@gmail.com</td>
                          <td class="align-middle white-space-nowrap product">Apple iPhone XR (64GB)</td>
                          <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-secondary">Blocked<span class="ms-1 fas fa-ban" data-fa-transform="shrink-2"></span></span></td>
                          <td class="align-middle text-end amount">$999</td>
                          <td class="align-middle white-space-nowrap text-end">
                            <div class="dropstart font-sans-serif position-static d-inline-block"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown11" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown11"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="btn-reveal-trigger">
                          <td class="align-middle" style="width: 28px;">
                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox" id="recent-purchase-12" data-bulk-select-row="data-bulk-select-row" /></div>
                          </td>
                          <th class="align-middle white-space-nowrap name"><a href="../app/e-commerce/customer-details.html">Anila Wilde</a></th>
                          <td class="align-middle white-space-nowrap email">anila@yahoo.com</td>
                          <td class="align-middle white-space-nowrap product">All-New Fire HD 8 Kids Edition Tablet</td>
                          <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-warning">Pending<span class="ms-1 fas fa-stream" data-fa-transform="shrink-2"></span></span></td>
                          <td class="align-middle text-end amount">$199</td>
                          <td class="align-middle white-space-nowrap text-end">
                            <div class="dropstart font-sans-serif position-static d-inline-block"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown12" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown12"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="btn-reveal-trigger">
                          <td class="align-middle" style="width: 28px;">
                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox" id="recent-purchase-13" data-bulk-select-row="data-bulk-select-row" /></div>
                          </td>
                          <th class="align-middle white-space-nowrap name"><a href="../app/e-commerce/customer-details.html">Jack Watson </a></th>
                          <td class="align-middle white-space-nowrap email">Jack@gmail.com</td>
                          <td class="align-middle white-space-nowrap product">Apple iPhone XR (64GB)</td>
                          <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-secondary">Blocked<span class="ms-1 fas fa-ban" data-fa-transform="shrink-2"></span></span></td>
                          <td class="align-middle text-end amount">$999</td>
                          <td class="align-middle white-space-nowrap text-end">
                            <div class="dropstart font-sans-serif position-static d-inline-block"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown13" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown13"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="row align-items-center">
                    <div class="pagination d-none"></div>
                    <div class="col">
                      <p class="mb-0 fs--1"><span class="d-none d-sm-inline-block me-2" data-list-info="data-list-info"> </span></p>
                    </div>
                    <div class="col-auto d-flex"><button class="btn btn-sm btn-primary" type="button" data-list-pagination="prev"><span>Previous</span></button><button class="btn btn-sm btn-primary px-4 ms-2" type="button" data-list-pagination="next"><span>Next</span></button></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-4 col-md-6">
              <div class="card h-100">
                <div class="card-header bg-light">
                  <div class="row justify-content-between">
                    <div class="col-auto">
                      <h6>Returning Customer Rate</h6>
                      <div class="d-flex align-items-center">
                        <h4 class="text-primary mb-0">$59.09%</h4><span class="badge rounded-pill ms-3 badge-soft-primary"><span class="fas fa-caret-up"></span> 3.5%</span>
                      </div>
                    </div>
                    <div class="col-auto"><select class="form-select form-select-sm pe-4" id="select-returning-customer-month">
                        <option value="0">Jan</option>
                        <option value="1">Feb</option>
                        <option value="2">Mar</option>
                        <option value="3">Apr</option>
                        <option value="4">May</option>
                        <option value="5">Jun</option>
                        <option value="6">Jul</option>
                        <option value="7">Aug</option>
                        <option value="8">Sep</option>
                        <option value="9">Oct</option>
                        <option value="10">Nov</option>
                        <option value="11">Dec</option>
                      </select></div>
                  </div>
                </div>
                <div class="card-body">
                  <!-- Find the JS file for the following chart at: src/js/charts/echarts/returning-customer-rate.js-->
                  <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
                  <div class="echart-line-returning-customer-rate h-100" data-echart-responsive="true" data-options='{"target":"returning-customer-rate-footer","monthSelect":"select-returning-customer-month","optionOne":"newMonth","optionTwo":"returningMonth"}'></div>
                </div>
                <div class="card-footer border-top py-2">
                  <div class="row align-items-center gx-0" id="returning-customer-rate-footer">
                    <div class="col-auto me-2">
                      <div class="btn btn-sm btn-text d-flex align-items-center p-0 shadow-none" id="newMonth"><span class="fas fa-circle text-primary fs--2 me-1"></span>New </div>
                    </div>
                    <div class="col-auto">
                      <div class="btn btn-sm btn-text d-flex align-items-center p-0 shadow-none" id="returningMonth"><span class="fas fa-circle text-warning fs--2 me-1"></span>Returning </div>
                    </div>
                    <div class="col text-end"><a class="btn btn-link btn-sm px-0 fw-medium" href="#!">View report <span class="fas fa-chevron-right ms-1 fs--2"></span></a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-4 col-md-6">
              <div class="card h-100">
                <div class="card-header bg-light py-2">
                  <div class="d-flex flex-between-center">
                    <h6 class="mb-0">Sales by POS location </h6><a class="btn btn-link btn-sm px-0" href="#!">View Details<span class="fas fa-chevron-right ms-1 fs--2"></span></a>
                  </div>
                </div>
                <div class="card-body px-0 pt-4 pb-0">
                  <table class="table table-borderless font-sans-serif fw-medium fs--1">
                    <tbody>
                      <tr>
                        <td class="pb-2 pt-0"> <span class="fas fa-circle fs--2 me-1 text-primary"></span>Allocated Budget</td>
                        <td class="pb-2 pt-0 text-end">$13,325.98</td>
                        <td class="pb-2 pt-0 text-end"><span class="me-1 fas fa-caret-up text-success"></span>10%</td>
                      </tr>
                      <tr>
                        <td class="pb-2 pt-0"> <span class="fas fa-circle fs--2 me-1 text-warning"></span>Actual Spending</td>
                        <td class="pb-2 pt-0 text-end">$12,348.46</td>
                        <td class="pb-2 pt-0 text-end"><span class="me-1 fas fa-caret-down text-success"></span>13%</td>
                      </tr>
                    </tbody>
                  </table><!-- Find the JS file for the following chart at: src/js/charts/echarts/sales-by-pos-location.js-->
                  <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
                  <div class="echart-radar-sales-by-pos-location h-100 px-md-2 mt-md-5" data-echart-responsive="true"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="card h-lg-100 overflow-hidden">
                <div class="card-body p-0">
                  <div class="table-responsive scrollbar">
                    <table class="table table-dashboard mb-0 table-borderless fs--1 border-200">
                      <thead class="bg-light">
                        <tr class="text-900">
                          <th>Best Selling Products</th>
                          <th class="text-center">Orders(269)</th>
                          <th class="text-center">Order(%)</th>
                          <th class="text-end">Revenue</th>
                          <th class="pe-card text-end" style="width: 8rem">Revenue (%)</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="border-bottom border-200">
                          <td>
                            <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="../assets/img/bottle.png" width="60" alt="" />
                              <div class="flex-1 ms-3">
                                <h6 class="mb-1 fw-semi-bold text-nowrap"><a class="text-900 stretched-link" href="#!">Tap Water</a></h6>
                                <p class="fw-semi-bold mb-0 text-500">Municipal Water</p>
                              </div>
                            </div>
                          </td>
                          <td class="align-middle text-center fw-semi-bold">26</td>
                          <td class="align-middle text-center fw-semi-bold">$31%</td>
                          <td class="align-middle text-end fw-semi-bold">₱1311</td>
                          <td class="align-middle pe-card">
                            <div class="d-flex align-items-center">
                              <div class="progress me-3 rounded-3 bg-200" style="height: 5px;width:80px">
                                <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 41%;" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <div class="fw-semi-bold ms-2">41%</div>
                            </div>
                          </td>
                        </tr>
                        <tr class="border-bottom border-200">
                          <td>
                            <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="../assets/img/bottle.png" width="60" alt="" />
                              <div class="flex-1 ms-3">
                                <h6 class="mb-1 fw-semi-bold text-nowrap"><a class="text-900 stretched-link" href="#!">Mineral Water</a></h6>
                                <p class="fw-semi-bold mb-0 text-500">Mineral</p>
                              </div>
                            </div>
                          </td>
                          <td class="align-middle text-center fw-semi-bold">18</td>
                          <td class="align-middle text-center fw-semi-bold">$29%</td>
                          <td class="align-middle text-end fw-semi-bold">₱1311</td>
                          <td class="align-middle pe-card">
                            <div class="d-flex align-items-center">
                              <div class="progress me-3 rounded-3 bg-200" style="height: 5px;width:80px">
                                <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 41%;" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <div class="fw-semi-bold ms-2">41%</div>
                            </div>
                          </td>
                        </tr>
                        <tr class="border-bottom border-200">
                          <td>
                            <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="../assets/img/bottle.png" width="60" alt="" />
                              <div class="flex-1 ms-3">
                                <h6 class="mb-1 fw-semi-bold text-nowrap"><a class="text-900 stretched-link" href="#!">Spring Water</a></h6>
                                <p class="fw-semi-bold mb-0 text-500">Ground Water</p>
                              </div>
                            </div>
                          </td>
                          <td class="align-middle text-center fw-semi-bold">16</td>
                          <td class="align-middle text-center fw-semi-bold">$27%</td>
                          <td class="align-middle text-end fw-semi-bold">₱539</td>
                          <td class="align-middle pe-card">
                            <div class="d-flex align-items-center">
                              <div class="progress me-3 rounded-3 bg-200" style="height: 5px;width:80px">
                                <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 27%;" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <div class="fw-semi-bold ms-2">27%</div>
                            </div>
                          </td>
                        </tr>
                        <tr class="border-bottom border-200">
                          <td>
                            <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="../assets/img/bottle.png" width="60" alt="" />
                              <div class="flex-1 ms-3">
                                <h6 class="mb-1 fw-semi-bold text-nowrap"><a class="text-900 stretched-link" href="#!">Sparkling Water</a></h6>
                                <p class="fw-semi-bold mb-0 text-500">Carbonated Water</p>
                              </div>
                            </div>
                          </td>
                          <td class="align-middle text-center fw-semi-bold">11</td>
                          <td class="align-middle text-center fw-semi-bold">$21%</td>
                          <td class="align-middle text-end fw-semi-bold">₱245</td>
                          <td class="align-middle pe-card">
                            <div class="d-flex align-items-center">
                              <div class="progress me-3 rounded-3 bg-200" style="height: 5px;width:80px">
                                <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 17%;" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <div class="fw-semi-bold ms-2">17%</div>
                            </div>
                          </td>
                        </tr>
                        <tr class="border-bottom border-200">
                          <td>
                            <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="../assets/img/bottle.png" width="60" alt="" />
                              <div class="flex-1 ms-3">
                                <h6 class="mb-1 fw-semi-bold text-nowrap"><a class="text-900 stretched-link" href="#!">Distilled Water</a></h6>
                                <p class="fw-semi-bold mb-0 text-500">Purified Water</p>
                              </div>
                            </div>
                          </td>
                          <td class="align-middle text-center fw-semi-bold">10</td>
                          <td class="align-middle text-center fw-semi-bold">$19%</td>
                          <td class="align-middle text-end fw-semi-bold">₱234</td>
                          <td class="align-middle pe-card">
                            <div class="d-flex align-items-center">
                              <div class="progress me-3 rounded-3 bg-200" style="height: 5px;width:80px">
                                <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 7%;" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <div class="fw-semi-bold ms-2">7%</div>
                            </div>
                          </td>
                        </tr>
                        <tr class="border-bottom border-200">
                          <td>
                            <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="../assets/img/bottle.png" width="60" alt="" />
                              <div class="flex-1 ms-3">
                                <h6 class="mb-1 fw-semi-bold text-nowrap"><a class="text-900 stretched-link" href="#!">Purified Water</a></h6>
                                <p class="fw-semi-bold mb-0 text-500">Filtered/Purified</p>
                              </div>
                            </div>
                          </td>
                          <td class="align-middle text-center fw-semi-bold">10</td>
                          <td class="align-middle text-center fw-semi-bold">$19%</td>
                          <td class="align-middle text-end fw-semi-bold">₱234</td>
                          <td class="align-middle pe-card">
                            <div class="d-flex align-items-center">
                              <div class="progress me-3 rounded-3 bg-200" style="height: 5px;width:80px">
                                <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 7%;" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <div class="fw-semi-bold ms-2">7%</div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="../assets/img/bottle.png" width="60" alt="" />
                              <div class="flex-1 ms-3">
                                <h6 class="mb-1 fw-semi-bold text-nowrap"><a class="text-900 stretched-link" href="#!">Flavored Water</a></h6>
                                <p class="fw-semi-bold mb-0 text-500">enhanced/Infused</p>
                              </div>
                            </div>
                          </td>
                          <td class="align-middle text-center fw-semi-bold">10</td>
                          <td class="align-middle text-center fw-semi-bold">$19%</td>
                          <td class="align-middle text-end fw-semi-bold">₱234</td>
                          <td class="align-middle pe-card">
                            <div class="d-flex align-items-center">
                              <div class="progress me-3 rounded-3 bg-200" style="height: 5px;width:80px">
                                <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 7%;" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <div class="fw-semi-bold ms-2">7%</div>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="card-footer bg-light py-2">
                  <div class="row flex-between-center">
                    <div class="col-auto"><select class="form-select form-select-sm">
                        <option>Last 7 days</option>
                        <option>Last Month</option>
                        <option>Last Year</option>
                      </select></div>
                    <div class="col-auto"><a class="btn btn-sm btn-falcon-default" href="#!">View All</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>          

    
          <!----------------------------------------- START OF FOOTER--------------------------------------------->
          <footer class="footer">
            <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">Thank you for using Reservoir <span class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2022 &copy;</p>
              </div>
            </div>
          </footer>
          <!----------------------------------------- END OF FOOTER--------------------------------------------->
        </div>
      </div>
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
    <script src="../vendors/chart/chart.min.js"></script>
    <script src="../vendors/countup/countUp.umd.js"></script>
    <script src="../vendors/echarts/echarts.min.js"></script>
    <script src="../vendors/dayjs/dayjs.min.js"></script>
    <script src="../vendors/fontawesome/all.min.js"></script>
    <script src="../vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="../vendors/list.js/list.min.js"></script>
    <script src="../assets/js/theme.js "></script>
  </body>
</html>