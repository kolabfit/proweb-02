<?php
include "../configdb.php";

$namaKategori = $_POST['namaKategori'];

$strQuery = "INSERT INTO kategori(namakategori) VALUES ('$namaKategori')";
$query = mysqli_query($conn, $strQuery);

if (mysqli_affected_rows($conn) == 1) {
    header("Location: index.php");
} else {
    die("Insert Gagal");
}
