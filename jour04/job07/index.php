<!DOCTYPE html>
<html>
<body>

<form method="get">
    <input type="number" name="largeur" placeholder="Largeur">
    <input type="number" name="hauteur" placeholder="Hauteur">
    <button type="submit">Construire</button>
</form>

<pre>
<?php
if (isset($_GET["largeur"]) && isset($_GET["hauteur"])) {

    $largeur = $_GET["largeur"];
    $hauteur = $_GET["hauteur"];

    // TOIT
    for ($i = 1; $i <= $hauteur; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "\n";
    }

    // MURS
    for ($i = 1; $i <= $hauteur; $i++) {
        for ($j = 1; $j <= $largeur; $j++) {
            echo "*";
        }
        echo "\n";
    }
}
?>
</pre>

</body>
</html>
