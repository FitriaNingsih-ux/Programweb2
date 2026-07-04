<?php
include '../koneksi.php';

$data = mysqli_query($conn, "SELECT * FROM daftar_ulang");

while($d = mysqli_fetch_array($data)){

    $cek = mysqli_query($conn,
    "SELECT * FROM pengurusan
     WHERE no_daftar='".$d['no_daftar']."'");

    if(mysqli_num_rows($cek) == 0){

        if($d['keterangan'] == "OK"){
            $status = "Diterima";
            $bayar = 355000;
        }else{
            $status = "Ditolak";
            $bayar = 0;
        }

        mysqli_query($conn,"
        INSERT INTO pengurusan
        (no_antrian,no_daftar,nama_pemohon,status,pembayaran)
        VALUES
        (
        '".$d['no_antrian']."',
        '".$d['no_daftar']."',
        '".$d['nama_pemohon']."',
        '$status',
        '$bayar'
        )");
    }
}
?>

<h2>Data Pengurusan Paspor</h2>

<table border="1" cellpadding="10">

<tr>
    <th>No</th>
    <th>No Antrian</th>
    <th>No Daftar</th>
    <th>Nama Pemohon</th>
    <th>Status</th>
    <th>Pembayaran</th>
</tr>

<?php
$no = 1;

$data = mysqli_query($conn,
"SELECT * FROM pengurusan");

while($d = mysqli_fetch_array($data)){
?>

<tr>
    <td><?= $no++; ?></td>
    <td><?= $d['no_antrian']; ?></td>
    <td><?= $d['no_daftar']; ?></td>
    <td><?= $d['nama_pemohon']; ?></td>
    <td><?= $d['status']; ?></td>
    <td>Rp <?= number_format($d['pembayaran']); ?></td>
</tr>

<?php } ?>

</table>