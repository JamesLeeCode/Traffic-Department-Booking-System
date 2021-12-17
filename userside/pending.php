<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>TraDep System</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="../images/fevicon.png" type="">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="timeline.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
  <!-- Sidenav -->
  <?php
  include '../phpScripts/db_connection.php';
  $conn = OpenCon();
  session_start();
    $id =  $_GET['booking_id'];
  $sql = "SELECT * FROM bookings where booking_id = '$id'";
  $result = $conn->query($sql);

  //Store the results in an array
  $applicationBookingDate	=" ";
  $bookingApprovalDate =" ";
  $testPaymentDate=" ";
  $collectionDate=" ";
  while ($row = mysqli_fetch_assoc($result)) {
    $applicationBookingDate	 = $row['applicationBookingDate'];
    $bookingApprovalDate	 = $row['bookingApprovalDate'];
    $testPaymentDate	 = $row['testPaymentDate'];
    $collectionDate	 = $row['collectionDate'];
  }
  //CLose DB Connection
  CloseCon($conn);
  //Session the Employees array

  ?>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">

            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->

          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="assets/img/theme/team-4.jpg">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold"><?php echo $_SESSION["username"]; ?></span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>

                <div class="dropdown-divider"></div>
                <a href="../index.php" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Welcome back, <?php echo $_SESSION["username"]; ?></h6>

            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div>
          </div>
          <!-- Card stats -->
          <?php

            $conn = OpenCon();
          $sql = "SELECT * FROM prices ";
          $result = $conn->query($sql);

          //Store the results in an array
          $arr = array();
          while ($row = mysqli_fetch_assoc($result)) {
            $arr[] = $row;
          }
          //CLose DB Connection
          CloseCon($conn);
          //Session the Employees array
          foreach ($arr as $row){
          ?>
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Licence Renewal Fee</h5>
                      <span class="h2 font-weight-bold mb-0">R <?php echo $row['licenceRenewal']; ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-money-coins"></i>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Lost Licence Fee</h5>
                      <span class="h2 font-weight-bold mb-0">R<?php echo $row['lostLicence']; ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                        <i class="ni ni-money-coins"></i>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Disk Renewal Fee</h5>
                      <span class="h2 font-weight-bold mb-0">R<?php echo $row['diskRenewal']; ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                        <i class="ni ni-money-coins"></i>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Driver's Licence Fees  </h5>
                      <span class="h2 font-weight-bold mb-0">R<?php echo $row['driversLicence']; ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                        <i class="ni ni-money-coins"></i>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>

          <?php
           };
          ?>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">

      <div class="row">


        <div class="col-xl-8 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-10">
                  <h3 >Process Status </h3>
                </div>
                <a href="../phpScripts/cancelBooking.php?id=<?php echo $id ; ?>" class="btn btn-neutral">Cancel Booking</a>
              </div>
            </div>
            <div class="card-body">

              <h2>Process | Timeline </h2>

    <div style="margin-left:80px" class="timeline">
      <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type1">
        <div class="timeline__event__icon ">
        <i class="ni ni-check-bold"></i>
          <div class="timeline__event__date">
            <?php
            echo $applicationBookingDate;
             ?>
          </div>
        </div>
        <div class="timeline__event__content ">
          <div class="timeline__event__title">
            Application Booking
          </div>
          <div class="timeline__event__description">
            <p>Submission of application was successfull. Check you email for conformation. The system will send you an email after checking your details and documents</p>
          </div>
        </div>
      </div>
      <div class="timeline__event animated fadeInUp delay-2s timeline__event--type2">
        <div class="timeline__event__icon">

          <?php if ($bookingApprovalDate == 'Pending'){ ?>
            <i class="ni ni-fat-remove"></i>
          <?php } ?>
          <?php if ($bookingApprovalDate !='Pending'){ ?>
                <i class="ni ni-check-bold"></i>
          <?php } ?>
          <div class="timeline__event__date">
            <?php
            echo $bookingApprovalDate;
             ?>
          </div>
        </div>
        <div class="timeline__event__content">
          <div class="timeline__event__title">
            Booking Approval
          </div>
          <div class="timeline__event__description">

            <p>
             <?php if ($bookingApprovalDate=='Pending'){?>
               All the admins are still busy but one will come to attend to your application
             <?php }
             elseif($applicationBookingDate=='Denied'){ ?>
              Please check your email to see why your apllication was denied.
             <?php }
             else{
               ?>
             Please come for your booking on the following date :   <?php
               echo $applicationBookingDate;
                ?>
             <?php }
               ?>

            </p>
          </div>
        </div>
      </div>
      <div class="timeline__event animated fadeInUp delay-1s timeline__event--type3">
        <div class="timeline__event__icon">
          <?php if ($testPaymentDate == 'Pending'){ ?>
            <i class="ni ni-fat-remove"></i>
          <?php } ?>
          <?php if ($testPaymentDate !='Pending'){ ?>
                <i class="ni ni-check-bold"></i>
          <?php } ?>
          <div class="timeline__event__date">
            <?php
            echo $testPaymentDate;
             ?>
          </div>

        </div>
        <div class="timeline__event__content">
          <div class="timeline__event__title">
            Payment|Test Completed
          </div>
          <div class="timeline__event__description">
            <p>
             <?php if ($testPaymentDate=='Pending'){?>
               All the admins are still busy but one will come to attend to your application
             <?php }
             elseif($testPaymentDate=='Denied'){ ?>
              Please check your email to see why your apllication was denied.
             <?php }
             else{
               ?>
                Thank you for coming for your appoinment, Your payment/test was proccessed. Please wait for the collecting date.   <?php

                ?>
             <?php }
               ?>

            </p>
          </div>

        </div>
      </div>
      <div class="timeline__event animated fadeInUp timeline__event--type1">
        <div class="timeline__event__icon">
          <?php if ($collectionDate == 'Pending'){ ?>
            <i class="ni ni-fat-remove"></i>
          <?php } ?>
          <?php if ($collectionDate !='Pending'){ ?>
                <i class="ni ni-check-bold"></i>
          <?php } ?>
          <div class="timeline__event__date">
          <?php echo $collectionDate; ?>
          </div>
        </div>
        <div class="timeline__event__content">
          <div class="timeline__event__title">
            Ready Collection
          </div>
          <div class="timeline__event__description">
            <p>

              <?php if ($collectionDate=='Pending'){?>
                All the admins are still busy but one will come to attend to your application
              <?php }
              elseif($collectionDate=='Denied'){ ?>
               Please check your email to see why your apllication was denied.
              <?php }
              else{
                ?>
                 Thank you for coming for your appoinment, Your payment/test was proccessed. Please wait for the collecting date.   <?php

                 ?>
              <?php }
                ?>

            </p>
          </div>
        </div>
      </div>

    </div>

            </div>
          </div>
        </div>
        <div class="col-xl-4 order-xl-2">
          <div class="card card-profile">
            <img src="assets/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="../images/logo.png" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">

            </div>
            <div class="card-body pt-0">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center">

                  </div>
                </div>
              </div>
              <div class="text-center">
                <h5 class="h3">
                  Licensing Department<span class="font-weight-light"></span>
                </h5>
                <div class="h5 font-weight-300">
                  <i class="ni location_pin mr-2"></i>Driver's license office in Pretoria
                </div>
                <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i>Working Hours - 8:30AM - 3PM
                </div>
                <div>
                  <i class="ni education_hat mr-2"></i>Phone: 011 247 3100
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->

    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="assets/js/argon.js?v=1.2.0"></script>
</body>

</html>
