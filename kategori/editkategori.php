<?php
include "../configdb.php";

$idkategori = $_GET['id'];
$strQuery = "SELECT * FROM kategori WHERE id='$idkategori'";
$query = mysqli_query($conn, $strQuery);
$kategori = array();
while ($rowData = mysqli_fetch_assoc($query)) {
    $kategori[] = $rowData;
}
mysqli_close($conn);
// print_r($kategori);
$numRowData = sizeof($kategori);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ubah Data Kategori</title>
</head>

<body>
    <h1>Ubah Data Kategori</h1>
    <?php
    if ($numRowData != 1) {
    ?>
        <h3>Data Tidak Ditemukan</h3>
        <input type="button" value="Kembali" onclick="window.location.href='index.php'">
    <?php
    } else {
    ?>
        <form method="post" action="updatekategori.php">
            <table>
                <tr>
                    <td>ID Kategori</td>
                    <td>:</td>
                    <td><?= $kategori[0]['id'] ?></td>
                </tr>
                <tr>
                    <td>Nama Kategori</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="namaKategori" value="<?= $kategori[0]['namakategori'] ?>">
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <input type="hidden" name="idKategori" value="<?= $kategori[0]['id'] ?>">
                        <input type="submit" value="Ubah">
                    </td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
</body>

</html>