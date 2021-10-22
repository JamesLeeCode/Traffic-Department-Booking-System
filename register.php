<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/fevicon.png" type="">

  <title>  TraDep System </title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/style2.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">

      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.html">
              <span>
                TraDep System
              </span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav  ">


                <li class="nav-item">
                  <a class="nav-link" href="index.php"> <i class="fa fa-user" aria-hidden="true"></i> Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="register.php"> <i class="fa fa-user" aria-hidden="true"></i> Register</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="adminLogin.php"> System Admin</a>
                </li>

              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div class="slider_bg_box">
        <img src="images/slider-bg.jpg" alt="">
      </div>
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 ">
                  <div class="detail-box">
                    <h1>
                      DRIVER'S LICENCE FOR <br>
                      MOTOR CYCLE
                    </h1>
                    <p>
                    The test is a measure of the motorcycle rider’s ability in respect of the handling of a motorcycle, obedience to traffic rules and the use of the system of vehicle control.The test is not conducted on the road or in traffic – it is done in the yard at the driving licence testing centre. You are required to obey all traffic laws as if you were on the road however.
                    </p>
                    <div class="btn-box">

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 ">
                  <div class="detail-box">
                    <h1>
                      DRIVER'S LICENCE FOR <br>
                      LIGHT MOTOR VEHICLE
                    </h1>
                    <p>
                      Code 08 (or Code B) is the most common driver’s license, allowing you to drive any vehicle (except motorcycles and agricultural vehicles) lighter than 3 500 Kg. A learner’s license is required to take the test.
                    </p>
                    <div class="btn-box">

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 ">
                  <div class="detail-box">
                    <h1>
                      DRIVER'S LICENCE FOR <br>
                      HEAVY MOTOR VEHICLE
                    </h1>
                    <p>
                    Code 10 allows you to drive any vehicle up to 16 000kg, with a trailer of up 750 Kg. Licence also includes a permit to drive code 8 vehicles. A learner’s license is required to take the test.
                    <div class="btn-box">

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
          <li data-target="#customCarousel1" data-slide-to="2"></li>
        </ol>
      </div>

    </section>
    <!-- end slider section -->
  </div>


  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="service_container">
      <div class="container ">
        <div id="login-box">
        <div class="left">
          <div class="heading_container">
            <h2>
              Create <span> Account</span>
            </h2>
          <hr>
          </div>
              <form  method="POST" action="phpScripts/userRegister.php">
          <input type="text" id="fullNames" name="fullNames" placeholder="Full Names" />
          <input type="text" id="email" name="email" placeholder="E-mail" />
          <input type="password"  id="password" name="password" placeholder="Password" />

          <input type="submit" name="signup_submit" value="Sign me up" />
        </form>
        </div>

        <div class="right">



      </div>


      </div>
    </div>
  </section>

  <!-- end service section -->




  <!-- end about section -->

  <!-- track section -->



  <!-- end track section -->

  <!-- client section -->


  <!-- footer section -->
  <section class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By Traffic Department

      </p>
    </div>
  </section>
  <!-- footer section -->

  <!-- jQery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>
