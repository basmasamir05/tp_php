<!-- exercice 1 -->
<html>
    <body>
        <form action="index.php" method="post">
            <label>Nom :</label>
            <input type="text"  name="nom" required>
            <label>Prenom :</label>
            <input type="text"  name="prenom" required>
            <label>Age :</label>
            <input type="text"  name="age" required>
            <label>Note1 :</label>
            <input type="text"  name="note1" min="0" max="20" required>
            <label>Note2 :</label>
            <input type="text"  name="note2" min="0" max="20" required>
            <label>Note3 :</label>
            <input type="text"  name="note3" min="0" max="20" required>
            <input type="submit" name="valider" value="valider">
        </form>
    </body>
</html>
<?php
define("Etablissement", "FPK");

if(isset($_POST['valider']))
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = (int)$_POST['age'];
    $note1 = (float)$_POST['note1'];
    $note2 = (float)$_POST['note2'];
    $note3 = (float)$_POST['note3'];

    $somme = $note1 + $note2 + $note3;
    $moyenne = $somme / 3;

    echo "Nom : $nom <br>";
    echo "Prenom : $prenom <br>";
    echo "Age : $age <br>";
    echo "Note 1 : $note1 <br>";
    echo "Note 2 : $note2 <br>";
    echo "Note 3 : $note3 <br>";
    echo "Etablissement : " . Etablissement . "<br>";
    echo "Somme : $somme <br>";
    echo "Moyenne : $moyenne <br>";

    if ($moyenne >= 16) {
        $mention = "Excellent";
    } elseif ($moyenne >= 14){
        $mention = "Bien";
    } elseif ($moyenne >= 12){
        $mention = "Assez bien";
    } elseif ($moyenne >= 10){
        $mention = "Passable";
    } else {
        $mention = "Échec";
    }

    echo $mention . "<br>";

    echo ($age >= 16) ? "majeur<br>" : "mineur<br>";
    echo ($moyenne >= 10) ? "Admis<br>" : "Non admis<br>";
// exercice 2
    switch ($mention) {
        case "Excellent":
            echo "Félicitations.<br>";
            break;
        case "Bien":
            echo "Bon travail.<br>";
            break; 
        case "Assez bien":
            echo "Efforts satisfaisants.<br>";
            break;
        case "Passable":
            echo "Peut mieux faire.<br>";
            break;
        case "Échec":
            echo "Doit redoubler d'efforts.<br>";
            break;
    }

    $notes = [$note1, $note2, $note3];
    for ($i = 0; $i < 3; $i++) {
        echo "Note " . ($i + 1) . " : " . $notes[$i] . "<br>";
    }

    $i = 1;
    echo "Nombres de 1 à $age : ";
    while ($i <= $age) {
        echo $i . " ";
        $i++;
    }
    echo "<br>";

    $matieres = ["PHP", "HTML", "CSS"];
    echo "Notes par matière : <br>";
    foreach ($matieres as $index => $matiere) {
        echo "$matiere : " . $notes[$index] . "<br>";
    }
}
?>