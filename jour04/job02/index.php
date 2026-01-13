<!DOCTYPE html>
<html>
<body>

<form method="get">
    <input type="text" name="prenom">
    <input type="text" name="age">
    <button type="submit">Envoyer</button>
</form>

<table border="1">
    <tr>
        <th>Nom</th>
        <th>Valeur</th>
    </tr>

<?php
foreach ($_GET as $nom => $valeur) {
    echo "<tr>";
    echo "<td>$nom</td>";
    echo "<td>$valeur</td>";
    echo "</tr>";
}
?>

</table>

</body>
</html>
