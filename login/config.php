<?php
$databaseHost = 'localhost';
$databaseName = 'os';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

// mengecek koneksi
if (!$mysqli) {
    die("Koneksi gagal: " . mysqli_connect_error());
}else {
    //echo "Koneksi berhasil";
}

?>
