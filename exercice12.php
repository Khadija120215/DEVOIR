<?php
echo "<table border='1'>";
echo "<tr><th>Nom</th><th>Prénom</th><th>Adresse</th><th>Ville</th><th>Code postal</th></tr>";
echo "<tr>";
echo "<td>" . htmlspecialchars($_POST['nom']) . "</td>";
echo "<td>" . htmlspecialchars($_POST['prenom']) . "</td>";
echo "<td>" . htmlspecialchars($_POST['adresse']) . "</td>";
echo "<td>" . htmlspecialchars($_POST['ville']) . "</td>";
echo "<td>" . htmlspecialchars($_POST['code_postal']) . "</td>";
echo "</tr>";
echo "</table>";
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
 </head>
 <body>
 <form action="traitement.php" method="POST">
    <fieldset>
        <legend>Adresse client</legend>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom"><br>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom"><br>
        <label for="adresse">Adresse :</label>
        <input type="text" id="adresse" name="adresse"><br>
        <label for="ville">Ville :</label>
        <input type="text" id="ville" name="ville"><br>
        <label for="code_postal">Code postal :</label>
        <input type="text" id="code_postal" name="code_postal"><br>
        <button type="submit">Envoyer</button>
    </fieldset>
</form>
 </body>
 </html>


