<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">


  <title>NFT Dubai</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block">NFT Dubai</span>
      </a>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">

            <a class="nav-link nav-profile d-flex align-items-center " href="#" data-bs-toggle="dropdown">
                <span class="d-none d-md-block dropdown-toggle ps-2">AbuBakr</span>
            </a><!-- End Profile Iamge Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                <li class="dropdown-header">
                    <h6>AbuBakr Ali</h6>
                    <span>abubakr.ali5001@gmail.com</span>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>

                <li>
                    <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                        <i class="bi bi-person"></i>
                        <span>My Profile</span>
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>

                <li>
                    <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                        <i class=" ri-bill-line"></i>
                        <span>Invoices</span>
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>

                <li>
                    <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                        <i class=" ri-bookmark-line"></i>
                        <span>Bookmark</span>
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li>
                    <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                        <i class=" ri-inbox-line"></i>
                        <span>Inbox</span>
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li>
                    <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                        <i class=" ri-notification-2-fill"></i>
                        <span>Notifications</span>
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li>
                    <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                        <i class=" ri-settings-3-line"></i>
                        <span>Setting</span>
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class="bi power"></i>
                        <span>Sign Out</span>
                    </a>
                </li>

            </ul><!-- End Profile Dropdown Items -->

    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <div class="filter"> <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#mobile-filter" aria-expanded="false" aria-controls="mobile-filter">Filters<span class="fa fa-filter pl-1"></span></button>
  </div>
  <main id="main" class="main">
    <div class="row">
        <div class="col-md-3">
            <div class="filter"> <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#mobile-filter" aria-expanded="false" aria-controls="mobile-filter">Filters<span class="fa fa-filter pl-1"></span></button>
            </div>
            <div id="mobile-filter">
                <div>
                    <h6 class="p-1 border-bottom">Transaction Types</h6>
                    <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                                All Transactions
                            </label>
                    </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                                Businesses For Sale
                            </label>
                        </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                                Investment Opportunities
                            </label>
                            </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                                Business Loan
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                                Assets for sale
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                                Franchise Opportunities
                            </label>
                        </div>

                </div>
                <div>
                    <h6 class="p-1 border-bottom">Investment Range</h6>
                    <div>
                        <label for="customRange1" class="form-label">Range of</label>
                        <input type="range" class="form-range" id="customRange1">
                    </div>
                </div>
                <div>
                    <h6 class="p-1 border-bottom">Run Rate Sales</h6>
                    <div>
                        <label for="customRange1" class="form-label">Rate of</label>
                        <input type="range" class="form-range" id="customRange1">
                    </div>
                </div>
                <div>
                    <h6 class="p-1 border-bottom">EBITDA</h6>
                    <div>
                        <label for="customRange1" class="form-label">Rate of</label>
                        <input type="range" class="form-range" id="customRange1">
                    </div>
                </div>
                <div>
                    <h6 class="p-1 border-bottom">EBITDA Margin</h6>
                    <div>
                        <label for="customRange1" class="form-label">Rate of</label>
                        <input type="range" class="form-range" id="customRange1">
                    </div>
                </div>
                <div>
                    <h6 class="p-1 border-bottom">Year Established</h6>
                    <div>
                        <label for="customRange1" class="form-label">Year of</label>
                        <input type="range" class="form-range" id="customRange1">
                    </div>
                </div>
                <div>
                    <h6 class="p-1 border-bottom">Listed By</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                        <label class="form-check-label" for="gridCheck1">
                            Business Owner
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                        <label class="form-check-label" for="gridCheck1">
                            Management
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                        <label class="form-check-label" for="gridCheck1">
                            Advisor
                        </label>
                    </div>
                </div>

            </div>

        </div>
        <div class="col-md-9">
            <div class="pagetitle">
              <h1>Business For Sale</h1>

            </div><!-- End Page Title -->

            <section class="section">
      <div class="row align-items-top">
        <div class="col-lg-12">
        <div class="col-lg-4">

        <div class="card">
            <div class="card-header">
                <div>
                    <p>Newly Established Restaurant Investment Opportunity </p>
                    <div class="row">
                        <div class="col-sm-3"><i class="bx bx-mail-send"></i></div>
                        <div class="col-sm-3"><i class="bx bx-phone-call"></i></div>
                        <div class="col-sm-3"><i class=" bxl-linkedin-square"></i></div>
                        <div class="col-sm-3"><i class=" bxl-google-plus-circle"></i></div>
                    </div>
                </div>
            </div>
            <div class="card-body">
              <h5 class="card-title">Restaurant that will serve traditional Turkish food and has a total seating capacity of 150.</h5>
              <div class="row">
                  <div class="col-lg-8">
              Restaurant that intends to offer traditional Turkish food with some international kitchen, and shisha.
                    <div class="row">
                        <div class="col-6"><i class="bx-star"></i> 8.02</div>
                        <div class="col-6"><i class=" bxs-location-plus"></i> Dubai</div>
                    </div>
                 </div>
                 <div class="col-lg-4">
                 <img src="{{asset('img/b1.jpg')}}" class="card-img-top" alt="...">
                 </div>
                 </div>
            </div>
            <div class="card-footer">
                <div class="row">
                        <div class="col-8">
                            <small>AED 800 K - 1M</small>
                            <small>Financial Investment</small>

                        </div>
                        <div class="col-4">
                        <div >
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        </div>
                </div>
            </div>
          </div><!-- End Card with header and footer -->
        </div>
      </div>
      </div>
    </section>
        </div>
    </div>
  </main><!-- End #main -->

  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NFT Dubai</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">NFT Dubai</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


   <!-- Vendor JS Files -->
   <script src="{{asset('vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/chart.js/chart.min.js')}}"></script>
  <script src="{{asset('vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('vendor/quill/quill.min.js')}}"></script>
  <script src="{{asset('vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('js/main.js')}}"></script>

</body>

</html>
