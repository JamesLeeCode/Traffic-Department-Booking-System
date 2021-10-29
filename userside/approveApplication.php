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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div>
          </div>
          <!-- Card stats -->
          <div class="row">
            <?php
            include '../phpScripts/db_connection.php';
            $conn = OpenCon();
            $booking_id = $_GET['id'];
            $mail = $_GET['email'];
            $sql = "SELECT * FROM bookings where booking_id = '$booking_id' ";
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
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Licence Renewal Fee</h5>
                      <span class="h2 font-weight-bold mb-0">R432. 00</span>
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
                      <span class="h2 font-weight-bold mb-0">R652,00</span>
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
                      <span class="h2 font-weight-bold mb-0">R1 416,00</span>
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
                      <span class="h2 font-weight-bold mb-0">R72</span>
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
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">

      <!-- Dark table -->
      <div class="row">
        <div class="card col-xl-6" >
          <div class="card-header">
            <div class="row align-items-center">
              <div class="col-8">
                <h3 class="mb-0">Booking Application </h3>
              </div>

            </div>
          </div>
          <div class="card-body">
              <h6 class="heading-small text-muted mb-4">User information</h6>
              <div class="pl-lg-4">

                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-first-name">First name</label>
                      <input type="text" id="firstname"  name="firstname" class="form-control"  disabled value="<?php echo $row['firstname']?>" placeholder="First name" >
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-last-name">Last name</label>
                      <input type="text" id="lastname" name="lastname" disabled value="<?php echo $row['lastname']; ?>" class="form-control" placeholder="Last name" >
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-first-name">ID Number/Passport/Traffic Reg</label>
                      <input type="text" id="id" name="id" disabled value="<?php echo $row['id']; ?>" class="form-control" placeholder="ID Number/Passport/Traffic Reg" >
                    </div>
                  </div>

                  <div class="col-lg-6">
                                        <div class="form-group">
                                          <label class="form-control-label" for="input-first-name">Booking Type</label>
                                         <select disabled type="text" id="type" name="type" class="form-control"  >
                                           <option > <?php echo $row['type'] ?> </option>
                                          </select>

                                        </div>
                                      </div>


                </div>
              </div>
              <hr class="my-4" />

              <!-- Address -->
              <h6 class="heading-small text-muted mb-4">Contact information</h6>
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-username">Cell Phone</label>
                      <input type="text" id="cellphone" name="cellphone" disabled value="<?php echo $row['cellphone']; ?>" class="form-control" placeholder="Cell Phone" >
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-email">Email address</label>
                      <input disabled value="<?php echo $row['email']; ?>" type="email" id="email" name="email" class="form-control"  placeholder="Email address">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="form-control-label" for="input-address">Address</label>
                      <input disabled value="<?php echo $row['address']; ?>" id="address" name="address" class="form-control" placeholder="Home Address"  type="text">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label" for="input-city">City</label>
                      <input disabled value="<?php echo $row['city']; ?>" type="text" id="city" name="city" class="form-control" placeholder="City" >
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label" for="input-country">Country</label>
                      <input disabled value="<?php echo $row['country']; ?>" type="text" id="country" name="country" class="form-control" placeholder="Country" >
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label" for="input-country">Postal code</label>
                      <input disabled value="<?php echo $row['postalCode']; ?>" type="number" id="postalCode" name="postalCode" class="form-control" placeholder="Postal code">
                    </div>
                  </div>
                </div>
              </div>
              <hr class="my-4" />
              <!-- Description -->
              <h6 class="heading-small text-muted mb-4">About me</h6>
              <div class="pl-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Special Notes</label>
                  <textarea disabled value="<?php echo $row['notes']; ?>" rows="4" id="notes" name="notes" class="form-control" ></textarea>
                </div>
              </div>
              <div class=" text-right">
                <row>
                <button  class="btn btn-primary" data-toggle="modal" data-target="#myModal" >Declined </button>
                <button onClick="window.location.href='../phpScripts/acceptApplication.php?id=<?php echo $booking_id; ?>&email=<?php echo $mail; ?>';"  class="btn btn-primary" name="button">Approve Booking </button>
               </row>
              </div>
          </div>
        </div>

        <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">

          <h4 class="modal-title">Reason For Decline</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label class="form-control-label" for="input-country">Reason For Decline</label>
            <input  type="text" id="reason" name="reason" class="form-control" placeholder="Reason" >
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" onClick="window.location.href='../phpScripts/rejectAppoinmtent.php?id=<?php echo $booking_id; ?>&email=<?php echo $mail; ?>';" class="btn btn-default" >Save</button>
        </div>
      </div>
    </div>
  </div>

      <!-- Footer -->
      <div class="card col-xl-6" >
        <div class="card-header">
          <div class="row align-items-center">
            <div class="col-8">
              <h3 class="mb-0">Supporting Documents </h3>
            </div>

          </div>
        </div>
        <div class="card-body">
          <form action="../phpScripts/booking.php" method = "POST" enctype="multipart/form-data">
            <h6 class="heading-small text-muted mb-4">ID CARD/Passport</h6>
            <div class="pl-lg-4">
                <img src="../phpScripts/upload/<?php echo $row['id_location']; ?>" alt="Image placeholder" class="card-img-top">
            </div>
            <hr class="my-4" />
            <!--upload decuments -->
            <h6 class="heading-small text-muted mb-4">Proof Of Address</h6>
            <div class="pl-lg-4">
                <img src="../phpScripts/upload/<?php echo $row['id_location']; ?>" alt="Image placeholder" class="card-img-top">
            </div>




          </form>
        </div>
      </div>

      <?php
    }
     ?>
      <!-- end of the cards -->
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
