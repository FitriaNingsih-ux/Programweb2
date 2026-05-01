<?php
function repeat($text, $num = 10)
{
   echo "<ol>\r\n";
   for($i = 0; $i < $num; $i++)
   {
      echo "<li>$text </li>\r\n";
   }
   echo "</ol>";
}

// Pemanggilan 1: Dengan dua argumen
repeat("I'm the best", 15); // Mengulang 15 kali

// Pemanggilan 2: Hanya satu argumen
repeat("You're the man"); // Mengulang 10 kali (menggunakan nilai default)
?>