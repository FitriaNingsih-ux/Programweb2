<?php
$var = array('18', '11', '2010');
$tanggal = join("/", $var); // Bisa juga menggunakan implode("/", $var)
echo "Tanggal: $tanggal"; 
?>