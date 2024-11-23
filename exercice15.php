<?php
$action = $_GET['action'];
if ($action === "vendre") {
    header("Location: vendre.php");
} elseif ($action === "acheter") {
    header("Location: acheter.php");
} elseif ($action === "louer") {
    header("Location: louer.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="choix.php" method="GET">
    <button type="submit" name="action" value="vendre">Vendre</button>
    <button type="submit" name="action" value="acheter">Acheter</button>
    <button type="submit" name="action" value="louer">Louer</button>
</form>
</body>
</html>