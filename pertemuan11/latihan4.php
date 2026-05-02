<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// koneksi + pilih database
$conn = mysqli_connect("localhost", "root", "", "lat_dbase");

// cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// insert data 1
$sql1 = "INSERT INTO tbl_mhs (FirstName, LastName, Age)
         VALUES ('Glenn', 'Gandari', 32)";

if (mysqli_query($conn, $sql1)) {
    echo "Data Glenn berhasil ditambahkan<br>";
} else {
    echo "Error: " . mysqli_error($conn) . "<br>";
}

// insert data 2
$sql2 = "INSERT INTO tbl_mhs (FirstName, LastName, Age)
         VALUES ('Karina', 'Suwandi', 29)";

if (mysqli_query($conn, $sql2)) {
    echo "Data Karina berhasil ditambahkan<br>";
} else {
    echo "Error: " . mysqli_error($conn);
}

// tutup koneksi
mysqli_close($conn);
?>