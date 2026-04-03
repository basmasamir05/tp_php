<!DOCTYPE html>
<html>
<body>

<form method="post">
    Entrer un nombre n: 
    <input type="number" name="n">
    <input type="submit" value="Valider">
</form>

<?php
if ($_POST) {
    $n = $_POST["n"];

    echo "<h3>Table de multiplication</h3>";
    for ($i = 1; $i <= 10; $i++) {
        echo "$n x $i = " . ($n * $i) . "<br>";
    }

    echo "<h3>Triangle</h3>";
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }

    echo "<h3>Carré</h3>";
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $n; $j++) {
            echo "*";
        }
        echo "<br>";
    }

    echo "<h3>Nombres pairs</h3>";
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }

    $somme = 0;
    for ($i = 1; $i <= $n; $i++) {
        $somme += $i;
    }
    echo "<br>Somme = $somme";

    if ($n % 2 == 0) {
        echo "<br>$n est pair";
    } else {
        echo "<br>$n est impair";
    }
}
?>
</body>
</html>