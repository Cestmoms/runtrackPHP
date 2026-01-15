<?php
if (isset($_POST["deco"])) {
    setcookie("prenom", "", time() - 3600);
    header("Location: index.php");
    exit;
}

if (isset($_POST["connexion"]) && isset($_POST["prenom"])) {
    setcookie("prenom", $_POST["prenom"], time() + 3600);
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<body>

<?php
if (isset($_COOKIE["prenom"])) {
    echo "Bonjour " . $_COOKIE["prenom"] . " !";
    ?>

    <form method="post">
        <button type="submit" name="deco">Déconnexion</button>
    </form>

<?php
}

else {
    ?>

    <form method="post">
        <input type="text" name="prenom">
        <button type="submit" name="connexion">Connexion</button>
    </form>

<?php
}
?>

</body>
</html>
