<?php
$file = fopen("test1.txt","r");

echo fgets($file); // baca 1 baris

fclose($file);
?>