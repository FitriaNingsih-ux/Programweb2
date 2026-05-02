<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// koneksi
$conn = mysqli_connect("localhost", "root", "", "lat_dbase");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// buat tabel
$sql = "CREATE TABLE tbl_mhs (
    mhsID INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(mhsID),
    FirstName VARCHAR(15),
    LastName VARCHAR(15),
    Age INT
)";

if (mysqli_query($conn, $sql)) {
    echo "Tabel berhasil dibuat<br>";
} else {
    echo "Error buat tabel: " . mysqli_error($conn) . "<br>";
}

// insert data
$input = mysqli_query($conn, "INSERT INTO tbl_mhs (FirstName, LastName, Age) 
VALUES ('Anjar','Prabowo',25)");

if ($input) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Error insert: " . mysqli_error($conn);
}
?>