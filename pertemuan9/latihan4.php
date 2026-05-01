<HTML>
<HEAD>
    <TITLE> Tanggal </TITLE>
</HEAD>
<BODY>
    <font size="10px">
    <?php
    echo "Sekarang tanggal ";
    echo date('d-F-Y'); // Menampilkan: Tanggal(01-31)-Nama Bulan(Full)-Tahun(4 digit)
    echo "<br>dan jam ";
    echo date('h:i:s A'); // Menampilkan: Jam(01-12):Menit:Detik AM/PM
    ?>
    </FONT>
</BODY>
</HTML>