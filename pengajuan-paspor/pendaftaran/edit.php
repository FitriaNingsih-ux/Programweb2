<?php
include '../koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM pendaftar WHERE id='$id'");
$d = mysqli_fetch_array($data);

if (isset($_POST['update'])) {

    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $tgl = $_POST['tgl'];

    $hari = date('l', strtotime($tgl));
    $tanggal_datang = date('Y-m-d', strtotime($tgl . ' +1 day'));
    $jam = '08:00:00';

    mysqli_query($conn, "
        UPDATE pendaftar
        SET
        no_daftar='$no',
        nama_pemohon='$nama',
        tgl_daftar='$tgl',
        hari='$hari',
        tanggal_datang='$tanggal_datang',
        jam='$jam'
        WHERE id='$id'
    ");

    header("Location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Pendaftaran</title>
</head>
<body>

<h2>Edit Data Pendaftaran Paspor</h2>

<form method="POST">

    No Daftar<br>
    <input type="text"
           name="no"
           value="<?= $d['no_daftar']; ?>"
           required>

    <br><br>

    Nama Pemohon<br>
    <input type="text"
           name="nama"
           value="<?= $d['nama_pemohon']; ?>"
           required>

    <br><br>

    Tanggal Daftar<br>
    <input type="date"
           name="tgl"
           value="<?= $d['tgl_daftar']; ?>"
           required>

    <br><br>

    <button type="submit" name="update">
        Update
    </button>

</form>

<br>

<a href="index.php">Kembali</a>

</body>
</html>