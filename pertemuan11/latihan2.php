<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// koneksi ke MySQL
$conn = mysqli_connect("localhost", "root", "");

// cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// nama database
$dbname = "lat_dbase";

// query buat database
$sql = "CREATE DATABASE $dbname";

// eksekusi
if (mysqli_query($conn, $sql)) {
    echo "Database $dbname berhasil dibuat";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>