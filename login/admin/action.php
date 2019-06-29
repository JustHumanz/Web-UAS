<?php
include_once("config.php");

// mengaktifkan session
session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("location:../index.php");
}

?>

<?php
//action.php
$connect = mysqli_connect('localhost', 'root', '', 'os');

$input = filter_input_array(INPUT_POST);

$sta = mysqli_real_escape_string($connect, $input["status"]);
$ver = mysqli_real_escape_string($connect, $input["versi"]);

if($input["action"] === 'edit')
{
 $query = "UPDATE os.main SET status = '".$sta."',versi = '".$ver."' WHERE id = '".$input["id"]."'";

#$query = "UPDATE os.main SET status =".$sta.",versi =".$ver." WHERE id=".$input["id"];

mysqli_query($connect, $query);

}
if($input["action"] === 'delete')
{
 $query = "DELETE FROM os.main WHERE id = '".$input["id"]."'";
 mysqli_query($connect, $query);
}

echo json_encode($input);

?>
