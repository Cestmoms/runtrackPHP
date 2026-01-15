<?php
if (!isset($_COOKIE["nbvisites"])) {
    setcookie("nbvisites", 1);
    $nbvisites = 1;
} else {

$nbvisites = $_COOKIE["nbvisites"] + 1;
    setcookie("nbvisites", $nbvisites);
}

if (isset($_POST["reset"])) {
    setcookie("nbvisites", 0);
    $nbvisites = 0;
}
?>

<!DOCTYPE html>
<html>
<body>

<p>Nombre de visites : <?php echo $nbvisites; ?></p>

<form method="post">
    <button type="submit" name="reset">Reset</button>
</form>

</body>
</html>
