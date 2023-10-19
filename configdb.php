<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'portalberita';

$conn = mysqli_connect($servername, $username, $password, $dbname);
//print_r($conn);
if (!$conn) { //if ($conn == FALSE)
    die("Koneksi ke MySQL gagal " . mysqli_connect_error());
}
