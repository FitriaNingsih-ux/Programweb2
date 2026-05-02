<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "lat_dbase");

// cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// query ambil data
$hasil = mysqli_query($conn, "SELECT * FROM tbl_mhs");

// tampilkan data (seperti mysql_fetch_row)
while ($data = mysqli_fetch_row($hasil)) {
    echo $data[0] . " " . $data[1] . " " . $data[2] . " " . $data[3] . "<br>";
}
?>