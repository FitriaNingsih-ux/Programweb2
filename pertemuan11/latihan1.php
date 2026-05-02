<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// hostname
$servername = "localhost";
$username = "root";
$password = "";

// koneksi
$conn = mysqli_connect($servername, $username, $password);

if ($conn) {
    echo "ok....koneksi berhasil";
} else {
    echo "koneksi gagal: " . mysqli_connect_error();
}
?>