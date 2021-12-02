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
                    <img alt="Image placeholder" src="../images/person2.png">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">System Admin</span>
                  </div>
                </div>
              </a>

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
              <h6 class="h2 text-white d-inline-block mb-0">Welcome back,System Admin </h6>

            </div>
            <div class="col-lg-6 col-5 text-right">


            </div>
          </div>
          <!-- Card stats -->
          <?php
  include '../phpScripts/db_connection.php';
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
    <h6 class="h2 text-white d-inline-block mb-0">Edit System Prices </h6>
      <form  method="POST" action="../phpScripts/editPrices.php">
        <select name="item" id="item" >
        <option value="licenceRenewal">LICENCE RENEWAL FEE</option>
        <option value="lostLicence">LOST LICENCE FEE</option>
        <option value="diskRenewal">DISK RENEWAL FEE</option>
        <option value="driversLicence">DRIVER'S LICENCE FEES </option>
        </select>


        <input type="text" id="price" name="price" placeholder="New Price" />

        <input type="submit" name="signup_submit" value="Edit Price" />
      </form>
      <br>
        </div>
      </div>
    </div>

    <!-- Page content -->
    <div class="container-fluid mt--6">

      <!-- Dark table -->
      <div class="row">
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">Dark table</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Fullname</th>
                    <th scope="col" class="sort" data-sort="budget">Application Type</th>
                    <th scope="col" class="sort" data-sort="status">Appoinmtent Date</th>
                    <th scope="col">Test|Payment</th>
                    <th scope="col" class="sort" data-sort="completion">Ready For Collection</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list">
                  <?php

                  $conn = OpenCon();

                  $sql = "SELECT * FROM bookings ";
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
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="../images/person2.png">
                        </a>
                        <div class="media-body">
                          <span class="name mb-0 text-sm"><?php echo $row['firstname'].' '.$row['lastname']; ?></span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                      <?php echo $row['type']; ?>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i>
                        <span class="status"><?php echo $row['bookingApprovalDate']; ?></span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i>
                        <span class="status"> <?php echo $row['testPaymentDate']; ?></span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i>
                        <span class="status"> <?php echo $row['collectionDate']; ?></span>
                      </span>
                    </td>
                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="approveApplication.php?id=<?php echo $row['booking_id']; ?>&email=<?php echo $row['email']; ?>">Approve Application</a>
                          <a class="dropdown-item" href="testPayment.php?id=<?php echo $row['booking_id']; ?>&email=<?php echo $row['email']; ?>">Test|Payment Approval</a>
                          <a class="dropdown-item" href="../phpScripts/readyForCollection.php?id=<?php echo $row['booking_id']; ?>&email=<?php echo $row['email']; ?>">Ready For Collection</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <?php
                   };
                  ?>


                </tbody>
              </table>
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
