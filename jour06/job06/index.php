<!DOCTYPE html>
<html>
<head>
<?php
if (isset($_POST['style'])) {
    $style = $_POST['style'];
    echo "<link rel='stylesheet' href='$style.css'>";
}
?>
</head>
<body>

<form method="post">
    <label>Choisis un style :</label>
    <select name="style">
        <option value="style1">Style 1</option>
        <option value="style2">Style 2</option>
        <option value="style3">Style 3</option>
    </select>
    <button type="submit">Appliquer</button>
</form>

</body>
</html>
