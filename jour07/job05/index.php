<?php
session_start();

if (isset($_POST["reset"])) {
    $_SESSION["plateau"] = array_fill(0, 9, "-");
    $_SESSION["joueur"] = "X";
    $_SESSION["message"] = "";
}

if (!isset($_SESSION["plateau"])) {
    $_SESSION["plateau"] = array_fill(0, 9, "-");
    $_SESSION["joueur"] = "X";
    $_SESSION["message"] = "";
}

if (isset($_POST["case"])) {
    $case = $_POST["case"];
    if ($_SESSION["plateau"][$case] == "-") {
        $_SESSION["plateau"][$case] = $_SESSION["joueur"];
        $_SESSION["joueur"] = ($_SESSION["joueur"] == "X") ? "O" : "X";
    }
}

function verifierGagnant($plateau) {
    $combinaisons = [
        [0,1,2],[3,4,5],[6,7,8],
        [0,3,6],[1,4,7],[2,5,8],
        [0,4,8],[2,4,6]
    ];
    foreach ($combinaisons as $c) {
        if ($plateau[$c[0]] != "-" &&
            $plateau[$c[0]] == $plateau[$c[1]] &&
            $plateau[$c[1]] == $plateau[$c[2]]) {
            return $plateau[$c[0]];
        }
    }
    return null;
}

$gagnant = verifierGagnant($_SESSION["plateau"]);

if ($gagnant) {
    $_SESSION["message"] = $gagnant . " a gagné !";
    $_SESSION["plateau"] = array_fill(0, 9, "-");
} elseif (!in_array("-", $_SESSION["plateau"])) {
    $_SESSION["message"] = "Match nul !";
    $_SESSION["plateau"] = array_fill(0, 9, "-");
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Morpion</h2>
<p><?php echo $_SESSION["message"]; ?></p>

<form method="post">
<table border="1" style="border-collapse: collapse;">
<?php
for ($i = 0; $i < 3; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 3; $j++) {
        $index = $i*3 + $j;
        echo "<td style='width:50px; height:50px; text-align:center;'>";
        echo "<button type='submit' name='case' value='$index'>";
        echo $_SESSION["plateau"][$index];
        echo "</button>";
        echo "</td>";
    }
    echo "</tr>";
}
?>
</table>
</form>

<form method="post" style="margin-top:10px;">
    <button type="submit" name="reset">Réinitialiser la partie</button>
</form>

</body>
</html>
