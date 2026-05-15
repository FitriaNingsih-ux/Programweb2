<?php
include "koneksi.php";

// Perintah Delete dari Slide Pertemuan 12
$query = "DELETE FROM tbl_mhs WHERE LastName='Prabowo'";

if(mysqli_query($connection, $query)) {
    echo "Data Berhasil Dihapus!";
} else {
    echo "Error: " . mysqli_error($connection);
}

mysqli_close($connection);
?>