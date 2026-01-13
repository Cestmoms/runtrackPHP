<!DOCTYPE html>
<html>
<body>

<form method="post">
    <input type="text" name="a">
    <input type="text" name="b">
    <button type="submit">Envoyer</button>
</form>

<?php
$compteur = 0;

foreach ($_POST as $x) {
    $compteur++;
}

echo $compteur;
?>

</body>
</html>
