<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "lat_dbase");

// cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// ambil data
$hasil = mysqli_query($conn, "SELECT * FROM tbl_mhs");

// tampilkan data (pakai nama field)
while ($data = mysqli_fetch_array($hasil)) {
    echo $data['FirstName'] . " " . $data['LastName'] . " " . $data['Age'] . "<br>";
}
?>