<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>


<html>
<head>
<title>Counter Pengunjung</title>
</head>
<body>

<?php
$nama_file = "counter.dat";

// cek apakah file sudah ada
if (file_exists($nama_file)) {

    $berkas = fopen($nama_file, "r");
    $pencacah = (int) fgets($berkas);
    fclose($berkas);

    $pencacah++;

} else {
    $pencacah = 1;
}

// simpan kembali ke file
$berkas = fopen($nama_file, "w");
fputs($berkas, $pencacah);
fclose($berkas);

// tampilkan ke browser
echo "Anda pengunjung ke-$pencacah";
?>

</body>
</html>