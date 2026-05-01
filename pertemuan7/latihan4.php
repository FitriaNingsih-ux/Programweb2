<?php
$var = array(1,2,3,4,5,6,7);
if (is_array($var)) {
    $status = "";
} else {
    $status = "bukan";
}
echo "\$var = array(1,2,3,4,5,6,7) <br>";
echo "Variabel \$var $status merupakan array";
?>