<?php
$myBool = true;
$entier = 10;
$chaine = "Mohamed";
$virgule = 2.5;

echo "<h1>Mon Tableau</h1>";
echo "<table border='1'>";

// En-tête
echo "<tr>";
echo "<th>Type</th>";
echo "<th>Nom</th>";
echo "<th>Valeur</th>";
echo "</tr>";

// Ligne booléen
echo "<tr>";
echo "<td>" . gettype($myBool) . "</td>";
echo "<td>myBool</td>";
echo "<td>true</td>";
echo "</tr>";

// Ligne entier
echo "<tr>";
echo "<td>" . gettype($entier) . "</td>";
echo "<td>entier</td>";
echo "<td>$entier</td>";
echo "</tr>";

// Ligne chaîne
echo "<tr>";
echo "<td>" . gettype($chaine) . "</td>";
echo "<td>chaine</td>";
echo "<td>$chaine</td>";
echo "</tr>";

// Ligne float
echo "<tr>";
echo "<td>" . gettype($virgule) . "</td>";
echo "<td>virgule</td>";
echo "<td>$virgule</td>";
echo "</tr>";

echo "</table>";
?>
