<?php
    include "database.php";
    // Check connection
    $sql = "INSERT INTO kategori(namakategori) VALUES ('ekonomi')";
    if ($conn->query($sql) == TRUE) {
        echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>