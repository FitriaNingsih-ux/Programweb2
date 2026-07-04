<?php
include '../koneksi.php';
?>

<h2>Data Daftar Ulang Paspor</h2>

<a href="tambah.php">Tambah Data</a>

<br><br>

<table border="1" cellpadding="10">

<tr>
    <th>No</th>
    <th>No Daftar</th>
    <th>Nama</th>
    <th>KTP</th>
    <th>KK</th>
    <th>Ijazah</th>
    <th>Keterangan</th>
    <th>No Antrian</th>
</tr>

<?php
$no = 1;

$data = mysqli_query($conn,
"SELECT * FROM daftar_ulang");

while($d = mysqli_fetch_array($data)){
?>

<tr>
    <td><?= $no++; ?></td>
    <td><?= $d['no_daftar']; ?></td>
    <td><?= $d['nama_pemohon']; ?></td>
    <td><?= $d['ktp']; ?></td>
    <td><?= $d['kk']; ?></td>
    <td><?= $d['ijazah']; ?></td>
    <td><?= $d['keterangan']; ?></td>
    <td><?= $d['no_antrian']; ?></td>
</tr>

<?php } ?>

</table>