<?php
include "koneksi.php";

$query = "UPDATE tbl_mhs SET Age = '36' WHERE FirstName = 'Karina' AND LastName = 'Suwandi'";

if(mysqli_query($connection, $query)) {
    echo "Data Berhasil Diupdate!";
} else {
    echo "Error: " . mysqli_error($connection);
}

mysqli_close($connection);
?>