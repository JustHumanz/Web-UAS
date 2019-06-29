<?php
include_once 'config.php';

$username = mysqli_real_escape_string($conn,$_POST["username"]);
$password = mysqli_real_escape_string($conn,$_POST["password"]);
mysqli_close($conn);
$qur = "SELECT * from admin where username='$username' and password='$password'";
$login = mysqli_query($mysqli,$qur);
$cek = mysqli_num_rows($login);

if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:admin/index.php");
}else{
	header("location:index.php");
}

?>
