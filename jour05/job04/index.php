<?php

function calcule($a, $op, $b) {
    if ($op == "+") {
        return $a + $b;
    } elseif ($op == "-") {
        return $a - $b;
    } elseif ($op == "*") {
        return $a * $b;
    } elseif ($op == "/") {
        return $a / $b;
    } elseif ($op == "%") {
        return $a % $b;
    } else {
        return "Opération inconnue";
    }
}

echo calcule(10, "+", 5); // 15
echo "<br>";
echo calcule(10, "-", 5); // 5
echo "<br>";
echo calcule(10, "*", 5); // 50
echo "<br>";
echo calcule(10, "/", 5); // 2
echo "<br>";
echo calcule(10, "%", 3); // 1
?>
