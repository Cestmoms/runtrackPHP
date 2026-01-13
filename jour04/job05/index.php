<!DOCTYPE html>
<html>
<body>

<form method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Connexion</button>
</form>

<?php
if (isset($_POST["username"]) && isset($_POST["password"])) {

    if ($_POST["username"] == "John" && $_POST["password"] == "Rambo") {
        echo "c’est pas ma guerre";
    } else {
        echo "votre pire cauchemar";
    }

}
?>

</body>
</html>
