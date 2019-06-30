<?php
#include_once 'config.php';

$con=mysqli_connect("localhost","root","","os");
$username = mysqli_real_escape_string($con, $_POST['username']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$sql_command = "SELECT * from admin where username = '" . $username; $sql_command .= "' AND password = '" . $password . "'";

$login = mysqli_query($con,$sql_command);
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
