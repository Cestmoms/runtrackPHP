<?php
for ($i = 2; $i <= 1000; $i++) {

    $premier = true;

    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            $premier = false;
        }
    }

    if ($premier == true) {
        echo $i . "<br>";
    }
}
?>
