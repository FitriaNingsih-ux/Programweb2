<?php
include '../koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Pendaftaran Paspor</title>
</head>
<body>

<h2>Data Pendaftaran Paspor</h2>

<a href="tambah.php">Tambah Data</a>

<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>No Daftar</th>
        <th>Nama Pemohon</th>
        <th>Tanggal Daftar</th>
        <th>Hari</th>
        <th>Tanggal Datang</th>
        <th>Jam</th>
        <th>Aksi</th>
    </tr>

    <?php
    $no = 1;
    $data = mysqli_query($conn, "SELECT * FROM pendaftar");

    while($d = mysqli_fetch_array($data)){
    ?>

    <tr>
        <td><?= $no++; ?></td>
        <td><?= $d['no_daftar']; ?></td>
        <td><?= $d['nama_pemohon']; ?></td>
        <td><?= $d['tgl_daftar']; ?></td>
        <td><?= $d['hari']; ?></td>
        <td><?= $d['tanggal_datang']; ?></td>
        <td><?= $d['jam']; ?></td>
        <td>
            <a href="edit.php?id=<?= $d['id']; ?>">Edit</a>
            |
            <a href="hapus.php?id=<?= $d['id']; ?>"
               onclick="return confirm('Yakin hapus data?')">
               Hapus
            </a>
        </td>
    </tr>

    <?php } ?>

</table>

</body>
</html>