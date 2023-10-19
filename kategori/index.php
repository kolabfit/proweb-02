<?php
include '../configdb.php';

$strQuery = "SELECT * FROM kategori";
$query = mysqli_query($conn, $strQuery);
$kategori = array();
while ($rowData = mysqli_fetch_assoc($query)) {
    $kategori[] = $rowData;
}
mysqli_close($conn);
//print_r($kategori);
?>
<!DOCTYPE html>

<head>
    <title>Data Kategori</title>
</head>

<body>
    <h1>Data Kategori</h1>
    <a href="tambahdata.html">[ Tambah Data Kategori ]</a>
    <a href="login.php">Masuk</a>
    <br>
    <table border="1" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Kategori</th>
            <th>Aksi</th>
        </tr>
        <?php
        foreach ($kategori as $key => $value) {
        ?>
            <tr>
                <td><?= $key + 1 ?></td>
                <td><?= $value['namakategori'] ?></td>
                <td>
                    <a href="editkategori.php?id=<?= $value['id'] ?>">Ubah</a>
                    |
                    <a href="hapuskategori.php?id=<?= $value['id'] ?>">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>