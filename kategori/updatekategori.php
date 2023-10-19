<?php
include "../configdb.php";

$idKategori = $_POST['idKategori'];
$namaKategori = $_POST['namaKategori'];

$strQuery = "UPDATE kategori SET namakategori='$namaKategori' WHERE id='$idKategori'";
$query = mysqli_query($conn, $strQuery);

if (mysqli_affected_rows($conn) == 1) {
    header("Location: index.php");
} else {
    die("Update Gagal");
}
