<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

$premier = $str[0];

$i = 0;
while (isset($str[$i])) {
    $i++;
}

for ($j = 0; $j < $i - 1; $j++) {
    $str[$j] = $str[$j + 1];
}

$str[$i - 1] = $premier;

echo $str;
?>
