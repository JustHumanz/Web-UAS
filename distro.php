<!doctype html>
<html lang="en">

<head>
  <title>A Powerful distro Gnu/Linux recommendation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/custom-bs.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="css/bootstrap-select.min.css">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="fonts/line-icons/style.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body id="top">


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->


    <!-- NAVBAR -->
    <header class="site-navbar mt-3">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="site-logo col-6"><a href="index.php">Gnu/Linux</a></div>

          <nav class="mx-auto site-navigation">
            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
              <li><a href="index.php">Home</a></li>
              <li><a href="distro.php?page=1">Distro List</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="blog.html">Review</a></li>
              <li class="d-lg-none"><a href="login">Login</a></li>
            </ul>
          </nav>

          <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <div class="ml-auto">
              <a href="login" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-paper-plane"></span>Login</a>
            </div>
            <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
          </div>

        </div>
      </div>
    </header>

    <!-- HOME -->
    <section class="home-section section-hero-cos overlay bg-image-cos" style="background-image: url('images/pakde.png');" id="home-section">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="mb-5 text-center">
              <h1 class="text-white font-weight-bold">Distro Listings</h1>
              <p>Find your best distro in our powerful website .</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="site-section-cos">
      <div class="container">
        <div class="row mb-5 justify-content-center">
        </div>
        <?php
          if(isset($_GET['page'])){
            $page = $_GET['page'];
            $ac = "active";
              		switch ($page) {
              			case '1':
              				include "distro/distro1.php";
              				break;
              			case '2':
              				include "distro/distro2.php";
              				break;
              			case '3':
              				include "distro/distro3.php";
              				break;
                    case '4';
                      include "distro/distro4.php";
                      break;
                    case '5';
                      include "distro/distro5.php";
                      break;
                    case '6';
                      include "distro/distro6.php";
                      break;
              			default:
              				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
              				break;
              		}
              	}else{
              		include "distro.php?page=1";
              	}
          ?>
        <div class="row pagination-wrap">

          <div class="col-md-6 text-center text-md-left">
            <div class="custom-pagination ml-auto">
              <div class="d-inline-block">
                <a href="distro.php?page=1">1</a>
                <a href="distro.php?page=2">2</a>
                <a href="distro.php?page=3">3</a>
                <a href="distro.php?page=4">4</a>
                <a href="distro.php?page=5">5</a>
                <a href="distro.php?page=6">6</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="site-footer">


      <div class="container">
        <div class="row mb-5">
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Contact Us</h3>
            <div class="footer-social">
              <a href="http://facebook.com/kaitothethief" target=_blank><span class="icon-facebook"></span></a>
              <a href="http://instagram.com/aldin0x1101/" target=_blank><span class="icon-instagram"></span></a>
              <a href="http://linkedin.com/in/aldin-setiawan-344547179/" target=_blank><span class="icon-linkedin"></span></a>
              <a href="https://github.com/JustHumanz" target=_blank><span class="icon-github"></span></a>
            </div>
          </div>
        </div>

        <div class="row text-center">
          <div class="col-12">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made
              with <i class="icon-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com"
                target="_blank">Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </footer>

  </div>

  <!-- SCRIPTS -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/stickyfill.min.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>

  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>

  <!-- <script src="js/bootstrap-select.min.js"></script> -->

  <script src="js/custom.js"></script>


</body>

</html>
