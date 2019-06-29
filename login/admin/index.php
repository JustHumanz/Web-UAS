
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
<a href="logout.php">LOGOUT</a>
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
  <div class="container">
   <br />
   <br />
   <br />
            <div class="table-responsive">
    <h3 align="center"><font color="Black">Hi Admin,How your day?</font></h3><br />
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
