<?php
$str = "Les choses que l'on Possède finissent par nous posséder.";

$i = 0;
while (isset($str[$i])) {
    $i++;
}

for ($j = $i - 1; $j >= 0; $j--) {
    echo $str[$j];
}
?>
