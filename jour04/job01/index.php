<!DOCTYPE html>
<html>
<body>
<form method="get">
    <input type="text" name="prenom" placeholder="Prénom">
    <input type="text" name="nom" placeholder="Nom">
    <input type="text" name="age" placeholder="Âge">
    <button type="submit">Envoyer</button>
</form>
</body>
</html>

<?php
var_dump($_GET);

$compteur = 0;
foreach ($_GET as $i) {
    $compteur++;
}
echo $compteur;
