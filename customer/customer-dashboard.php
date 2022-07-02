<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Customer | Customer-Dashboard</title>

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

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="../../../vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="../../../vendors/overlayscrollbars/OverlayScrollbars.min.css" rel="stylesheet">
    <link href="../../../assets/css/theme.min.css" rel="stylesheet" id="style-default">
    <link href="../../../assets/css/user.min.css" rel="stylesheet" id="user-style-default">
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
              <!-- <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button> -->
            </div><a class="navbar-brand" href="../../../index.html">
              <div class="d-flex align-items-center py-3"><img class="me-2" alt="" width="" /><span class="font-sans-serif">Reservoir</span></div>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
            <div class="navbar-vertical-content scrollbar">
              <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
            </div>
          </div>
        </nav>
        <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-xl" style="display: none;"></nav>

                        <!-- <---------START OF CONTENT------>
                    
        <div class="content">
          <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand" style="display: none;">
            <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="../../../index.html">
              <div class="d-flex align-items-center"><img class="me-2" src="../../../assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif">falcon</span></div>
            </a>
            <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
              <li class="nav-item">
                <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait" href="shopping-cart.html"><span class="fas fa-shopping-cart" data-fa-transform="shrink-7" style="font-size: 33px;"></span><span class="notification-indicator-number">1</span></a>
              </li>
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
                                <img class="rounded-circle" src="../../../assets/img/team/1-thumb.png" alt="" />
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
                                <img class="rounded-circle" src="../../../assets/img/icons/weather-sm.jpg" alt="" />
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
                                <img class="rounded-circle" src="../../../assets/img/logos/oxford.png" alt="" />
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
                                <img class="rounded-circle" src="../../../assets/img/team/10.jpg" alt="" />
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
                    <div class="card-footer text-center border-top"><a class="card-link d-block" href="../../../app/social/notifications.html">View all</a></div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link pe-0" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-xl">
                    <img class="rounded-circle" src="../../../assets/img/team/emptyprof.png" alt="" />
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                  <div class="bg-white dark__bg-1000 rounded-2 py-2">
                    <a class="dropdown-item fw-bold text-warning" href="#!"><span class="fas fa-crown me-1"></span><span>Go Pro</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#!">Set status</a>
                    <a class="dropdown-item" href="profile.html">Profile &amp; account</a>
                    <a class="dropdown-item" href="#!">Feedback</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="settings.html">Settings</a>
                    <a class="dropdown-item" href="../customer- logout.php">Logout</a>
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
          <div class="card mb-3">
            <div class="card-body">
              <div class="row flex-between-center">
                <div class="col-sm-auto mb-2 mb-sm-0">
                  <h6 class="mb-0">Showing Some Stations</h6>
                </div>
                <div class="col-sm-auto">
                  <div class="row gx-2 align-items-center">
                    <div class="col-auto">
                      <form class="row gx-2">
                        <div class="col-auto"><small>Sort by: </small></div>
                        <div class="col-auto"><select class="form-select form-select-sm" aria-label="Bulk actions">
                            <option selected="">Nearest</option>
                            <option value="Refund">Location</option>
                            <option value="Delete">Price</option>
                          </select></div>
                      </form>
                    </div>
                    <div class="col-auto pe-0"><a class="text-600 px-1" href="../../../app/e-commerce/product/product-grid.html" data-bs-toggle="tooltip" title="Product Grid"><span class="fas fa-th"></span></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body p-0 overflow-hidden">
              <div class="row g-0">
                <div class="col-12 p-card">
                  <div class="row">
                    <div class="col-sm-5 col-md-4">
                      <div class="position-relative h-sm-50"><a class="d-block h-50" href="../../../app/e-commerce/product/product-details.html"><img class="img-fluid fit-cover w-sm-70 h-sm-70 rounded-1 absolute-sm-centered" src="../../../assets/img/team/Forelthon.jpg" alt="" /></a>
                        <div class="badge rounded-pill bg-success position-absolute top-0 end-0 me-2 mt-2 fs--2 z-index-2">New</div>
                      </div>
                    </div>
                    <div class="col-sm-7 col-md-8">
                      <div class="row">
                        <div class="col-lg-8">
                          <h5 class="mt-3 mt-sm-0"><a class="text-dark fs-0 fs-lg-1" href="../../../app/e-commerce/product/product-details.html">Elthon Cayetano's Station</a></h5>
                          <p class="fs--1 mb-2 mb-md-3"><a class="text-500" href="#!">Water Products</a></p>
                          <ul class="list-unstyled d-none d-lg-block">
                            <li><span class="fas fa-circle" data-fa-transform="shrink-12"></span><span>Mineral Water</span></li>
                            <li><span class="fas fa-circle" data-fa-transform="shrink-12"></span><span>Purified Water</span></li>
                            <li><span class="fas fa-circle" data-fa-transform="shrink-12"></span><span>Distilled Water</span></li>
                            <li><span class="fas fa-circle" data-fa-transform="shrink-12"></span><span>Alkaline Water</span></li>
                            <!-- <li><span class="fas fa-circle" data-fa-transform="shrink-12"></span><span>Secured</span></li> -->
                          </ul>
                        </div>
                        <div class="col-lg-4 d-flex justify-content-between flex-column">
                          <div>
                            <h4 class="fs-1 fs-md-2 text-warning mb-0">30-40 Pesos</h4>
                            <h5 class="fs--1 text-500 mb-0 mt-1"><del></del><span class="ms-1"></span></h5>
                            <div class="mb-2 mt-3"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-300"></span><span class="ms-1">(8)</span></div>
                            <div class="d-none d-lg-block">
                              <p class="fs--1 mb-1">Shipping Cost: <strong>10-20 Pesos</strong></p>
                              <p class="fs--1 mb-1">Stock: <strong class="text-success">Available</strong></p>
                            </div>
                          </div>
                          <div class="mt-2"><a class="btn btn-sm btn-outline-secondary border-300 d-lg-block me-2 me-lg-0" href="#!"><span class="far fa-heart"></span><span class="ms-2 d-none d-md-inline-block">Favourite</span></a><a class="btn btn-sm btn-primary d-lg-block mt-lg-2" href="#!"><span class="fas fa-cart-plus"> </span><span class="ms-2 d-none d-md-inline-block">Add to Cart</span></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 p-card bg-100">
                  <div class="row">
                    <div class="col-sm-5 col-md-4">
                      <div class="position-relative h-sm-100">
                        <div class="swiper-container theme-slider h-100" data-swiper='{"autoplay":true,"autoHeight":true,"spaceBetween":5,"loop":true,"loopedSlides":5,"navigation":{"nextEl":".swiper-button-next","prevEl":".swiper-button-prev"}}'>
                          <div class="swiper-wrapper h-100">
                            <div class="swiper-slide h-100"><a class="d-block h-sm-100" href="../../../app/e-commerce/product/product-details.html"><img class="rounded-1 h-100 w-100 fit-cover" src="../../../assets/img/team/Forbrian1.jpeg" alt="" /></a></div>
                            <div class="swiper-slide h-100"><a class="d-block h-sm-100" href="../../../app/e-commerce/product/product-details.html"><img class="rounded-1 h-100 w-100 fit-cover" src="../../../assets/img/team/Forbrian2.jpeg" alt="" /></a></div>
                            <div class="swiper-slide h-100"><a class="d-block h-sm-100" href="../../../app/e-commerce/product/product-details.html"><img class="rounded-1 h-100 w-100 fit-cover" src="../../../assets/img/team/Forbrian3.jpg" alt="" /></a></div>
                          </div>
                          <div class="swiper-nav">
                            <div class="swiper-button-next swiper-button-white"></div>
                            <div class="swiper-button-prev swiper-button-white"></div>
                          </div>
                        </div>
                        <div class="badge rounded-pill bg-success position-absolute top-0 end-0 me-2 mt-2 fs--2 z-index-2">New</div>
                      </div>
                    </div>
                    <div class="col-sm-7 col-md-8">
                      <div class="row">
                        <div class="col-lg-8">
                          <h5 class="mt-3 mt-sm-0"><a class="text-dark fs-0 fs-lg-1" href="../../../app/e-commerce/product/product-details.html">Brian Galang's Station</a></h5>
                          <p class="fs--1 mb-2 mb-md-3"><a class="text-500" href="#!">Water Products and Etc.</a></p>
                          <ul class="list-unstyled d-none d-lg-block">
                            <li><span class="fas fa-circle" data-fa-transform="shrink-12"></span><span>Alkaline Water</span></li>
                            <li><span class="fas fa-circle" data-fa-transform="shrink-12"></span><span>Purified Water</span></li>
                            <li><span class="fas fa-circle" data-fa-transform="shrink-12"></span><span>Mineral Water</span></li>
                            <li><span class="fas fa-circle" data-fa-transform="shrink-12"></span><span>Distilled Water</span></li>
                            <li><span class="fas fa-circle" data-fa-transform="shrink-12"></span><span>Others.</span></li>
                          </ul>
                        </div>
                        <div class="col-lg-4 d-flex justify-content-between flex-column">
                          <div>
                            <h4 class="fs-1 fs-md-2 text-warning mb-0">25-40 Pesos</h4>
                            <div class="mb-2 mt-3"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt text-warning star-icon"></span><span class="ms-1">(20)</span></div>
                            <div class="d-none d-lg-block">
                              <p class="fs--1 mb-1">Shipping Cost: <strong>15-25 Pesos</strong></p>
                              <p class="fs--1 mb-1">Stock: <strong class="text-danger">Sold-Out</strong></p>
                            </div>
                          </div>
                          <div class="mt-2"><a class="btn btn-sm btn-outline-secondary border-300 d-lg-block me-2 me-lg-0" href="#!"><span class="far fa-heart"></span><span class="ms-2 d-none d-md-inline-block">Favourite</span></a><a class="btn btn-sm btn-primary d-lg-block mt-lg-2" href="#!"><span class="fas fa-cart-plus"> </span><span class="ms-2 d-none d-md-inline-block">Add to Cart</span></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 p-card">
                  <div class="row">
                    <div class="col-sm-5 col-md-4">
                      <div class="position-relative h-sm-100"><a class="d-block h-100" href="../../../app/e-commerce/product/product-details.html"><img class="img-fluid fit-cover w-sm-100 h-sm-100 rounded-1 absolute-sm-centered" src="../../../assets/img/team/Forzamora.jpg" alt="" /></a></div>
                    </div>
                    <div class="col-sm-7 col-md-8">
                      <div class="row">
                        <div class="col-lg-8">
                          <h5 class="mt-3 mt-sm-0"><a class="text-dark fs-0 fs-lg-1" href="../../../app/e-commerce/product/product-details.html">Ilah Zamora's Station</a></h5>
                          <p class="fs--1 mb-2 mb-md-3"><a class="text-500" href="#!">Others</a></p>
                          <ul class="list-unstyled d-none d-lg-block">
                            <li><span class="fas fa-circle" data-fa-transform="shrink-12"></span><span>Purified Water</span></li>
                            <li><span class="fas fa-circle" data-fa-transform="shrink-12"></span><span>Alkaline Water</span></li>
                            <li><span class="fas fa-circle" data-fa-transform="shrink-12"></span><span>Mineral Water</span></li>
                            <li><span class="fas fa-circle" data-fa-transform="shrink-12"></span><span>Distilled Water</span></li>
                          </ul>
                        </div>
                        <div class="col-lg-4 d-flex justify-content-between flex-column">
                          <div>
                            <h4 class="fs-1 fs-md-2 text-warning mb-0">35-45 Pesos</h4>
                            <h5 class="fs--1 text-500 mb-0 mt-1"><del></del><span class="ms-1"></span></h5>
                            <div class="mb-2 mt-3"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt text-warning star-icon"></span><span class="fa fa-star text-300"></span><span class="fa fa-star text-300"></span><span class="ms-1">(14)</span></div>
                            <div class="d-none d-lg-block">
                              <p class="fs--1 mb-1">Shipping Cost: <strong>15-30 Pesos</strong></p>
                              <p class="fs--1 mb-1">Stock: <strong class="text-success">Available</strong></p>
                            </div>
                          </div>
                          <div class="mt-2"><a class="btn btn-sm btn-outline-secondary border-300 d-lg-block me-2 me-lg-0" href="#!"><span class="far fa-heart"></span><span class="ms-2 d-none d-md-inline-block">Favourite</span></a><a class="btn btn-sm btn-primary d-lg-block mt-lg-2" href="#!"><span class="fas fa-cart-plus"> </span><span class="ms-2 d-none d-md-inline-block">Add to Cart</span></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 p-card bg-100">
                  <div class="row">
                    <div class="col-sm-5 col-md-4">
                      <div class="position-relative h-sm-100"><a class="d-block h-100" href="../../../app/e-commerce/product/product-details.html"><img class="img-fluid fit-cover w-sm-100 h-sm-100 rounded-1 absolute-sm-centered" src="../../../assets/img/Team/Forjeffrey.jpg" alt="" /></a></div>
                    </div>
                    <div class="col-sm-7 col-md-8">
                      <div class="row">
                        <div class="col-lg-8">
                          <h5 class="mt-3 mt-sm-0"><a class="text-dark fs-0 fs-lg-1" href="../../../app/e-commerce/product/product-details.html">Bhrandel John Perez's Station</a></h5>
                          <p class="fs--1 mb-2 mb-md-3"><a class="text-500" href="#!">Water miscellaneous</a></p>
                          <ul class="list-unstyled d-none d-lg-block">
                            <li><span class="fas fa-circle" data-fa-transform="shrink-12"></span><span>Purified Water</span></li>
                            <li><span class="fas fa-circle" data-fa-transform="shrink-12"></span><span>Alkaline Water</span></li>
                            <li><span class="fas fa-circle" data-fa-transform="shrink-12"></span><span>Distilled Water</span></li>
                            <li><span class="fas fa-circle" data-fa-transform="shrink-12"></span><span>Mineral Water</span></li>
                            <li><span class="fas fa-circle" data-fa-transform="shrink-12"></span><span>Etc.</span></li>
                          </ul>
                        </div>
                        <div class="col-lg-4 d-flex justify-content-between flex-column">
                          <div>
                            <h4 class="fs-1 fs-md-2 text-warning mb-0">40-50 Pesos</h4>
                            <div class="mb-2 mt-3"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt text-warning star-icon"></span><span class="ms-1">(13)</span></div>
                            <div class="d-none d-lg-block">
                              <p class="fs--1 mb-1">Shipping Cost: <strong>17-35 Pesos</strong></p>
                              <p class="fs--1 mb-1">Stock: <strong class="text-success">Available</strong></p>
                            </div>
                          </div>
                          <div class="mt-2"><a class="btn btn-sm btn-outline-secondary border-300 d-lg-block me-2 me-lg-0" href="#!"><span class="far fa-heart"></span><span class="ms-2 d-none d-md-inline-block">Favourite</span></a><a class="btn btn-sm btn-primary d-lg-block mt-lg-2" href="#!"><span class="fas fa-cart-plus"> </span><span class="ms-2 d-none d-md-inline-block">Add to Cart</span></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer border-top d-flex justify-content-center"><button class="btn btn-falcon-default btn-sm me-2" type="button" disabled="disabled" data-bs-toggle="tooltip" data-bs-placement="top" title="Prev"><span class="fas fa-chevron-left"></span></button><a class="btn btn-sm btn-falcon-default text-primary me-2" href="#!">1</a><a class="btn btn-sm btn-falcon-default me-2" href="#!">2</a><a class="btn btn-sm btn-falcon-default me-2" href="#!"><span class="fas fa-ellipsis-h"></span></a><a class="btn btn-sm btn-falcon-default me-2" href="#!">35</a><button class="btn btn-falcon-default btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Next"><span class="fas fa-chevron-right"></span></button></div>
          </div>
          <footer class="footer">
            <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">Thank you for creating with Reservoir<span class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2022 &copy; <a href="https://themewagon.com">Reservoir</a></p>
              </div>
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">v3.4.0</p>
              </div>
            </div>
          </footer>
        </div>
        <div class="modal fade" id="authentication-modal" tabindex="-1" role="dialog" aria-labelledby="authentication-modal-label" aria-hidden="true">
          <div class="modal-dialog mt-6" role="document">
            <div class="modal-content border-0">
              <div class="modal-header px-5 position-relative modal-shape-header bg-shape">
                <div class="position-relative z-index-1 light">
                  <h4 class="mb-0 text-white" id="authentication-modal-label">Register</h4>
                  <p class="fs--1 mb-0 text-white">Please create your free Falcon account</p>
                </div><button class="btn-close btn-close-white position-absolute top-0 end-0 mt-2 me-2" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body py-4 px-5">
                <form>
                  <div class="mb-3"><label class="form-label" for="modal-auth-name">Name</label><input class="form-control" type="text" autocomplete="on" id="modal-auth-name" /></div>
                  <div class="mb-3"><label class="form-label" for="modal-auth-email">Email address</label><input class="form-control" type="email" autocomplete="on" id="modal-auth-email" /></div>
                  <div class="row gx-2">
                    <div class="mb-3 col-sm-6"><label class="form-label" for="modal-auth-password">Password</label><input class="form-control" type="password" autocomplete="on" id="modal-auth-password" /></div>
                    <div class="mb-3 col-sm-6"><label class="form-label" for="modal-auth-confirm-password">Confirm Password</label><input class="form-control" type="password" autocomplete="on" id="modal-auth-confirm-password" /></div>
                  </div>
                  <div class="form-check"><input class="form-check-input" type="checkbox" id="modal-auth-register-checkbox" /><label class="form-label" for="modal-auth-register-checkbox">I accept the <a href="#!">terms </a>and <a href="#!">privacy policy</a></label></div>
                  <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Register</button></div>
                </form>
                <div class="position-relative mt-5">
                  <hr class="bg-300" />
                  <div class="divider-content-center">or register with</div>
                </div>
                <div class="row g-2 mt-2">
                  <div class="col-sm-6"><a class="btn btn-outline-google-plus btn-sm d-block w-100" href="#"><span class="fab fa-google-plus-g me-2" data-fa-transform="grow-8"></span> google</a></div>
                  <div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm d-block w-100" href="#"><span class="fab fa-facebook-square me-2" data-fa-transform="grow-8"></span> facebook</a></div>
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
    <script src="../../../vendors/swiper/swiper-bundle.min.js"></script>
    <script src="../../../vendors/fontawesome/all.min.js"></script>
    <script src="../../../vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="../../../vendors/list.js/list.min.js"></script>
    <script src="../../../assets/js/theme.js"></script>
  </body>

</html>