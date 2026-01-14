<?php
function bubblesort($tab, $croissant) {

    $taille = 0;

    while (isset($tab[$taille])) {
        $taille++;
    }

    for ($i = 0; $i < $taille; $i++) {
        for ($j = 0; $j < $taille - 1; $j++) {

            if ($croissant) {
                
                if ($tab[$j] > $tab[$j + 1]) {
                    $temp = $tab[$j];
                    $tab[$j] = $tab[$j + 1];
                    $tab[$j + 1] = $temp;
                }
            } else {
                
                if ($tab[$j] < $tab[$j + 1]) {
                    $temp = $tab[$j];
                    $tab[$j] = $tab[$j + 1];
                    $tab[$j + 1] = $temp;
                }
            }

        }
    }

    return $tab;
}

$tab = ["abc", "ghi", "def"];

$resultatCroissant = bubblesort($tab, true);
$resultatDecroissant = bubblesort($tab, false);

echo "Croissant :<br>";
foreach ($resultatCroissant as $mot) {
    echo $mot . "<br>";
}

echo "<br>Décroissant :<br>";
foreach ($resultatDecroissant as $mot) {
    echo $mot . "<br>";
}
?>
