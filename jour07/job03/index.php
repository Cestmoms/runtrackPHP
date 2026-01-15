<?php
session_start();

if (!isset($_SESSION["prenoms"])) {
    $_SESSION["prenoms"] = [];
}

if (isset($_POST["prenom"])) {
    $_SESSION["prenoms"][] = $_POST["prenom"];
}

if (isset($_POST["reset"])) {
    $_SESSION["prenoms"] = [];
}
?>

<!DOCTYPE html>
<html>
<body>

<form method="post">
    <input type="text" name="prenom">
    <button type="submit">Ajouter</button>
</form>

<form method="post">
    <button type="submit" name="reset">Reset</button>
</form>

<h3>Liste des prénoms :</h3>

<?php
foreach ($_SESSION["prenoms"] as $prenom) {
    echo $prenom . "<br>";
}
?>

</body>
</html>
