<?php
$servername ="localhost";
$username ="root";
$password ="";
$database ="portalberita";
// membuat koneksi
$conn = new mysqli($servername, $username,$password,$database);
// Memeriksa Koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>



