<?php
$prix_ht = floatval($_POST['prix']);
$taux_tva = floatval($_POST['tva']);
$montant_tva = $prix_ht * $taux_tva / 100;
$prix_ttc = $prix_ht + $montant_tva;

echo "<form>";
echo "<label>Montant de la TVA :</label>";
echo "<input type='text' value='$montant_tva' readonly><br>";
echo "<label>Prix TTC :</label>";
echo "<input type='text' value='$prix_ttc' readonly><br>";
echo "</form>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="tva.php" method="POST">
    <label for="prix">Prix HT :</label>
    <input type="text" id="prix" name="prix"><br>
    <label for="tva">Taux de TVA (%) :</label>
    <input type="text" id="tva" name="tva"><br>
    <button type="submit">Calculer</button>
</form>
</body>
</html>