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
<body>
<div class="mb-5">
<?php
  include_once("conf.php");
  $a = $_POST['satu'];
  $aa = $_POST['dua'];
  $aaa = $_POST['tiga'];

  /*
  $a = 'beginner';
  $aa = 'low';
  $aaa = 'consumable';
  $aaaa = 'main';
  */
  $b = "SELECT $aa.distro,$aa.status from $a,$aa,$aaa where $a.distro=$aa.distro and $aa.distro=$aaa.distro";
  #echo $b;

  $query = mysqli_query($mysqli, $b);
  #$query = mysqli_query($mysqli, "SELECT * From $aaaa");

   ?>
   <?php
     while($data = mysqli_fetch_array($query)) {
       echo $data["distro"];

  echo '<div class="row align-items-start job-item border-bottom pb-3 mb-3 pt-3">';
    echo '<div class="col-md-2">';
      echo '<a href="distro-info.html"><img src="images/featured-listing-3.jpg" alt="Image" class="img-fluid"></a>';
    echo '</div>';
    echo '<div class="col-md-4">';
      echo "<span class='badge badge-success px-2 py-1 mb-3'>".$data['status']."</span>";
        echo "<h2><a href=distro-info.html>".$data['distro']."</a> </h2>";
      echo '<p class="meta">Publisher: <strong>John Stewart</strong> In: <strong>Design</strong></p>';
    echo '</div>';
    echo '<div class="col-md-3 text-left">';
      echo '<h3>London</h3>';
      echo '<span class="meta">United Kingdom</span>';
    echo '</div>';
    echo '<div class="col-md-3 text-md-right">';
      echo '<strong class="text-black">$60k &mdash; $100k</strong>';
    echo '</div>';
  echo '</div>';
  }?>
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
