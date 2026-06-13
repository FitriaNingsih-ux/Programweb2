<?php
try {
    $namaFile = "data.txt";

    if (!file_exists($namaFile)) {
        throw new Exception("File tidak ditemukan!");
    }

    $file = fopen($namaFile, "r");
    echo "File berhasil dibuka.";
    fclose($file);

} catch (Exception $e) {
    echo "Terjadi kesalahan: " . $e->getMessage();
}
?>