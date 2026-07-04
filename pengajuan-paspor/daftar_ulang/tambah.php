<?php
include '../koneksi.php';

if(isset($_POST['simpan'])){

    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $ktp = $_POST['ktp'];
    $kk = $_POST['kk'];
    $ijazah = $_POST['ijazah'];

    if($ktp=="Ada" && $kk=="Ada" && $ijazah=="Ada"){
        $keterangan = "OK";
    }else{
        $keterangan = "Tidak";
    }

    $q = mysqli_query($conn,
    "SELECT MAX(no_antrian) as nomor
    FROM daftar_ulang");

    $d = mysqli_fetch_array($q);

    $antrian = $d['nomor'] + 1;

    mysqli_query($conn,"
        INSERT INTO daftar_ulang
        (no_daftar,nama_pemohon,ktp,kk,ijazah,keterangan,no_antrian)
        VALUES
        ('$no','$nama','$ktp','$kk','$ijazah','$keterangan','$antrian')
    ");

    header("Location:index.php");
}
?>

<h2>Daftar Ulang Paspor</h2>

<form method="POST">

No Daftar<br>
<input type="text" name="no" required>

<br><br>

Nama Pemohon<br>
<input type="text" name="nama" required>

<br><br>

KTP<br>
<select name="ktp">
    <option>Ada</option>
    <option>Tidak</option>
</select>

<br><br>

KK<br>
<select name="kk">
    <option>Ada</option>
    <option>Tidak</option>
</select>

<br><br>

Ijazah/Akta<br>
<select name="ijazah">
    <option>Ada</option>
    <option>Tidak</option>
</select>

<br><br>

<button name="simpan">
    Simpan
</button>

</form>