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
    <title>Vendor | Clients</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="/LoginSignup[Brian]/resources/reservoir 200x200.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/LoginSignup[Brian]/resources/reservoir 200x200.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/LoginSignup[Brian]/resources/reservoir 200x200.png">
    <link rel="shortcut icon" type="image/x-icon" href="/LoginSignup[Brian]/resources/reservoir 200x200.png">
    <link rel="manifest" href="../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../assets/img/favicons/mstile-150x150.png">
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
                  <a class="nav-link" href="vendor-dashboard.php" aria-expanded="false">
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
                  <a class="nav-link active" href="clients.php" role="button" aria-expanded="false">
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
                              <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world 😍"</p>
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
                              <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong> status</p>
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
                              <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's weather.</p>
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
                              <p class="mb-1"><strong>University of Oxford</strong> created an event : "Causal Inference Hilary 2019"</p>
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
                              <p class="mb-1"><strong>James Cameron</strong> invited to join the group: United Nations International Children's Fund</p>
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
          <!-------------------------------------------- START OF ONTENT-------------------------------------------->
          <div class="card mb-3" id="customersTable" data-list='{"valueNames":["name","email","phone","address","joined"],"page":10,"pagination":true}'>
            <div class="card-header">
              <div class="row flex-between-center">
                <div class="col-4 col-sm-auto d-flex align-items-center pe-0">
                  <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">Customers</h5>
                </div>
                <div class="col-8 col-sm-auto text-end ps-2">
                  <div class="d-none" id="table-customers-actions">
                    <div class="d-flex"><select class="form-select form-select-sm" aria-label="Bulk actions">
                        <option selected="">Bulk actions</option>
                        <option value="Refund">Refund</option>
                        <option value="Delete">Delete</option>
                        <option value="Archive">Archive</option>
                      </select><button class="btn btn-falcon-default btn-sm ms-2" type="button">Apply</button></div>
                  </div>
                  <div id="table-customers-replace-element"><button class="btn btn-falcon-default btn-sm" type="button"><span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span><span class="d-none d-sm-inline-block ms-1">New</span></button><button class="btn btn-falcon-default btn-sm mx-2" type="button"><span class="fas fa-filter" data-fa-transform="shrink-3 down-2"></span><span class="d-none d-sm-inline-block ms-1">Filter</span></button><button class="btn btn-falcon-default btn-sm" type="button"><span class="fas fa-external-link-alt" data-fa-transform="shrink-3 down-2"></span><span class="d-none d-sm-inline-block ms-1">Export</span></button></div>
                </div>
              </div>
            </div>

            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table table-sm table-striped fs--1 mb-0 overflow-hidden">
                  <thead class="bg-200 text-900">
                    <tr>
                      <th>
                        <div class="form-check fs-0 mb-0 d-flex align-items-center"><input class="form-check-input" id="checkbox-bulk-customers-select" type="checkbox" data-bulk-select='{"body":"table-customers-body","actions":"table-customers-actions","replacedElement":"table-customers-replace-element"}' /></div>
                      </th>
                      <th class="sort pe-1 align-middle white-space-nowrap" data-sort="name">Name</th>
                      <th class="sort pe-1 align-middle white-space-nowrap" data-sort="email">Email</th>
                      <th class="sort pe-1 align-middle white-space-nowrap" data-sort="phone">Phone</th>
                      <th class="sort pe-1 align-middle white-space-nowrap ps-5" data-sort="address" style="min-width: 200px;">Billing Address</th>
                      <th class="sort pe-1 align-middle white-space-nowrap" data-sort="joined">Joined</th>
                      <th class="align-middle no-sort"></th>
                    </tr>
                  </thead>
                  <tbody class="list" id="table-customers-body">
                    <tr class="btn-reveal-trigger">
                      <td class="align-middle py-2" style="width: 28px;">
                        <div class="form-check fs-0 mb-0 d-flex align-items-center"><input class="form-check-input" type="checkbox" id="customer-0" data-bulk-select-row="data-bulk-select-row" /></div>
                      </td>
                      <td class="name align-middle white-space-nowrap py-2"><a href="customer-details.html">
                          <div class="d-flex d-flex align-items-center">
                            <div class="avatar avatar-xl me-2">
                              <img class="rounded-circle" src="../assets/img/team/elthon.jpg" alt="" />
                            </div>
                            <div class="flex-1">
                              <h5 class="mb-0 fs--1">Elthon Cayetano</h5>
                            </div>
                          </div>
                        </a></td>
                      <td class="email align-middle py-2"><a href="mailto:ecayetano@example.com">ecayetano@example.com</a></td>
                      <td class="phone align-middle white-space-nowrap py-2"><a href="tel:2012001851">(201) 200-1851</a></td>
                      <td class="address align-middle white-space-nowrap ps-5 py-2">Sapang Bato, With Special Bakery</td>
                      <td class="joined align-middle py-2">30/07/2022</td>
                      <td class="align-middle white-space-nowrap py-2 text-end">
                        <div class="dropdown font-sans-serif position-static"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button" id="customer-dropdown-0" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-0" aria-labelledby="customer-dropdown-0">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="align-middle py-2" style="width: 28px;">
                        <div class="form-check fs-0 mb-0 d-flex align-items-center"><input class="form-check-input" type="checkbox" id="customer-1" data-bulk-select-row="data-bulk-select-row" /></div>
                      </td>
                      <td class="name align-middle white-space-nowrap py-2"><a href="customer-details.html">
                          <div class="d-flex d-flex align-items-center">
                            <div class="avatar avatar-xl me-2">
                              <img class="rounded-circle" src="../assets/img/team/brian.jpg" alt="" />
                            </div>
                            <div class="flex-1">
                              <h5 class="mb-0 fs--1">Brian Oniel Galang</h5>
                            </div>
                          </div>
                        </a></td>
                      <td class="email align-middle py-2"><a href="mailto:bogalang@example.com">bogalang@example.com</a></td>
                      <td class="phone align-middle white-space-nowrap py-2"><a href="tel:2122288403">(212) 228-8403</a></td>
                      <td class="address align-middle white-space-nowrap ps-5 py-2">Angeles City, Sa tabe ng park</td>
                      <td class="joined align-middle py-2">30/07/2022</td>
                      <td class="align-middle white-space-nowrap py-2 text-end">
                        <div class="dropdown font-sans-serif position-static"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button" id="customer-dropdown-1" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-0" aria-labelledby="customer-dropdown-1">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="align-middle py-2" style="width: 28px;">
                        <div class="form-check fs-0 mb-0 d-flex align-items-center"><input class="form-check-input" type="checkbox" id="customer-2" data-bulk-select-row="data-bulk-select-row" /></div>
                      </td>
                      <td class="name align-middle white-space-nowrap py-2"><a href="customer-details.html">
                          <div class="d-flex d-flex align-items-center">
                            <div class="avatar avatar-xl me-2">
                              <img class="rounded-circle" src="../assets/img/team/ilah.jpg" alt="" />
                            </div>
                            <div class="flex-1">
                              <h5 class="mb-0 fs--1">Ilah Zamora</h5>
                            </div>
                          </div>
                        </a></td>
                      <td class="email align-middle py-2"><a href="mailto:izamora@example.com">izamora@example.com</a></td>
                      <td class="phone align-middle white-space-nowrap py-2"><a href="tel:2012001851">(201) 200-1851</a></td>
                      <td class="address align-middle white-space-nowrap ps-5 py-2">Angeles City, Malapit sa baranggay hall</td>
                      <td class="joined align-middle py-2">30/07/2022</td>
                      <td class="align-middle white-space-nowrap py-2 text-end">
                        <div class="dropdown font-sans-serif position-static"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button" id="customer-dropdown-2" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-0" aria-labelledby="customer-dropdown-2">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="align-middle py-2" style="width: 28px;">
                        <div class="form-check fs-0 mb-0 d-flex align-items-center"><input class="form-check-input" type="checkbox" id="customer-3" data-bulk-select-row="data-bulk-select-row" /></div>
                      </td>
                      <td class="name align-middle white-space-nowrap py-2"><a href="customer-details.html">
                          <div class="d-flex d-flex align-items-center">
                            <div class="avatar avatar-xl me-2">
                              <img class="rounded-circle" src="../assets/img/team/jep.jpg" alt="" />
                            </div>
                            <div class="flex-1">
                              <h5 class="mb-0 fs--1">Jeffrey Canlas</h5>
                            </div>
                          </div>
                        </a></td>
                      <td class="email align-middle py-2"><a href="mailto:jecanlas@example.com">jecanlas@example.com</a></td>
                      <td class="phone align-middle white-space-nowrap py-2"><a href="tel:9013243127">(901) 324-3127</a></td>
                      <td class="address align-middle white-space-nowrap ps-5 py-2">Sta.Teresita Angeles City aka "Crossing"</td>
                      <td class="joined align-middle py-2">30/07/2022</td>
                      <td class="align-middle white-space-nowrap py-2 text-end">
                        <div class="dropdown font-sans-serif position-static"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button" id="customer-dropdown-3" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-0" aria-labelledby="customer-dropdown-3">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="align-middle py-2" style="width: 28px;">
                        <div class="form-check fs-0 mb-0 d-flex align-items-center"><input class="form-check-input" type="checkbox" id="customer-4" data-bulk-select-row="data-bulk-select-row" /></div>
                      </td>
                      <td class="name align-middle white-space-nowrap py-2"><a href="customer-details.html">
                          <div class="d-flex d-flex align-items-center">
                            <div class="avatar avatar-xl me-2">
                              <img class="rounded-circle" src="../assets/img/team/bhrandel.jpg" alt="" />
                            </div>
                            <div class="flex-1">
                              <h5 class="mb-0 fs--1">Bhrandel John Perez</h5>
                            </div>
                          </div>
                        </a></td>
                      <td class="email align-middle py-2"><a href="mailto:bjperez@example.com">bjperez@example.com</a></td>
                      <td class="phone align-middle white-space-nowrap py-2"><a href="tel:8283829631">(828) 382-9631</a></td>
                      <td class="address align-middle white-space-nowrap ps-5 py-2">PulungBulu Lipat Highway</td>
                      <td class="joined align-middle py-2">30/07/2022</td>
                      <td class="align-middle white-space-nowrap py-2 text-end">
                        <div class="dropdown font-sans-serif position-static"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button" id="customer-dropdown-4" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-0" aria-labelledby="customer-dropdown-4">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="align-middle py-2" style="width: 28px;">
                        <div class="form-check fs-0 mb-0 d-flex align-items-center"><input class="form-check-input" type="checkbox" id="customer-5" data-bulk-select-row="data-bulk-select-row" /></div>
                      </td>
                      <td class="name align-middle white-space-nowrap py-2"><a href="customer-details.html">
                          <div class="d-flex d-flex align-items-center">
                            <div class="avatar avatar-xl me-2">
                              <img class="rounded-circle" src="../assets/img/team/alexa.jpg" alt="" />
                            </div>
                            <div class="flex-1">
                              <h5 class="mb-0 fs--1">Alexa Nicole Ocampo</h5>
                            </div>
                          </div>
                        </a></td>
                      <td class="email align-middle py-2"><a href="mailto:anfocampo@example.com">anfocampo@example.com</a></td>
                      <td class="phone align-middle white-space-nowrap py-2"><a href="tel:5624685646">(562) 468-5646</a></td>
                      <td class="address align-middle white-space-nowrap ps-5 py-2">PulungBulu, Lipat highway</td>
                      <td class="joined align-middle py-2">30/07/2022</td>
                      <td class="align-middle white-space-nowrap py-2 text-end">
                        <div class="dropdown font-sans-serif position-static"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button" id="customer-dropdown-5" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-0" aria-labelledby="customer-dropdown-5">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="align-middle py-2" style="width: 28px;">
                        <div class="form-check fs-0 mb-0 d-flex align-items-center"><input class="form-check-input" type="checkbox" id="customer-6" data-bulk-select-row="data-bulk-select-row" /></div>
                      </td>
                      <td class="name align-middle white-space-nowrap py-2"><a href="customer-details.html">
                          <div class="d-flex d-flex align-items-center">
                            <div class="avatar avatar-xl me-2">
                              <img class="rounded-circle" src="../assets/img/team/elaine.jpg" alt="" />
                            </div>
                            <div class="flex-1">
                              <h5 class="mb-0 fs--1">Elaine Paras</h5>
                            </div>
                          </div>
                        </a></td>
                      <td class="email align-middle py-2"><a href="mailto:eparas@example.com">eparas@example.com</a></td>
                      <td class="phone align-middle white-space-nowrap py-2"><a href="tel:3026138829">(302) 613-8829</a></td>
                      <td class="address align-middle white-space-nowrap ps-5 py-2">Basta LNS malapit Jollibee</td>
                      <td class="joined align-middle py-2">30/07/2022</td>
                      <td class="align-middle white-space-nowrap py-2 text-end">
                        <div class="dropdown font-sans-serif position-static"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button" id="customer-dropdown-6" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-0" aria-labelledby="customer-dropdown-6">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="align-middle py-2" style="width: 28px;">
                        <div class="form-check fs-0 mb-0 d-flex align-items-center"><input class="form-check-input" type="checkbox" id="customer-7" data-bulk-select-row="data-bulk-select-row" /></div>
                      </td>
                      <td class="name align-middle white-space-nowrap py-2"><a href="customer-details.html">
                          <div class="d-flex d-flex align-items-center">
                            <div class="avatar avatar-xl me-2">
                              <img class="rounded-circle" src="../assets/img/team/ronette.jpg" alt="" />
                            </div>
                            <div class="flex-1">
                              <h5 class="mb-0 fs--1">Ronette Balanon</h5>
                            </div>
                          </div>
                        </a></td>
                      <td class="email align-middle py-2"><a href="mailto:balanon@example.com">balanon@example.com</a></td>
                      <td class="phone align-middle white-space-nowrap py-2"><a href="tel:3172737814">(317) 273-7814</a></td>
                      <td class="address align-middle white-space-nowrap ps-5 py-2">Lipat highway din ketang marakal marites</td>
                      <td class="joined align-middle py-2">30/07/2022</td>
                      <td class="align-middle white-space-nowrap py-2 text-end">
                        <div class="dropdown font-sans-serif position-static"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button" id="customer-dropdown-7" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-0" aria-labelledby="customer-dropdown-7">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="align-middle py-2" style="width: 28px;">
                        <div class="form-check fs-0 mb-0 d-flex align-items-center"><input class="form-check-input" type="checkbox" id="customer-8" data-bulk-select-row="data-bulk-select-row" /></div>
                      </td>
                      <td class="name align-middle white-space-nowrap py-2"><a href="customer-details.html">
                          <div class="d-flex d-flex align-items-center">
                            <div class="avatar avatar-xl me-2">
                              <img class="rounded-circle" src="../assets/img/team/eugene.jpg" alt="" />
                            </div>
                            <div class="flex-1">
                              <h5 class="mb-0 fs--1">Eugene Perez</h5>
                            </div>
                          </div>
                        </a></td>
                      <td class="email align-middle py-2"><a href="mailto:eperez@example.com">eperez@example.com</a></td>
                      <td class="phone align-middle white-space-nowrap py-2"><a href="tel:2123449983">(212) 344-9983</a></td>
                      <td class="address align-middle white-space-nowrap ps-5 py-2">N/A</td>
                      <td class="joined align-middle py-2">30/07/2022</td>
                      <td class="align-middle white-space-nowrap py-2 text-end">
                        <div class="dropdown font-sans-serif position-static"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button" id="customer-dropdown-8" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-0" aria-labelledby="customer-dropdown-8">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="align-middle py-2" style="width: 28px;">
                        <div class="form-check fs-0 mb-0 d-flex align-items-center"><input class="form-check-input" type="checkbox" id="customer-9" data-bulk-select-row="data-bulk-select-row" /></div>
                      </td>
                      <td class="name align-middle white-space-nowrap py-2"><a href="customer-details.html">
                          <div class="d-flex d-flex align-items-center">
                            <div class="avatar avatar-xl me-2">
                              <div class="avatar-name rounded-circle"><span>MC</span></div>
                            </div>
                            <div class="flex-1">
                              <h5 class="mb-0 fs--1">Marie Cohen</h5>
                            </div>
                          </div>
                        </a></td>
                      <td class="email align-middle py-2"><a href="mailto:cohen@example.com">cohen@example.com</a></td>
                      <td class="phone align-middle white-space-nowrap py-2"><a href="tel:4806103481">(480) 610-3481</a></td>
                      <td class="address align-middle white-space-nowrap ps-5 py-2">3291 Hillside Street, Mesa, AZ 85201</td>
                      <td class="joined align-middle py-2">25/08/2016</td>
                      <td class="align-middle white-space-nowrap py-2 text-end">
                        <div class="dropdown font-sans-serif position-static"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button" id="customer-dropdown-9" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-0" aria-labelledby="customer-dropdown-9">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="align-middle py-2" style="width: 28px;">
                        <div class="form-check fs-0 mb-0 d-flex align-items-center"><input class="form-check-input" type="checkbox" id="customer-10" data-bulk-select-row="data-bulk-select-row" /></div>
                      </td>
                      <td class="name align-middle white-space-nowrap py-2"><a href="customer-details.html">
                          <div class="d-flex d-flex align-items-center">
                            <div class="avatar avatar-xl me-2">
                              <img class="rounded-circle" src="../../assets/img/team/9.jpg" alt="" />
                            </div>
                            <div class="flex-1">
                              <h5 class="mb-0 fs--1">Michael Scates</h5>
                            </div>
                          </div>
                        </a></td>
                      <td class="email align-middle py-2"><a href="mailto:scates@example.com">scates@example.com</a></td>
                      <td class="phone align-middle white-space-nowrap py-2"><a href="tel:3238814878">(323) 881-4878</a></td>
                      <td class="address align-middle white-space-nowrap ps-5 py-2">162 Hillhaven Drive, Los Angeles, CA 90063</td>
                      <td class="joined align-middle py-2">20/12/2016</td>
                      <td class="align-middle white-space-nowrap py-2 text-end">
                        <div class="dropdown font-sans-serif position-static"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button" id="customer-dropdown-10" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-0" aria-labelledby="customer-dropdown-10">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="align-middle py-2" style="width: 28px;">
                        <div class="form-check fs-0 mb-0 d-flex align-items-center"><input class="form-check-input" type="checkbox" id="customer-11" data-bulk-select-row="data-bulk-select-row" /></div>
                      </td>
                      <td class="name align-middle white-space-nowrap py-2"><a href="customer-details.html">
                          <div class="d-flex d-flex align-items-center">
                            <div class="avatar avatar-xl me-2">
                              <img class="rounded-circle" src="../../assets/img/team/14.jpg" alt="" />
                            </div>
                            <div class="flex-1">
                              <h5 class="mb-0 fs--1">Kathryn Love</h5>
                            </div>
                          </div>
                        </a></td>
                      <td class="email align-middle py-2"><a href="mailto:kathryn@example.com">kathryn@example.com</a></td>
                      <td class="phone align-middle white-space-nowrap py-2"><a href="tel:4074463482">(407) 446-3482</a></td>
                      <td class="address align-middle white-space-nowrap ps-5 py-2">2551 Ocala Street, Orlando, FL 32805</td>
                      <td class="joined align-middle py-2">12/01/2015</td>
                      <td class="align-middle white-space-nowrap py-2 text-end">
                        <div class="dropdown font-sans-serif position-static"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button" id="customer-dropdown-11" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-0" aria-labelledby="customer-dropdown-11">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="align-middle py-2" style="width: 28px;">
                        <div class="form-check fs-0 mb-0 d-flex align-items-center"><input class="form-check-input" type="checkbox" id="customer-12" data-bulk-select-row="data-bulk-select-row" /></div>
                      </td>
                      <td class="name align-middle white-space-nowrap py-2"><a href="customer-details.html">
                          <div class="d-flex d-flex align-items-center">
                            <div class="avatar avatar-xl me-2">
                              <div class="avatar-name rounded-circle"><span>EP</span></div>
                            </div>
                            <div class="flex-1">
                              <h5 class="mb-0 fs--1">Estell Pollich</h5>
                            </div>
                          </div>
                        </a></td>
                      <td class="email align-middle py-2"><a href="mailto:estell@example.com">estell@example.com</a></td>
                      <td class="phone align-middle white-space-nowrap py-2"><a href="tel:2014474782">(201) 447-4782</a></td>
                      <td class="address align-middle white-space-nowrap ps-5 py-2">13572 Kurt Mews South Merritt, IA 52491</td>
                      <td class="joined align-middle py-2">23/04/2019</td>
                      <td class="align-middle white-space-nowrap py-2 text-end">
                        <div class="dropdown font-sans-serif position-static"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button" id="customer-dropdown-12" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-0" aria-labelledby="customer-dropdown-12">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="align-middle py-2" style="width: 28px;">
                        <div class="form-check fs-0 mb-0 d-flex align-items-center"><input class="form-check-input" type="checkbox" id="customer-13" data-bulk-select-row="data-bulk-select-row" /></div>
                      </td>
                      <td class="name align-middle white-space-nowrap py-2"><a href="customer-details.html">
                          <div class="d-flex d-flex align-items-center">
                            <div class="avatar avatar-xl me-2">
                              <img class="rounded-circle" src="../../assets/img/team/2.jpg" alt="" />
                            </div>
                            <div class="flex-1">
                              <h5 class="mb-0 fs--1">Ara Mueller</h5>
                            </div>
                          </div>
                        </a></td>
                      <td class="email align-middle py-2"><a href="mailto:ara@example.com">ara@example.com</a></td>
                      <td class="phone align-middle white-space-nowrap py-2"><a href="tel:2029984702">(202) 998-4702</a></td>
                      <td class="address align-middle white-space-nowrap ps-5 py-2">91979 Kohler Place Waelchiborough, CT 41291</td>
                      <td class="joined align-middle py-2">23/04/2019</td>
                      <td class="align-middle white-space-nowrap py-2 text-end">
                        <div class="dropdown font-sans-serif position-static"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button" id="customer-dropdown-13" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-0" aria-labelledby="customer-dropdown-13">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="align-middle py-2" style="width: 28px;">
                        <div class="form-check fs-0 mb-0 d-flex align-items-center"><input class="form-check-input" type="checkbox" id="customer-14" data-bulk-select-row="data-bulk-select-row" /></div>
                      </td>
                      <td class="name align-middle white-space-nowrap py-2"><a href="customer-details.html">
                          <div class="d-flex d-flex align-items-center">
                            <div class="avatar avatar-xl me-2">
                              <div class="avatar-name rounded-circle"><span>LB</span></div>
                            </div>
                            <div class="flex-1">
                              <h5 class="mb-0 fs--1">Lucienne Blick</h5>
                            </div>
                          </div>
                        </a></td>
                      <td class="email align-middle py-2"><a href="mailto:blick@example.com">blick@example.com</a></td>
                      <td class="phone align-middle white-space-nowrap py-2"><a href="tel:8512654641">(851) 265-4641</a></td>
                      <td class="address align-middle white-space-nowrap ps-5 py-2">6757 Giuseppe Meadows Geraldinemouth, MO 48819-4970</td>
                      <td class="joined align-middle py-2">23/04/2019</td>
                      <td class="align-middle white-space-nowrap py-2 text-end">
                        <div class="dropdown font-sans-serif position-static"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button" id="customer-dropdown-14" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-0" aria-labelledby="customer-dropdown-14">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="align-middle py-2" style="width: 28px;">
                        <div class="form-check fs-0 mb-0 d-flex align-items-center"><input class="form-check-input" type="checkbox" id="customer-15" data-bulk-select-row="data-bulk-select-row" /></div>
                      </td>
                      <td class="name align-middle white-space-nowrap py-2"><a href="customer-details.html">
                          <div class="d-flex d-flex align-items-center">
                            <div class="avatar avatar-xl me-2">
                              <img class="rounded-circle" src="../../assets/img/team/5.jpg" alt="" />
                            </div>
                            <div class="flex-1">
                              <h5 class="mb-0 fs--1">Laverne Haag</h5>
                            </div>
                          </div>
                        </a></td>
                      <td class="email align-middle py-2"><a href="mailto:haag@example.com">haag@example.com</a></td>
                      <td class="phone align-middle white-space-nowrap py-2"><a href="tel:2459881927">(245) 988-1927</a></td>
                      <td class="address align-middle white-space-nowrap ps-5 py-2">2327 Kaylee Mill East Citlalli, AZ 89582-3143</td>
                      <td class="joined align-middle py-2">22/04/2019</td>
                      <td class="align-middle white-space-nowrap py-2 text-end">
                        <div class="dropdown font-sans-serif position-static"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button" id="customer-dropdown-15" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-0" aria-labelledby="customer-dropdown-15">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="align-middle py-2" style="width: 28px;">
                        <div class="form-check fs-0 mb-0 d-flex align-items-center"><input class="form-check-input" type="checkbox" id="customer-16" data-bulk-select-row="data-bulk-select-row" /></div>
                      </td>
                      <td class="name align-middle white-space-nowrap py-2"><a href="customer-details.html">
                          <div class="d-flex d-flex align-items-center">
                            <div class="avatar avatar-xl me-2">
                              <img class="rounded-circle" src="../../assets/img/team/6.jpg" alt="" />
                            </div>
                            <div class="flex-1">
                              <h5 class="mb-0 fs--1">Brandon Bednar</h5>
                            </div>
                          </div>
                        </a></td>
                      <td class="email align-middle py-2"><a href="mailto:bednar@example.com">bednar@example.com</a></td>
                      <td class="phone align-middle white-space-nowrap py-2"><a href="tel:9535899324">(953) 589-9324 </a></td>
                      <td class="address align-middle white-space-nowrap ps-5 py-2">25156 Isaac Crossing Apt. 810 Lonborough, CO 83774-5999</td>
                      <td class="joined align-middle py-2">22/04/2019</td>
                      <td class="align-middle white-space-nowrap py-2 text-end">
                        <div class="dropdown font-sans-serif position-static"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button" id="customer-dropdown-16" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-0" aria-labelledby="customer-dropdown-16">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="align-middle py-2" style="width: 28px;">
                        <div class="form-check fs-0 mb-0 d-flex align-items-center"><input class="form-check-input" type="checkbox" id="customer-17" data-bulk-select-row="data-bulk-select-row" /></div>
                      </td>
                      <td class="name align-middle white-space-nowrap py-2"><a href="customer-details.html">
                          <div class="d-flex d-flex align-items-center">
                            <div class="avatar avatar-xl me-2">
                              <div class="avatar-name rounded-circle"><span>DB</span></div>
                            </div>
                            <div class="flex-1">
                              <h5 class="mb-0 fs--1">Dimitri Boehm</h5>
                            </div>
                          </div>
                        </a></td>
                      <td class="email align-middle py-2"><a href="mailto:dimitri@example.com">dimitri@example.com</a></td>
                      <td class="phone align-middle white-space-nowrap py-2"><a href="tel:9434099147">(943) 409-9147</a></td>
                      <td class="address align-middle white-space-nowrap ps-5 py-2">71603 Wolff Plains Apt. 885 Johnstonton, MI 01581</td>
                      <td class="joined align-middle py-2">23/04/2019</td>
                      <td class="align-middle white-space-nowrap py-2 text-end">
                        <div class="dropdown font-sans-serif position-static"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button" id="customer-dropdown-17" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-0" aria-labelledby="customer-dropdown-17">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="align-middle py-2" style="width: 28px;">
                        <div class="form-check fs-0 mb-0 d-flex align-items-center"><input class="form-check-input" type="checkbox" id="customer-18" data-bulk-select-row="data-bulk-select-row" /></div>
                      </td>
                      <td class="name align-middle white-space-nowrap py-2"><a href="customer-details.html">
                          <div class="d-flex d-flex align-items-center">
                            <div class="avatar avatar-xl me-2">
                              <div class="avatar-name rounded-circle"><span>TF</span></div>
                            </div>
                            <div class="flex-1">
                              <h5 class="mb-0 fs--1">Trace Farrell</h5>
                            </div>
                          </div>
                        </a></td>
                      <td class="email align-middle py-2"><a href="mailto:trace@example.com">trace@example.com</a></td>
                      <td class="phone align-middle white-space-nowrap py-2"><a href="tel:4424850384">(442) 485-0384</a></td>
                      <td class="address align-middle white-space-nowrap ps-5 py-2">431 Steuber Mews Apt. 252 Germanland, AK 25882</td>
                      <td class="joined align-middle py-2">26/04/2019</td>
                      <td class="align-middle white-space-nowrap py-2 text-end">
                        <div class="dropdown font-sans-serif position-static"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button" id="customer-dropdown-18" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-0" aria-labelledby="customer-dropdown-18">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="align-middle py-2" style="width: 28px;">
                        <div class="form-check fs-0 mb-0 d-flex align-items-center"><input class="form-check-input" type="checkbox" id="customer-19" data-bulk-select-row="data-bulk-select-row" /></div>
                      </td>
                      <td class="name align-middle white-space-nowrap py-2"><a href="customer-details.html">
                          <div class="d-flex d-flex align-items-center">
                            <div class="avatar avatar-xl me-2">
                              <img class="rounded-circle" src="../../assets/img/team/13.jpg" alt="" />
                            </div>
                            <div class="flex-1">
                              <h5 class="mb-0 fs--1">Estell Nienow</h5>
                            </div>
                          </div>
                        </a></td>
                      <td class="email align-middle py-2"><a href="mailto:nienow@example.com">nienow@example.com</a></td>
                      <td class="phone align-middle white-space-nowrap py-2"><a href="tel:5056977549">(505) 697-7549</a></td>
                      <td class="address align-middle white-space-nowrap ps-5 py-2">4167 Laverna Manor Marysemouth, NV 74590</td>
                      <td class="joined align-middle py-2">26/04/2019</td>
                      <td class="align-middle white-space-nowrap py-2 text-end">
                        <div class="dropdown font-sans-serif position-static"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button" id="customer-dropdown-19" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-0" aria-labelledby="customer-dropdown-19">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="align-middle py-2" style="width: 28px;">
                        <div class="form-check fs-0 mb-0 d-flex align-items-center"><input class="form-check-input" type="checkbox" id="customer-20" data-bulk-select-row="data-bulk-select-row" /></div>
                      </td>
                      <td class="name align-middle white-space-nowrap py-2"><a href="customer-details.html">
                          <div class="d-flex d-flex align-items-center">
                            <div class="avatar avatar-xl me-2">
                              <img class="rounded-circle" src="../../assets/img/team/14.jpg" alt="" />
                            </div>
                            <div class="flex-1">
                              <h5 class="mb-0 fs--1">Daisha Howe</h5>
                            </div>
                          </div>
                        </a></td>
                      <td class="email align-middle py-2"><a href="mailto:howe@example.com">howe@example.com</a></td>
                      <td class="phone align-middle white-space-nowrap py-2"><a href="tel:3375713547">(337) 571-3547</a></td>
                      <td class="address align-middle white-space-nowrap ps-5 py-2">829 Lavonne Valley Apt. 074 Stehrfort, RI 77914-0379</td>
                      <td class="joined align-middle py-2">25/04/2019</td>
                      <td class="align-middle white-space-nowrap py-2 text-end">
                        <div class="dropdown font-sans-serif position-static"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button" id="customer-dropdown-20" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-0" aria-labelledby="customer-dropdown-20">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="align-middle py-2" style="width: 28px;">
                        <div class="form-check fs-0 mb-0 d-flex align-items-center"><input class="form-check-input" type="checkbox" id="customer-21" data-bulk-select-row="data-bulk-select-row" /></div>
                      </td>
                      <td class="name align-middle white-space-nowrap py-2"><a href="customer-details.html">
                          <div class="d-flex d-flex align-items-center">
                            <div class="avatar avatar-xl me-2">
                              <div class="avatar-name rounded-circle"><span>MH</span></div>
                            </div>
                            <div class="flex-1">
                              <h5 class="mb-0 fs--1">Miles Haley</h5>
                            </div>
                          </div>
                        </a></td>
                      <td class="email align-middle py-2"><a href="mailto:haley@example.com">haley@example.com</a></td>
                      <td class="phone align-middle white-space-nowrap py-2"><a href="tel:7646194683">(764) 619-4683</a></td>
                      <td class="address align-middle white-space-nowrap ps-5 py-2">53150 Thad Squares Apt. 263 Archibaldfort, MO 00837</td>
                      <td class="joined align-middle py-2">24/04/2019</td>
                      <td class="align-middle white-space-nowrap py-2 text-end">
                        <div class="dropdown font-sans-serif position-static"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button" id="customer-dropdown-21" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-0" aria-labelledby="customer-dropdown-21">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="align-middle py-2" style="width: 28px;">
                        <div class="form-check fs-0 mb-0 d-flex align-items-center"><input class="form-check-input" type="checkbox" id="customer-22" data-bulk-select-row="data-bulk-select-row" /></div>
                      </td>
                      <td class="name align-middle white-space-nowrap py-2"><a href="customer-details.html">
                          <div class="d-flex d-flex align-items-center">
                            <div class="avatar avatar-xl me-2">
                              <div class="avatar-name rounded-circle"><span>BW</span></div>
                            </div>
                            <div class="flex-1">
                              <h5 class="mb-0 fs--1">Brenda Watsica</h5>
                            </div>
                          </div>
                        </a></td>
                      <td class="email align-middle py-2"><a href="mailto:watsica@example.com">watsica@example.com</a></td>
                      <td class="phone align-middle white-space-nowrap py-2"><a href="tel:9616476123">(961) 647-6123</a></td>
                      <td class="address align-middle white-space-nowrap ps-5 py-2">9198 O'Kon Harbors Morarborough, IA 75409-7383</td>
                      <td class="joined align-middle py-2">24/04/2019</td>
                      <td class="align-middle white-space-nowrap py-2 text-end">
                        <div class="dropdown font-sans-serif position-static"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button" id="customer-dropdown-22" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-0" aria-labelledby="customer-dropdown-22">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="align-middle py-2" style="width: 28px;">
                        <div class="form-check fs-0 mb-0 d-flex align-items-center"><input class="form-check-input" type="checkbox" id="customer-23" data-bulk-select-row="data-bulk-select-row" /></div>
                      </td>
                      <td class="name align-middle white-space-nowrap py-2"><a href="customer-details.html">
                          <div class="d-flex d-flex align-items-center">
                            <div class="avatar avatar-xl me-2">
                              <div class="avatar-name rounded-circle"><span>EOR</span></div>
                            </div>
                            <div class="flex-1">
                              <h5 class="mb-0 fs--1">Ellie O'Reilly</h5>
                            </div>
                          </div>
                        </a></td>
                      <td class="email align-middle py-2"><a href="mailto:ellie@example.com">ellie@example.com</a></td>
                      <td class="phone align-middle white-space-nowrap py-2"><a href="tel:6016888144"> (601) 688-8144</a></td>
                      <td class="address align-middle white-space-nowrap ps-5 py-2">1478 Kaitlin Haven Apt. 061 Lake Muhammadmouth, SC 35848</td>
                      <td class="joined align-middle py-2">24/04/2019</td>
                      <td class="align-middle white-space-nowrap py-2 text-end">
                        <div class="dropdown font-sans-serif position-static"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button" id="customer-dropdown-23" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-0" aria-labelledby="customer-dropdown-23">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger">
                      <td class="align-middle py-2" style="width: 28px;">
                        <div class="form-check fs-0 mb-0 d-flex align-items-center"><input class="form-check-input" type="checkbox" id="customer-24" data-bulk-select-row="data-bulk-select-row" /></div>
                      </td>
                      <td class="name align-middle white-space-nowrap py-2"><a href="customer-details.html">
                          <div class="d-flex d-flex align-items-center">
                            <div class="avatar avatar-xl me-2">
                              <div class="avatar-name rounded-circle"><span>GB</span></div>
                            </div>
                            <div class="flex-1">
                              <h5 class="mb-0 fs--1">Garry Brainstrow</h5>
                            </div>
                          </div>
                        </a></td>
                      <td class="email align-middle py-2"><a href="mailto:garry@example.com">garry@example.com</a></td>
                      <td class="phone align-middle white-space-nowrap py-2"><a href="tel:4018799970">(401) 879-9970</a></td>
                      <td class="address align-middle white-space-nowrap ps-5 py-2">Garry Brainstrow, 13572 Kurt Mews South Merritt, IA 52491</td>
                      <td class="joined align-middle py-2">23/04/2019</td>
                      <td class="align-middle white-space-nowrap py-2 text-end">
                        <div class="dropdown font-sans-serif position-static"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button" id="customer-dropdown-24" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-0" aria-labelledby="customer-dropdown-24">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
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
    <script src="../vendors/fontawesome/all.min.js"></script>
    <script src="../vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="../vendors/list.js/list.min.js"></script>
    <script src="../assets/js/theme.js"></script>
    <script src="../vendors/list.js/list.min.js"></script>
  </body>

</html>