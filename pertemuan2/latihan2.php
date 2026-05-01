<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<html>
<head>
<title>Latihan 3</title>
</head>
<body>

<h2>Perhitungan Sederhana</h2>

<form method="post">
Nilai A: <input type="number" name="a"><br><br>
Nilai B: <input type="number" name="b"><br><br>
<input type="submit" name="hitung" value="Hitung">
</form>

<?php
if(isset($_POST['hitung'])){
    $a = $_POST['a'];
    $b = $_POST['b'];

    echo "<h3>Hasil:</h3>";
    echo "Penjumlahan: " . ($a + $b) . "<br>";
    echo "Pengurangan: " . ($a - $b) . "<br>";
    echo "Perkalian: " . ($a * $b) . "<br>";

    if($b != 0){
        echo "Pembagian: " . ($a / $b) . "<br>";
    } else {
        echo "Pembagian: Tidak bisa dibagi 0<br>";
    }
}
?>

</body>
</html>