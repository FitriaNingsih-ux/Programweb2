<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "db_bukutamu");

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Proses simpan data jika tombol Simpan diklik
if (isset($_POST['btn_simpan'])) {
    $nama  = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    $sql = "INSERT INTO tamu (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";
    
    if (mysqli_query($koneksi, $sql)) {
        echo "<script>alert('Data tamu berhasil disimpan!'); window.location='index.php';</script>";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Buku Tamu Fitria</title>
</head>
<body>
    <h2>Form Buku Tamu Digital</h2>
    <form method="POST" action="">
        <table border="0">
            <tr>
                <td>Nama Lengkap</td>
                <td>: <input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>: <input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Pesan / Kesan</td>
                <td>: <textarea name="pesan" required></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" name="btn_simpan">Simpan Data</button></td>
            </tr>
        </table>
    </form>
</body>
</html>