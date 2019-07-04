
<?php
include '../config.php';
session_start();

if($_SESSION['status'] !="login"){
	header("location:../index.php");
}

include_once("config.php");
$connect = mysqli_connect("localhost", "root", "", "os");
$query = "SELECT * FROM os.main";
$result = mysqli_query($connect, $query);
?>
<html>
 <head>
	 <title>Admin Page</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="../../css/custom-bs.css">
   <link rel="stylesheet" href="../../css/jquery.fancybox.min.css">
   <link rel="stylesheet" href="../../css/bootstrap-select.min.css">
   <link rel="stylesheet" href="../../fonts/icomoon/style.css">
   <link rel="stylesheet" href="../../fonts/line-icons/style.css">
   <link rel="stylesheet" href="../../css/owl.carousel.min.css">
   <link rel="stylesheet" href="../../css/animate.min.css">
   <link rel="stylesheet" href="../../css/style.css">
  <!--===============================================================================================-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <script src="js/jquery.tabledit.min.js"></script>
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
  <!--===============================================================================================-->
  </head>
    <body>
			<header class="site-navbar mt-3">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="site-logo col-6"><a href="../../index.php">Gnu/Linux</a></div>

						<nav class="mx-auto site-navigation">
							<ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
								<li><a href="../../index.php">Home</a></li>
								<li><a href="../../distro.php?page=1">Distro List</a></li>
								<li><a href="../../about.html">About</a></li>
								<li><a href="../../blog.html">Review</a></li>
								<li class="d-lg-none"><a href="logout.php">LOGOUT</a></li>
							</ul>
						</nav>

						<div class="right-cta-menu text-right d-flex aligin-items-center col-6">
							<div class="ml-auto">
								<a href="logout.php" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-paper-plane"></span>LOGOUT</a>
							</div>
							<a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
						</div>

					</div>
				</div>
			</header>
			<section class="home-section section-hero-cos overlay bg-image-cos" style="background-image: url('../../images/pakde.png');" id="home-section">
				<div class="container">
					<div class="row align-items-center justify-content-center">
						<div class="col-md-12">
							<div class="mb-5 text-center">
								<h1 class="text-white font-weight-bold">Hi Admin</h1>
								<p>How your day?</p>
							</div>
						</div>
					</div>
				</div>
			</section>
  <div class="container">
   <br />
   <br />
   <br />
            <div class="table-responsive">
    <table id="editable_table" class="table table-bordered table-striped">
     <thead>
      <tr>
        <th>ID</th>
        <th>Distro</th>
        <th>Status</th>
        <th>Base</th>
        <th>Package</th>
        <th>Versi</th>
        <th>Link</th>
      </tr>
     </thead>
     <tbody>
       <?php
       while($row = mysqli_fetch_array($result))
       {
        echo '
        <tr>
         <td>'.$row["id"].'</td>
         <td>'.$row["distro"].'</td>
         <td>'.$row["status"].'</td>
         <td>'.$row["base"].'</td>
         <td>'.$row["package"].'</td>
         <td>'.$row["versi"].'</td>
         <td>'.$row["link"].'</td>
        </tr>
        ';
       }
       ?>
     </tbody>
    </table>
   </div>
  </div>
 </body>
</html>
<script>
$(document).ready(function(){
     $('#editable_table').Tabledit({
      url:'action.php',
      columns:{
       identifier:[0, "id"],
       editable:[[2, 'status'], [5, 'versi']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {
       if(data.action == 'delete')
       {
        $('#'+data.id).remove();
       }
      }
     });

});
 </script>
