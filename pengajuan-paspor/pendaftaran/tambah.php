<?php
include '../koneksi.php';

if(isset($_POST['simpan'])){

    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $tgl = $_POST['tgl'];

    $hari = date('l', strtotime($tgl));
    $tanggal_datang = date('Y-m-d', strtotime($tgl.' +1 day'));
    $jam = '08:00:00';

    mysqli_query($conn,"
    INSERT INTO pendaftar
    (no_daftar,nama_pemohon,tgl_daftar,hari,tanggal_datang,jam)
    VALUES
    ('$no','$nama','$tgl','$hari','$tanggal_datang','$jam')
    ");

    header('Location:index.php');
}
?>

<h2>Form Pendaftaran Paspor</h2>

<form method="POST">

No Daftar<br>
<input type="text" name="no" required>

<br><br>

Nama Pemohon<br>
<input type="text" name="nama" required>

<br><br>

Tanggal Daftar<br>
<input type="date" name="tgl" required>

<br><br>

<button type="submit" name="simpan">
Simpan
</button>

</form>