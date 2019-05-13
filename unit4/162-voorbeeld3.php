<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Mijn PHP-script</title>
</head>
<body>
<h3>Variabelen</h3>
<?php
$naam = "Carl ";
$adres = "Kruislaan 111 ";
$woonplaats = "Utrecht";
$naw = $naam . $adres  . $woonplaats;
echo("Gegevens: $naw");
?>
</body>
</html>