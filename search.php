<!doctype html>
<html lang="en">

<head>
  <title>Careers &mdash; Website Template by Colorlib</title>
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
          <div class="site-logo col-6"><a href="index.html">Gnu/Linux</a></div>

          <nav class="mx-auto site-navigation">
            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
              <li><a href="index.html" class="nav-link active">Home</a></li>
              <li><a href="distro.html">Distro List</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="tutor.html">Tutorials And Learning</a></li>
              <li><a href="blog.html">Review</a></li>
              <li class="d-lg-none"><a href="contact.html">Login</a></li>
            </ul>
          </nav>

          <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <div class="ml-auto">
              <a href="contact.html" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-paper-plane"></span>Login</a>
            </div>
            <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
          </div>

        </div>
      </div>
    </header>

    <!-- HOME -->
    <section class="home-section section-hero-cos overlay bg-image" style="background-image: url('images/pakde2.png' );" id="home-section">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="mb-5 text-center">
              <h1 class="text-white font-weight-bold">Your Search</h1>
            </div>
          </div>
        </div>
      </div>


    </section>



    <section class="site-section">
      <div class="container">
      <?php
        include_once("conf.php");
        $a = $_POST['satu'];
        $aa = $_POST['dua'];
        $aaa = $_POST['tiga'];
        $b = "SELECT $aa.distro,main.status,$a.link,$a.versi,$aa.package,$a.base from $a,$aa,$aaa,main where $a.distro=$aa.distro and $aa.distro=$aaa.distro group by $a.distro";
          #$b = "SELECT * from main";
        $query = mysqli_query($mysqli, $b);
        $count = mysqli_num_rows($query);
        if ($count == 0) {
          $b = "SELECT $aa.distro,main.status,$a.link,$a.versi,$aa.package,$a.base from $a,$aa,main where $a.distro=$aa.distro group by $a.distro";
          $query = mysqli_query($mysqli, $b);
          $count = mysqli_num_rows($query);
        }
        echo '<div class="row mb-5 justify-content-center">';
          echo '<div class="col-md-7 text-center">';
            echo "<h2 class='section-title mb-2'>".$count." Distro Found for you</h2>";
          echo '</div>';
        echo '</div>';
        ?>
<div class="mb-5">

   <?php
     while($data = mysqli_fetch_array($query)) {

  echo '<div class="row align-items-start job-item border-bottom pb-3 mb-3 pt-3">';
    echo '<div class="col-md-2">';
      echo "<a href=distro-info.html><img src=images/icon/".$data['distro'].".png alt='Image' class=img-fluid></a>";
    echo '</div>';
    echo '<div class="col-md-4">';
      echo "<span class='badge badge-success px-2 py-1 mb-3'>".$data['status']."</span>";
        echo "<h2><a href=distro-info.html>".$data['distro']."</a> </h2>";
    echo '</div>';
    echo '<div class="col-md-3 text-left">';
      echo '<h3>'.$data['versi'].'</h3>';
      echo '<span class="meta">'.$data['base'].'</span><br>';
      echo '<span class="meta">'.$data['package'].'</span>';
    echo '</div>';
    echo '<div class="col-md-3 text-right">';
      echo "<h4><a href=".$data['link']." target=_blank</a><img src='images/down.png' alt='Image' height=100 width=100></h4>";
    echo '</div>';
  echo '</div>';
  }
 ?>
</div>

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
