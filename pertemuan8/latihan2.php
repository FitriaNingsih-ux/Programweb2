<html>
<head><title>Contoh Penggunaan UDF</title></head>
<body>
    <form method="post">
        Masukkan Bilangan Pertama : <br>
        <input type="text" name="A" size=10> <br>
        Masukkan Bilangan Kedua : <br>
        <input type="text" name="B" size=10> <br>
        <input type="submit" value="hitung">
    </form>

<?php
if ($_POST) {
    $A = $_POST["A"];
    $B = $_POST["B"];

    function jumlah($A, $B) {
        return $A + $B;
    }

    function kurang($A, $B) {
        return $A - $B;
    }

    function kali($A, $B) {
        return $A * $B;
    }

    function bagi($A, $B) {
        return $A / $B;
    }

    echo "<br>Bilangan Pertama : $A";
    echo "<br>Bilangan Kedua : $B <br><br>";

    // Penjumlahan
    $hasilJumlah = jumlah($A, $B);
    printf("Hasil Penjumlahan: %d + %d = %d <br><br>", $A, $B, $hasilJumlah);

    // Pengurangan
    $hasilKurang = kurang($A, $B);
    printf("Hasil Pengurangan: %d - %d = %d <br><br>", $A, $B, $hasilKurang);

    // Perkalian
    $hasilKali = kali($A, $B);
    printf("Hasil Perkalian: %d * %d = %d <br><br>", $A, $B, $hasilKali);

    // Pembagian
    $hasilBagi = bagi($A, $B);
    printf("Hasil Pembagian: %d / %d = %d <br><br>", $A, $B, $hasilBagi);
}
?>
</body>
</html>