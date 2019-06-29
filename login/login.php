<?php
include_once("config.php");

$username = $_POST['username'];
$password = ($_POST['password']);

$login = mysqli_query("select * from admin where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);


if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:admin/admin/index.php");
}else{
	header("location:index.php");
}

?>
