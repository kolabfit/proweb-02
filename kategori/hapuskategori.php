<?php
include "../configdb.php";

$idKategori = $_GET['id'];

$strQuery = "DELETE FROM kategori WHERE id='$idKategori'";
$query = mysqli_query($conn, $strQuery);

if (mysqli_affected_rows($conn) == 1) {
    header("Location: index.php");
} else {
    die("Hapus Gagal");
}
